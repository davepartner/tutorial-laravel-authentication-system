<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     * Returns the registration form view for new users to sign up.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     * Validates user input, creates a new user account with secure password hashing,
     * and logs the user in automatically after registration.
     *
     * @throws ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        // Validate the registration form input
        // These rules ensure data integrity and security
        $request->validate([
            // Name must be required, a string, and maximum 255 characters
            'name' => ['required', 'string', 'max:255'],
            // Email must be required, a string, lowercase, valid email format, max 255 chars, and unique in users table
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            // Password must be required, confirmed (password_confirmation field), and meet default password strength rules
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        // Create a new user in the database
        // Hash::make() securely hashes the password using bcrypt (default Laravel hashing)
        // Never store plain text passwords - always hash them!
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Dispatch the Registered event
        // This triggers email verification if configured
        event(new Registered($user));

        // Log the user in automatically after registration
        // This provides a seamless user experience
        Auth::login($user);

        // Redirect to the dashboard
        return redirect(route('dashboard', absolute: false));
    }
}
