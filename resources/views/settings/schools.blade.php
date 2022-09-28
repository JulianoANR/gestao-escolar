<x-app-layout title="Schools">
    <!-- Header Page -->
    <div class="my-6 px-5 md:px-7">
        <div class="flex flex-wrap gap-2 justify-between items-center">
            <h1 class="text-xl font-semibold text-gray-400 dark:text-white">
                {{ ucfirst(__('layout.settings')) }}
            </h1>

            <x-layouts.breadcrumb :path="[
                __('layout.account') => route('user.edit'),
                __('layout.schools') => route('user.schools'),
            ]"/>
        </div>
    </div>

    <section class="px-4 md:px-6">
        <x-sides.settings active="schools">
            <h2 class="text-xl font-semibold mb-4">
                {{ ('layout.my-schools') }}
            </h2>

            {{ 'Lorem ipsum ...' }}
        </x-sides.settings>
    </section>

</x-app-layout>
