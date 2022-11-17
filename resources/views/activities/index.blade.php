<x-app-layout>
    <div class="my-6 px-5 md:px-7">
        <div class="flex flex-wrap gap-2 justify-between items-center">
            <h1 class="text-xl font-semibold text-gray-400 dark:text-white">
                {{-- TODO FAZER UM MODAL DE ESCOLHA DE TURMA --}}
                Diario de Atividades
                <span class="badge text-base">
                    {{ $sala->turma }} - {{ $sala->formatDisciplina($sala->pivot->disciplina_id) }}
                </span>
            </h1>

            <x-layouts.breadcrumb :path="[
                'Atividades da Turma' => route('salas.index'),
            ]"/>
        </div>
    </div>
    <section class="w-full min-h-full px-4 md:px-6">
        <div class="w-full h-full flex flex-wrap justify-center bg-body rounded-sm">
            <div class="card">
                <div class="card-header">
                    {{ 'Lista de Atividades' }}
                    <a href="{{ route('atividades.create') }}" class="button button-success"><x-icon library="fontawesome" name="plus" />Criar Atividade</a>
                </div>

                <div class="card-body p-5">
                    <table id="table_id" class="stripe hover display">
                        <thead>
                            <tr>
                                <td>Data</th>
                                <td>Aula</th>
                                <td>Bim</th>
                                <td>Disciplina</th>
                                <td>Professor</th>
                                <td>Opções</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($atividades as $atividade)
                            <tr>
                                <td class="">{{ date('d/m/Y', strtotime($atividade->data)) }}</td>
                                <td class="">{{ $atividade->titulo }}</td>
                                <td class="">{{ $atividade->bimestre }}</td>
                                <td class="">{{ $atividade->disciplina->descricao }}</td>
                                <td class="">{{ $atividade->user->name }}</td>
                                <td class=""><a href="{{ route('atividades.show', $atividade->id) }}" class="button button-sm button-primary-outline">Visualizar</button></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
