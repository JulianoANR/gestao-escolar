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
            <hr class="dark:border-gray-700 py-2">
            <form
            action="{{ route('user.update') }}"
            class="flex flex-wrap space-x-2"
            method="post"
            enctype="multipart/form-data"
            >
            @csrf
                <div class="mb-72 w-full flex justify-center">
                    <div class="mx-auto text-center">
                        <div class="relative w-64">
                            <img class="w-64 h-64 rounded-full absolute border-2 border-primary" src="{{ Auth::user()->profile_path_image ? asset('storage/'.Auth::user()->profile_path_image) : asset('assets/images/profile/default.png') }}" alt="" />
                            <label for="upload" class="">
                                <div class="w-64 h-64 group hover:bg-gray-200 opacity-60 rounded-full absolute flex justify-center items-center cursor-pointer transition duration-500">
                                    <i class="hidden group-hover:block text-5xl text-primary fa-solid fa-arrow-up-from-bracket"></i>
                                </div>
                            </label>
                        <input type="file" name="profile_path_image" id="upload" class="hidden">
                        </div>
                    </div>
                </div>
                <x-label for="name" value="{{ __('form.name-label') }}" />
                <x-input
                    name="name"
                    class="input-sm rounded-md p-3 w-full"
                    type="text"
                    placeholder="{{ __('form.name') }}"
                    :value="Auth::user()->name"
                />
                <x-label for="email" value="{{ __('form.email-label') }}" />
                <x-input
                    name="email"
                    class="input-sm rounded-md p-3 w-full"
                    type="email"
                    placeholder="{{ __('form.email') }}"
                    :value="Auth::user()->email"
                />
                <div class="flex flex-col md:flex-row md:space-x-3 w-full">
                    <div class="flex flex-col w-full">
                        <x-label for="cpf" value="{{ __('form.cpf-label') }}" />
                        <x-input
                        name="cpf"
                        class="input-sm rounded-md p-3"
                        type="text"
                        placeholder="{{ __('form.cpf') }}"
                        :value="Auth::user()->cpf"
                        />
                    </div>
                    <div class="flex flex-col w-full">
                        <x-label for="rg" value="{{ __('form.rg-label') }}" />
                        <x-input
                        name="rg"
                        class="input-sm rounded-md p-3"
                        type="text"
                        placeholder="{{ __('form.rg') }}"
                        :value="Auth::user()->rg"
                        />
                    </div>
                    <div class="flex flex-col w-full">
                        <x-label for="matricula" value="{{ __('form.matricula-label') }}" />
                        <x-input
                        name="matricula"
                        class="input-sm rounded-md p-3"
                        type="text"
                        placeholder="{{ __('form.matricula') }}"
                        :value="Auth::user()->matricula"
                        />
                    </div>
                </div>
                <div class="w-full mt-4 flex justify-end">
                    <x-submit-btn class="button button-primary w-24">
                        {{ __('layout.btn-save') }}
                    </x-submit-btn>
                </div>
            </form>
        </x-sides.configuracoes>
    </section>

</x-app-layout>
