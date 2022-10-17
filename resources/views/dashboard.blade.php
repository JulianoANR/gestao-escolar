<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="w-full min-h-full flex justify-center">
        <div class="max-w-[100%] h-32 bg-body rounded-md p-2 flex overflow-y-hidden scroll-smooth items-center">
            <div class="flex flex-row space-x-2 justify-start">
                @foreach ($user->salas()->get() as $sala)
                    <a href="{{ route('salas.diario', $sala) }}">
                        <x-classroom-card name="{{ $sala->turma }}" school="{{ $sala->escola->nome }}" />
                    </a>
                @endforeach
            </div>
        </div>
    </div>


</x-app-layout>
