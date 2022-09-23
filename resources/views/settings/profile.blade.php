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
            <form action="" class="flex flex-wrap space-x-2">
                <div class="mb-72 w-full flex justify-center">
                    <div class="mx-auto text-center">
                        <div class="relative w-64">
                            <img class="w-64 h-64 rounded-full absolute border-2 border-primary" src="{{ asset('assets/images/profile/default.png') }}" alt="" />
                            <label for="upload" class="">
                                <div class="w-64 h-64 group hover:bg-gray-200 opacity-60 rounded-full absolute flex justify-center items-center cursor-pointer transition duration-500">
                                    <i class="hidden group-hover:block text-5xl text-primary fa-solid fa-arrow-up-from-bracket"></i>
                                </div>
                            </label>
                        <input type="file" name="user-image" id="upload" class="hidden">
                        </div>
                    </div>
                </div>
                <x-label for="name" value="Nome do Usuario" />
                <x-input
                    name="name"
                    class="input-sm rounded-md p-3 w-full"
                    type="text"
                    placeholder="{{ __('auth.name') }}"
                    :value="Auth::user()->name"
                />
                <x-label for="email" value="Email" />
                <x-input
                    name="email"
                    class="input-sm rounded-md p-3 w-full"
                    type="email"
                    placeholder="{{ __('auth.email') }}"
                    :value="Auth::user()->email"
                />
                <div class="flex flex-col md:flex-row md:space-x-3 w-full">
                    <div class="flex flex-col w-full">
                        <x-label for="CPF" value="CPF do Usuario" />
                        <x-input
                        name="CPF"
                        class="input-sm rounded-md p-3"
                        type="text"
                        placeholder="{{ __('auth.CPF') }}"
                        :value="Auth::user()->cpf"
                        />
                    </div>
                    <div class="flex flex-col w-full">
                        <x-label for="RG" value="RG do Usuario" />
                        <x-input
                        name="RG"
                        class="input-sm rounded-md p-3"
                        type="text"
                        placeholder="{{ __('auth.RG') }}"
                        :value="Auth::user()->rg"
                        />
                    </div>
                    <div class="flex flex-col w-full">
                        <x-label for="RG" value="Matricula do Usuario" />
                        <x-input
                        name="RG"
                        class="input-sm rounded-md p-3"
                        type="text"
                        placeholder="{{ __('auth.RG') }}"
                        :value="Auth::user()->matricula"
                        />
                    </div>
                </div>
                <div class="w-full mt-4 flex justify-end">
                    <x-submit-btn class="button button-primary w-24">
                        {{ __('Save') }}
                    </x-submit-btn>
                </div>
            </form>
        </x-sides.configuracoes>
    </section>

</x-app-layout>
