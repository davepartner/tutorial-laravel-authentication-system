<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class PasswordResetLinkController extends Controller
{
    /**
     * Display the password reset link request view.
     * Returns the forgot password form where users enter their email.
     */
    public function create(): View
    {
        return view('auth.forgot-password');
    }

    /**
     * Handle an incoming password reset link request.
     * Validates the email, generates a secure password reset token,
     * and sends a reset link to the user's email address.
     *
     * @throws ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        // Validate the email input
        // Email must be required and in valid email format
        $request->validate([
            'email' => ['required', 'email'],
        ]);

        // Send the password reset link to the user's email
        // Password::sendResetLink() generates a secure token and sends an email
        // The token is stored in the password_reset_tokens table with an expiration time
        $status = Password::sendResetLink(
            $request->only('email')
        );

        // Check if the reset link was sent successfully
        // If successful, return with success message
        // If failed (e.g., email not found), return with error message
        return $status == Password::RESET_LINK_SENT
                    ? back()->with('status', __($status))
                    : back()->withInput($request->only('email'))
                        ->withErrors(['email' => __($status)]);
    }
}
