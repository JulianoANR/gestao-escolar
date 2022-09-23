<div class="flex flex-col h-screen justify-center items-center p-4">
    <div class="card w-full md:max-w-[60%] h-auto rounded-md">
        <div class="flex flex-row justify-between w-auto md:p-4 rounded-lg">
            <div class="hidden md:flex flex-col justify-evenly items-center txt-base card-body w-1/2">
                <img src="{{ asset('assets/images/informatica_educativa/logo_1.png') }}"
                alt="Gestão Escolar"
                class="w-full rounded-lg shadow-lg shadow-gray-600"
                >
                <div class="text-center">
                    <h3 class="font-bold text-lg mt-4">Prefeitura Municipal de Caraguatatuba</h3>
                    <h4 class="font-bold">Secretaria de Educação</h4>
                </div>
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
