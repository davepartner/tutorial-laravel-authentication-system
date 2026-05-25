<x-guest-layout>
    <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <div class="w-full h-[58px] rounded-xl border border-slate-300 bg-white px-5 flex items-center justify-between relative shadow-[0_0_0_0_rgba(0,0,0,0)] mt-1">
                <input id="email" 
                       class="w-full outline-none text-[16px] font-medium text-slate-600 bg-transparent"
                       type="email"
                       name="email" 
                       :value="old('email', $request->email)" 
                       required autofocus autocomplete="username" />
            </div>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <div class="input-group mt-1">
                <input id="password" 
                       class="form-control"
                       type="password"
                       name="password" 
                       required autocomplete="new-password" 
                       oninput="checkPasswordRequirements()"
                       aria-describedby="password-error"
                       aria-invalid="{{ $errors->has('password') ? 'true' : 'false' }}" />
                <button class="btn btn-outline-secondary" type="button" id="password-toggle-button" aria-label="Show password" aria-pressed="false" aria-controls="password">
                    Show
                </button>
            </div>
            <x-input-error :messages="$errors->get('password')" class="mt-2" id="password-error" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <div class="input-group mt-1">
                <input id="password_confirmation" 
                       class="form-control"
                       type="password"
                       name="password_confirmation" required autocomplete="new-password" 
                       oninput="checkPasswordMatch()"
                       aria-describedby="password-confirmation-error"
                       aria-invalid="{{ $errors->has('password_confirmation') ? 'true' : 'false' }}" />
                <button class="btn btn-outline-secondary" type="button" id="password-confirmation-toggle-button" aria-label="Show password confirmation" aria-pressed="false" aria-controls="password_confirmation">
                    Show
                </button>
            </div>
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" id="password-confirmation-error" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Reset Password') }}
            </x-primary-button>
        </div>
    </form>

    {{-- JavaScript for Password Validation --}}
    <script>
        function checkPasswordRequirements() {
            const password = document.getElementById('password').value;
            const confirmation = document.getElementById('password_confirmation').value;
            if (confirmation) {
                checkPasswordMatch();
            }
        }
        
        function checkPasswordMatch() {
            const password = document.getElementById('password').value;
            const confirmation = document.getElementById('password_confirmation').value;
            // Password match checking can be added here if needed
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
