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
            @foreach ($user->salas()->get() as $sala)
                <a href="{{ route('salas.diario', $sala) }}" class="m-2">
                    <x-classroom-card name="{{ $sala->turma }}" school="{{ $sala->escola->nome }}" />
                </a>
            @endforeach
        </div>
    </section>
</x-app-layout>
