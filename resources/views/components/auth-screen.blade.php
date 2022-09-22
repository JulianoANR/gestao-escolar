<div class="flex flex-col h-screen w-screen justify-center items-center">
    <div class="card md:max-w-[50%] h-auto mx-4 rounded-md">
        <div class="flex flex-row justify-between w-auto md:p-8 rounded-lg">
            <div class="hidden md:flex flex-col items-center txt-base card-body w-1/2">
                <img src="{{ asset('assets/images/informatica_educativa/logo_1.png') }}"
                alt="Gestão Escolar"
                class="w-96 rounded-lg shadow-lg shadow-gray-600"
                >
                <h3 class="font-bold text-lg mt-4 text-center">Prefeitura Municipal de Caraguatatuba</h3>
                <h4 class="font-bold text-center">Secretaria de Educação</h4>
            </div>
            <div class="flex flex-col justify-evenly items-center card-body w-1/2 p-8">
                <h1 class="font-medium txt-base text-2xl">{{ $title }}</h1>
                <form
                action="{{ route($action) }}"
                method="post"
                class="w-full txt-base space-y-5"
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
