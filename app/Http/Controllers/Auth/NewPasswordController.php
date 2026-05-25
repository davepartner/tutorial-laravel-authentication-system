<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class NewPasswordController extends Controller
{
    /**
     * Display the password reset view.
     * Returns the password reset form where users enter their new password.
     */
    public function create(Request $request): View
    {
        return view('auth.reset-password', ['request' => $request]);
    }

    /**
     * Handle an incoming new password request.
     * Validates the reset token, email, and new password.
     * Securely updates the user's password with hashing and regenerates the remember token.
     *
     * @throws ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        // Validate the password reset form input
        $request->validate([
            // Token is required to verify the reset link is valid
            'token' => ['required'],
            // Email must be required and in valid email format
            'email' => ['required', 'email'],
            // Password must be required, confirmed, and meet strength requirements
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        // Attempt to reset the user's password using the provided token
        // Password::reset() validates the token and executes the callback if valid
        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function (User $user) use ($request) {
                // Securely hash the new password using bcrypt
                // Hash::make() ensures the password is never stored in plain text
                $user->forceFill([
                    'password' => Hash::make($request->password),
                    // Regenerate the remember token for security
                    // This invalidates all existing "remember me" sessions
                    'remember_token' => Str::random(60),
                ])->save();

                // Dispatch the PasswordReset event
                // This can be used for logging, notifications, or other post-reset actions
                event(new PasswordReset($user));
            }
        );

        // Check if the password was successfully reset
        // If successful, redirect to login with success message
        // If failed (e.g., invalid token), return with error message
        return $status == Password::PASSWORD_RESET
                    ? redirect()->route('login')->with('status', __($status))
                    : back()->withInput($request->only('email'))
                        ->withErrors(['email' => __($status)]);
    }
}
