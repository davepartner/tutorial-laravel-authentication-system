<?php

namespace App\Http\Requests\Auth;

use Illuminate\Auth\Events\Lockout;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     * Returns true because anyone can attempt to login.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     * These rules ensure email and password are provided and properly formatted.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            // Email must be required, a string, and a valid email format
            'email' => ['required', 'string', 'email'],
            // Password must be required and a string
            'password' => ['required', 'string'],
        ];
    }

    /**
     * Attempt to authenticate the request's credentials.
     * This method validates the user's email and password against the database.
     * Includes rate limiting to prevent brute force attacks.
     *
     * @throws ValidationException
     */
    public function authenticate(): void
    {
        // Check if the user has exceeded the rate limit (5 attempts per minute)
        $this->ensureIsNotRateLimited();

        // Attempt to authenticate the user with email and password
        // The 'remember' parameter allows "remember me" functionality
        if (! Auth::attempt($this->only('email', 'password'), $this->boolean('remember'))) {
            // Increment the rate limiter counter on failed login
            RateLimiter::hit($this->throttleKey());

            // Throw validation exception with generic error message
            // Generic message prevents username enumeration attacks
            throw ValidationException::withMessages([
                'email' => trans('auth.failed'),
            ]);
        }

        // Clear the rate limiter on successful login
        RateLimiter::clear($this->throttleKey());
    }

    /**
     * Ensure the login request is not rate limited.
     * Prevents brute force attacks by limiting login attempts.
     * Allows 5 login attempts per minute per email/IP combination.
     *
     * @throws ValidationException
     */
    public function ensureIsNotRateLimited(): void
    {
        // Check if the user has exceeded 5 attempts
        if (! RateLimiter::tooManyAttempts($this->throttleKey(), 5)) {
            return;
        }

        // Dispatch lockout event for logging and monitoring
        event(new Lockout($this));

        // Get seconds remaining before the next attempt is allowed
        $seconds = RateLimiter::availableIn($this->throttleKey());

        // Throw validation exception with throttle message
        throw ValidationException::withMessages([
            'email' => trans('auth.throttle', [
                'seconds' => $seconds,
                'minutes' => ceil($seconds / 60),
            ]),
        ]);
    }

    /**
     * Get the rate limiting throttle key for the request.
     * Creates a unique key based on the user's email and IP address.
     * This ensures rate limiting is applied per user/IP combination.
     */
    public function throttleKey(): string
    {
        // Combine lowercase email and IP address to create unique throttle key
        // Str::transliterate handles international characters
        return Str::transliterate(Str::lower($this->string('email')).'|'.$this->ip());
    }
}
