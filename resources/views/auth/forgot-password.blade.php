<x-guest-layout>
    <x-auth-screen title="Esqueci minha senha">
        <x-label value="Insira o e-mail da sua conta: "/>
        <x-input
            name="email"
            class="input-sm rounded-md p-3 w-full"
            type="email"
            placeholder="Endereço de e-mail"
        />
        <div class="flex justify-center">
            <button class="button button-primary w-full rounded-md">
                Enviar
            </button>
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
                        <h1 class="font-medium text-2xl">Recuperação de Senha!</h1>
                        <form
                        action="{{ route('password.email') }}"
                        method="post"
                        class="w-full space-y-5"
                        >
                            @csrf
                            <x-label value="Insira o e-mail da sua conta: "/>
                            <x-input
                                name="email"
                                class="input-sm rounded-md p-3 w-full"
                                type="email"
                                placeholder="Endereço de e-mail"
                            />
                            <div class="flex justify-center">
                                <button class="button button-primary w-full rounded-md">
                                    Enviar
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
