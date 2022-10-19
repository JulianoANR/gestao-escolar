<x-app-layout>
    <div class="my-6 px-5 md:px-7">
        <div class="flex flex-wrap gap-2 justify-between items-center">
            <h1 class="text-xl font-semibold text-gray-400 dark:text-white">
                {{-- TODO FAZER UM MODAL DE ESCOLHA DE TURMA --}}
                Diario de Atividades
                <span class="badge text-base">
                    6º ano B
                </span>
            </h1>

            <x-layouts.breadcrumb :path="[
                'Diario' => route('salas.index'),
            ]"/>
        </div>
    </div>
    <section class="w-full min-h-full px-4 md:px-6">
        <div class="w-full h-full flex flex-wrap justify-center bg-body rounded-sm p-4">


            <div class="card">
                <div class="card-header">
                    {{ 'Lista de Atividades' }}
                    <a href="{{ route('atividades.create') }}" class="button button-success"><x-icon library="fontawesome" name="plus" />Criar Atividade</a>
                </div>

                <div class="card-body p-5">
                    <table id="table_id" class="stripe hover display">
                        <thead>
                            <tr>
                                <th>Data</th>
                                <th>Aula</th>
                                <th>Bim</th>
                                <th>Disciplina</th>
                                <th>Habilidade</th>
                                <th>Professor</th>
                                <th>Opções</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Jonny</td>
                                <td>27</td>
                                <td>Stockholm</td>
                                <td>Jonny</td>
                                <td>27</td>
                                <td>Stockholm</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
