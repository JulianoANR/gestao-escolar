<x-dashboard-layout title="Settings">

    {{-- <section class="my-6 px-4 md:px-6">
        <div class="flex flex-wrap gap-2 justify-between items-center">
            <h1 class="text-xl font-semibold text-gray-400 dark:text-white">
                Settings
            </h1>

            <x-breadcrumb :path="['Dashboard' => route('dashboard')]" />
        </div>
    </section> --}}

    <!-- Header page -->
    <div class="my-6 px-4 md:px-6">
        <div class="flex flex-wrap gap-2 justify-between items-center">
            <div class="w-full md:w-max">
                <h1 class="w-full truncate text-2xl mb-1 font-bold text-gray-400 md:text-3xl dark:text-white">
                    Settings account
                </h1>

                <x-breadcrumb :path="['settings' => route('settings.account_data')]" />
            </div>
        </div>
    </div>

    <section class="px-4 md:px-6">
        <x-settings active="account_data">
            <h2 class="text-xl font-semibold mb-4">
                {{ 'Account data' }}
            </h2>

            {{ 'Lorem ipsum ...' }}
        </x-settings>
    </section>

</x-dashboard-layout>
