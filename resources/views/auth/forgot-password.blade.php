<x-guest-layout>
    <x-auth-screen action="password.email" title="{{ __('auth.forgot-password-screen') }}">
        <x-label value="{{ __('auth.insert-email') }}"/>
        <div>
        <x-input
            name="email"
            class="input-sm rounded-md p-3 w-full"
            type="email"
            placeholder="{{ __('auth.mail') }}"
        />
        @if(session('status'))
            <span class="inline-block uppercase text-success text-[12px] pl-2 mt-1" role="alert">
                <strong> {{ session('status') }}</strong>
            </span>
        @endif
        </div>
        <hr class="dark:border-gray-400">

        <div class="flex justify-center">
            <x-submit-btn class="button button-primary w-full rounded-md">
                {{ __('auth.send') }}
            </x-submit-btn>
        </div>
    </x-auth-screen>
</x-guest-layout>
