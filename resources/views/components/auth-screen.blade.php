<div class="bg-gradient-to-b from-blue-700 to-blue-900">
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
                    <h1 class="font-medium text-2xl">{{ $title }}</h1>
                    <form
                    action="{{ route('password.email') }}"
                    method="post"
                    class="w-full space-y-5"
                    >
                        @csrf
                        {{ $slot }}
                    </form>
                </div>
            </div>
        </div>
        <div class="flex w-[12rem] my-4 justify-center">
            <img src="{{ asset('assets/images/informatica_educativa/logo_informatica_light.png') }}" alt="">
        </div>
    </div>
</div>
