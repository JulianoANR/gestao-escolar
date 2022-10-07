<x-app-layout title="Minhas Turmas">
    <div class="my-6 px-5 md:px-7">
        <div class="flex flex-wrap gap-2 justify-between items-center">
            <h1 class="text-xl font-semibold text-gray-400 dark:text-white">
                Minhas turmas
            </h1>

            <x-layouts.breadcrumb :path="[
                'Minhas Turmas' => route('salas.index'),
            ]"/>
        </div>
    </div>
    <section class="w-full min-h-full px-4 md:px-6">
    <div class="w-full h-full flex flex-wrap justify-center bg-white rounded-sm shadow-lg p-4">
    @for($i = 0; $i < 20; $i++)
        <x-card class="w-[30%] h-1/3 m-3">
            <x-slot name="header">
                <h1 class="w-full text-center">5 B</h1>
            </x-slot>

            <x-slot name="body">
                <p class="w-full text-center">EDUCAÇÃO INFANTIL</p>
                <p class="w-full text-center">ESCOLA X X X</p>
                <p class="w-full text-center">ESCOLA X X X</p>
            </x-slot>

            <x-slot name="footer">
                <div class="flex flex-wrap justify-center gap-2">
                    Acessar Turma
                </div>

            </x-slot>

        </x-card>
    @endfor
    </div>
    </section>
</x-app-layout>
