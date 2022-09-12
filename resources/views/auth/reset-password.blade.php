<x-guest-layout>
    <x-auth-screen action="password.update" title="{{ __('auth.reset-password-screen') }}">
        <input type="hidden" name="email" value="{{ old('email', $request->email) }}">
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <x-input
            name="password"
            class="input-sm rounded-md p-3 w-full"
            type="password"
            placeholder="{{ __('auth.password') }}"
        />

        <x-input
            name="password_confirmation"
            class="input-sm rounded-md p-3 w-full"
            type="password"
            placeholder="{{ __('auth.password-confirm') }}"
        />
        <hr class="dark:border-gray-400">
        <div class="flex justify-center">
            <button class="button button-primary w-full rounded-md">
                {{ __('auth.password-confirm') }}
            </button>
        </div>
    </x-auth-screen>
</x-guest-layout>
