<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     * Returns the login form view for users to enter their credentials.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     * Processes the login form submission, validates credentials,
     * and authenticates the user with session security measures.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        // Authenticate the user using the LoginRequest validation
        // This includes rate limiting and credential verification
        $request->authenticate();

        // Regenerate the session ID to prevent session fixation attacks
        // This creates a new session ID after login to prevent session hijacking
        $request->session()->regenerate();

        // Redirect to the intended URL or dashboard
        // If the user was trying to access a protected page, they'll be redirected there
        // Otherwise, they'll go to the dashboard
        return redirect()->intended(route('dashboard', absolute: false));
    }

    /**
     * Destroy an authenticated session (logout).
     * Logs the user out securely with session cleanup.
     */
    public function destroy(Request $request): RedirectResponse
    {
        // Log the user out from the web guard
        // This removes the user's authentication from the session
        Auth::guard('web')->logout();

        // Invalidate the current session
        // This makes the session data invalid, preventing reuse
        $request->session()->invalidate();

        // Regenerate the CSRF token
        // This creates a new CSRF token for the next session to prevent CSRF attacks
        $request->session()->regenerateToken();

        // Redirect to the home page
        return redirect('/');
    }
}
