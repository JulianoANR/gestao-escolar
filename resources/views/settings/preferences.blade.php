<x-app-layout title="Preferencias">

    <!-- Header page -->
    <div class="my-6 px-5 md:px-7">
        <div class="flex flex-wrap gap-2 justify-between items-center">
            <h1 class="text-xl font-semibold text-gray-400 dark:text-white">
                {{ ucfirst(__('layout.preferences')) }}
            </h1>

            <x-layouts.breadcrumb :path="[
                __('layout.account') => route('user.edit'),
                __('layout.preferences') => route('user.preferences')
            ]"/>
        </div>
    </div>

    <section class="px-4 md:px-6">
        <x-sides.settings active="preferences">
            <h2 class="text-xl font-semibold mb-4">
                {{ __('layout.preferences') }}
            </h2>
        </x-sides.settings>
    </section>

    

</x-app-layout>
