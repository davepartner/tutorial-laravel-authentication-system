<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        {{-- CSRF Protection --}}
        {{-- @csrf directive generates a hidden CSRF token field --}}
        {{-- This prevents Cross-Site Request Forgery attacks by validating the token --}}
        {{-- The token is automatically validated by Laravel's middleware --}}
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            {{-- old('name') repopulates the name field if validation fails --}}
            {{-- autofocus automatically focuses on this field when page loads --}}
            {{-- autocomplete="name" helps browsers fill in the name field --}}
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            {{-- Display validation errors for the name field --}}
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            {{-- old('email') repopulates the email field if validation fails --}}
            {{-- autocomplete="username" helps browsers fill in credentials securely --}}
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            {{-- Display validation errors for the email field --}}
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <div class="input-group mt-1">
                {{-- type="password" hides the password input for security --}}
                {{-- autocomplete="new-password" tells browsers this is a new password (not for auto-fill) --}}
                {{-- aria-describedby associates the input with error messages and requirements --}}
                {{-- aria-invalid indicates validation state --}}
                <input id="password" 
                       class="form-control"
                       type="password"
                       name="password"
                       required autocomplete="new-password" 
                       oninput="checkPasswordRequirements()"
                       aria-describedby="password-error password-requirements"
                       aria-invalid="{{ $errors->has('password') ? 'true' : 'false' }}" />
                <button class="btn btn-outline-secondary" type="button" id="password-toggle-button" aria-label="Show password" aria-pressed="false" aria-controls="password">
                    Show
                </button>
            </div>

            {{-- Display validation errors for the password field --}}
            <x-input-error :messages="$errors->get('password')" class="mt-2" id="password-error" />

            {{-- Password Requirements Indicator --}}
            {{-- Shows real-time feedback on which password requirements are met --}}
            {{-- aria-live ensures screen readers announce changes --}}
            <div class="mt-3 p-3 bg-gray-50 rounded-md border border-gray-200" id="password-requirements" aria-live="polite">
                <p class="text-sm font-medium text-gray-700 mb-2">Password Requirements:</p>
                <ul class="space-y-1 text-sm" role="list">
                    <li id="req-length" class="flex items-center text-gray-500" role="listitem">
                        <span class="mr-2" aria-hidden="true">○</span>
                        <span>At least 8 characters</span>
                    </li>
                    <li id="req-uppercase" class="flex items-center text-gray-500" role="listitem">
                        <span class="mr-2" aria-hidden="true">○</span>
                        <span>At least 1 uppercase letter</span>
                    </li>
                    <li id="req-lowercase" class="flex items-center text-gray-500" role="listitem">
                        <span class="mr-2" aria-hidden="true">○</span>
                        <span>At least 1 lowercase letter</span>
                    </li>
                    <li id="req-number" class="flex items-center text-gray-500" role="listitem">
                        <span class="mr-2" aria-hidden="true">○</span>
                        <span>At least 1 number</span>
                    </li>
                    <li id="req-special" class="flex items-center text-gray-500" role="listitem">
                        <span class="mr-2" aria-hidden="true">○</span>
                        <span>At least 1 special character</span>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <div class="input-group mt-1">
                {{-- type="password" hides the password confirmation input for security --}}
                {{-- The name "password_confirmation" is automatically validated by Laravel's "confirmed" rule --}}
                {{-- autocomplete="new-password" prevents auto-fill of existing passwords --}}
                {{-- aria-describedby associates the input with error messages --}}
                {{-- aria-invalid indicates validation state --}}
                <input id="password_confirmation" 
                       class="form-control"
                       type="password"
                       name="password_confirmation" required autocomplete="new-password" 
                       oninput="checkPasswordMatch()"
                       aria-describedby="password-confirmation-error password-match-indicator"
                       aria-invalid="{{ $errors->has('password_confirmation') ? 'true' : 'false' }}" />
                <button class="btn btn-outline-secondary" type="button" id="password-confirmation-toggle-button" aria-label="Show password confirmation" aria-pressed="false" aria-controls="password_confirmation">
                    Show
                </button>
            </div>

            {{-- Display validation errors for the password confirmation field --}}
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" id="password-confirmation-error" />

            {{-- Password Match Indicator --}}
            {{-- Shows real-time feedback on whether passwords match --}}
            {{-- aria-live ensures screen readers announce changes --}}
            <div id="password-match-indicator" class="mt-2 text-sm hidden" aria-live="polite">
                <span id="match-icon" aria-hidden="true"></span>
                <span id="match-message"></span>
            </div>
        </div>

        <div class="flex items-center justify-end mt-4">
            {{-- Link to login page for users who already have an account --}}
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            {{-- Submit button for the registration form --}}
            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>

    {{-- JavaScript for Password Validation --}}
    {{-- Provides real-time feedback on password requirements and matching --}}
    <script>
        // Password Requirements Check
        function checkPasswordRequirements() {
            const password = document.getElementById('password').value;
            
            // Check each requirement
            const hasLength = password.length >= 8;
            const hasUppercase = /[A-Z]/.test(password);
            const hasLowercase = /[a-z]/.test(password);
            const hasNumber = /[0-9]/.test(password);
            const hasSpecial = /[!@#$%^&*(),.?":{}|<>]/.test(password);
            
            // Update requirement indicators
            updateRequirement('req-length', hasLength);
            updateRequirement('req-uppercase', hasUppercase);
            updateRequirement('req-lowercase', hasLowercase);
            updateRequirement('req-number', hasNumber);
            updateRequirement('req-special', hasSpecial);
            
            // Also check password match if confirmation has value
            const confirmation = document.getElementById('password_confirmation').value;
            if (confirmation) {
                checkPasswordMatch();
            }
        }
        
        function updateRequirement(elementId, isMet) {
            const element = document.getElementById(elementId);
            if (isMet) {
                element.classList.remove('text-gray-500');
                element.classList.add('text-green-600');
                element.querySelector('span[aria-hidden="true"]').textContent = '✓';
            } else {
                element.classList.remove('text-green-600');
                element.classList.add('text-gray-500');
                element.querySelector('span[aria-hidden="true"]').textContent = '○';
            }
        }
        
        function checkPasswordMatch() {
            const password = document.getElementById('password').value;
            const confirmation = document.getElementById('password_confirmation').value;
            const indicator = document.getElementById('password-match-indicator');
            const matchIcon = document.getElementById('match-icon');
            const matchMessage = document.getElementById('match-message');
            
            if (confirmation === '') {
                indicator.classList.add('hidden');
                return;
            }
            
            indicator.classList.remove('hidden');
            
            if (password === confirmation) {
                matchIcon.textContent = '✓';
                matchIcon.className = 'text-green-600 mr-2';
                matchMessage.textContent = 'Passwords match';
                matchMessage.className = 'text-green-600';
            } else {
                matchIcon.textContent = '✗';
                matchIcon.className = 'text-red-600 mr-2';
                matchMessage.textContent = 'Passwords do not match';
                matchMessage.className = 'text-red-600';
            }
        }

        function registerPasswordToggle(buttonId, inputId, showLabel, hideLabel) {
            const button = document.getElementById(buttonId);
            const input = document.getElementById(inputId);

            if (!button || !input) {
                return;
            }

            button.addEventListener('click', () => {
                const isHidden = input.type === 'password';
                input.type = isHidden ? 'text' : 'password';
                button.textContent = isHidden ? 'Hide' : 'Show';
                button.setAttribute('aria-label', isHidden ? hideLabel : showLabel);
                button.setAttribute('aria-pressed', isHidden ? 'true' : 'false');
            });
        }

        registerPasswordToggle('password-toggle-button', 'password', 'Show password', 'Hide password');
        registerPasswordToggle('password-confirmation-toggle-button', 'password_confirmation', 'Show password confirmation', 'Hide password confirmation');

    </script>
</x-guest-layout>
