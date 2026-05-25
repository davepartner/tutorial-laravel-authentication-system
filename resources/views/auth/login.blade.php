<x-guest-layout>
    <!-- Session Status -->
    <!-- Displays success/error messages from previous authentication attempts -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        {{-- CSRF Protection --}}
        {{-- @csrf directive generates a hidden CSRF token field --}}
        {{-- This prevents Cross-Site Request Forgery attacks by validating the token --}}
        {{-- The token is automatically validated by Laravel's middleware --}}
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            {{-- old('email') repopulates the email field if validation fails --}}
            {{-- autofocus automatically focuses on this field when page loads --}}
            {{-- autocomplete="username" helps browsers fill in credentials securely --}}
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            {{-- Display validation errors for the email field --}}
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            {{-- type="password" hides the password input for security --}}
            {{-- autocomplete="current-password" helps browsers fill in credentials securely --}}
            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            {{-- Display validation errors for the password field --}}
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                {{-- Remember me checkbox keeps user logged in across browser sessions --}}
                {{-- Uses a secure remember token stored in the database --}}
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                {{-- Link to password reset page --}}
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            {{-- Submit button for the login form --}}
            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
