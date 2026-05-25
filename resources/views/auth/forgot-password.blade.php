<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <div class="w-full h-[58px] rounded-xl border border-slate-300 bg-white px-5 flex items-center justify-between relative shadow-[0_0_0_0_rgba(0,0,0,0)] mt-1">
                <input id="email" 
                       class="w-full outline-none text-[16px] font-medium text-slate-600 bg-transparent"
                       type="email"
                       name="email" 
                       :value="old('email')" 
                       required autofocus />
            </div>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
