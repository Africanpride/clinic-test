<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="firstName" :value="__('First Name')" />

                <x-text-input id="firstName" class="block mt-1 w-full" type="text" name="firstName" :value="old('firstName')" required autofocus />
            </div>
            <div>
                <x-input-label for="lastName" :value="__('Last Name')" />

                <x-text-input id="lastName" class="block mt-1 w-full" type="text" name="lastName" :value="old('lastName')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />

                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex flex-col items-center justify-end mt-4 gap-2">

                <x-primary-button class=" w-full  ">
                    {{ __('Register') }}
                </x-primary-button>

                @if (Route::has('login'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900"
                        href="{{ route('login') }}">
                        {{ __('Login Rather?') }}
                    </a>
                @endif
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
