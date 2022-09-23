<x-guest-layout>
    <x-auth-screen action="login" title="{{ __('auth.login-screen') }}">

        <x-input
            name="email"
            class="input-sm rounded-md p-3 w-full"
            type="email"
            placeholder=" {{ __('auth.mail') }}"
        />

        <x-input
            name="password"
            class="input-sm rounded-md p-3 w-full"
            type="password"
            placeholder="{{ __('auth.password') }}"
        />
        <div class="flex flex-col space-y-2 md:space-y-0 md:flex-row justify-between items-center px-2">
            <a
            href="{{ route('password.email') }}"
            class="text-base font-medium hover:text-blue-600 duration-300"
            >
                {{ __('auth.forgot-password') }}
            </a>
            <x-login.remember-me />
        </div>
        <hr class="dark:border-gray-400">
        <div class="flex justify-center">
            <x-submit-btn class="button button-lg button-primary w-full rounded-md" type="submit">
                {{ __('auth.login') }}
            </x-submit-btn>
        </div>
    </x-auth-screen>

    {{-- <div class="bg-gradient-to-b from-blue-700 to-blue-900">
        <div class="flex flex-col h-screen w-screen justify-center items-center">
            <div class="card md:w-2/3 h-auto mx-4 rounded-lg">
                <div class="flex flex-row justify-between w-full rounded-lg">
                    <div class="hidden md:flex flex-col justify-between items-center card-body w-1/2">
                        <img src="{{ asset('assets/images/informatica_educativa/logo_1.png') }}"
                        alt="Gestão Escolar"
                        class="w-72 rounded-lg shadow-lg shadow-gray-600"
                        >
                        <h3 class="font-bold text-lg text-center">Prefeitura Municipal de Caraguatatuba</h3>
                        <h4 class="font-bold text-center">Secretaria de Educação</h4>
                    </div>
                    <div class="flex flex-col justify-evenly items-center card-body w-1/2">
                        <h1 class="font-medium text-2xl">Entre na sua Conta!</h1>
                        <form
                        action="{{ route('login') }}"
                        method="post"
                        class="w-full space-y-5"
                        >
                            @csrf
                            <x-input
                                name="email"
                                class="input-sm rounded-md p-3 w-full"
                                type="email"
                                placeholder="Endereço de e-mail"
                            />
                            <x-input
                                name="password"
                                class="input-sm rounded-md p-3 w-full"
                                type="password"
                                placeholder="Senha"
                            />
                            <div class="flex flex-col space-y-2 md:space-y-0 md:flex-row justify-between items-center px-2">
                                <a
                                href="{{ route('password.email') }}"
                                class="text-base font-medium text-gray-600 hover:text-blue-600 duration-300"
                                >
                                    Esqueceu sua senha?
                                </a>
                                <x-login.remember-me />
                            </div>
                            <div class="flex justify-center">
                                <button class="button button-primary w-full rounded-md">
                                    Entrar
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="flex w-[12rem] my-4 justify-center">
                <img src="{{ asset('assets/images/informatica_educativa/logo_informatica_light.png') }}" alt="">
            </div>
        </div>
    </div> --}}

</x-guest-layout>
