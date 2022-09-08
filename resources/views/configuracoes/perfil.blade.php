<x-app-layout title="Settings">

    <!-- Header page -->
    <div class="my-6 px-5 md:px-7">
        <div class="flex flex-wrap gap-2 justify-between items-center">
            <h1 class="text-xl font-semibold text-gray-400 dark:text-white">
                {{ ucfirst(__('layout.settings-profile')) }}
            </h1>

            <x-layouts.breadcrumb :path="[
                __('layout.settings') => route('settings.profile'),
            ]"/>
        </div>
    </div>

    <section class="px-4 md:px-6">
        <x-sides.configuracoes active="account_data">
            <h2 class="text-xl font-semibold mb-4">
                {{ 'Account data' }}
            </h2>

            {{ 'Lorem ipsum ...' }}
        </x-sides.configuracoes>
    </section>

</x-app-layout>
