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
                                <td>Tipo de Aula</td>
                                <td>Bim</th>
                                <td>Disciplina</th>
                                <td>Professor</th>
                                <td>Conteúdo</th>
                                <td>Painel</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($atividades as $atividade)
                            <tr>
                                <td>{{ date('d/m/Y', strtotime($atividade->data)) }}</td>
                                <td>{{ $atividade->titulo }}</td>
                                <td><span class="badge text-sm">{{ $atividade->formatQuantidadeAulas() }}</span></td>
                                <td>{{ $atividade->formatBimestre() }}</td>
                                <td>{{ $atividade->disciplina->descricao }}</td>
                                <td>{{ $atividade->user->getFirstName() }}</td>
                                <td><button type="button" class="button button-sm button-primary-outline px-1 py-0.5 text-sm"  data-modal-toggle="defaultModal">Visualizar</button></td>
                                <td><a href="{{ route('atividades.show', $atividade->id) }}" class="button button-sm button-primary-outline px-1 py-0.5 text-sm">Visualizar</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>


    // Modal

    <div id="defaultModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 p-4 w-full md:inset-0 h-modal md:h-full">
        <div class="relative w-full max-w-2xl h-full md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Terms of Service
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="defaultModal">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-6 space-y-6">
                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                        With less than a month to go before the European Union enacts new consumer privacy laws for its citizens, companies around the world are updating their terms of service agreements to comply.
                    </p>
                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                        The European Union’s General Data Protection Regulation (G.D.P.R.) goes into effect on May 25 and is meant to ensure a common set of data rights in the European Union. It requires organizations to notify users as soon as possible of high-risk data breaches that could personally affect them.
                    </p>
                </div>
                <!-- Modal footer -->
                <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                    <button data-modal-toggle="defaultModal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I accept</button>
                    <button data-modal-toggle="defaultModal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
