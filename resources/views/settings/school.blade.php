<x-app-layout title="Settings">

    <!-- Header page -->
    <div class="my-6 px-4 md:px-6">
        <div class="flex flex-wrap gap-2 justify-between items-center">
            <div class="w-full md:w-max">
                <h1 class="w-full truncate text-2xl mb-1 font-bold text-gray-400 md:text-3xl dark:text-white">
                    {{ __('layout.settings') }}
                </h1>

                <x-layouts.breadcrumb :path="[
                    ('layout.settings') => route('settings.profile'),
                    ('layout.school') => route('settings.school')
                ]"/>
            </div>
        </div>
    </div>

    <section class="px-4 md:px-6">
        <x-sides.settings active="company_data">
            <h2 class="text-xl font-semibold mb-4">
                {{ 'Company data' }}
            </h2>

            {{ 'Lorem ipsum ...' }}
        </x-sides.settings>
    </section>

</x-app-layout>
