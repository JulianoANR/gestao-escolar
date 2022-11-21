<x-app-layout>
    <div class="my-6 px-5 md:px-7">
        <div class="flex flex-wrap gap-2 justify-between items-center">
            <h1 class="text-lg font-semibold text-gray-400 dark:text-white">
                Turma:
                <span class="badge text-base">
                    {{ $sala->turma }} - {{ $sala->formatDisciplina($sala->pivot->disciplina_id) }}
                </span>
            </h1>
            <x-layouts.breadcrumb :path="[
                'Menu de Atividades' => route('atividades.index'),
                'Nova Atividade' => route('atividades.create'),
            ]"/>
        </div>
    </div>
    <section class="w-full min-h-full px-4 md:px-6">
        <div class="w-full h-full flex flex-wrap justify-center bg-body rounded-sm">
            <form action="{{ route("atividades.store") }}" method="post" class="w-full h-full">
            @csrf
                <div class="card">
                    <div class="card-header">
                        {{ "Nova Atividade" }}
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="flex flex-wrap justify-between space-y-2">
                            <div class="w-full flex flex-col md:flex-row md:space-x-2">
                                <div class="w-full flex flex-col">
                                    <x-label for="titulo" value="Insira o Titulo:" />
                                    <x-input name="titulo" placeholder="Título da Atividade" class="input input-sm w-full" />
                                </div>

                                <div class="w-full flex flex-col">
                                    <x-label for="disciplina" value="Disciplina da Atividade:" />
                                    <select name="disciplina" class="input input-sm">
                                        <option value="{{ $sala->pivot->disciplina_id }}">{{ $sala->formatDisciplina($sala->pivot->disciplina_id) }}</option>
                                    </select>
                                </div>
                            </div>

                            <div class="w-full flex flex-col">
                                <x-label for="data" value="Data da Atividade: " class="w-full"/>
                                <x-input type="date" name="data" id="data" class="input-sm w-full" />
                            </div>

                                <div class="w-full flex flex-col md:flex-row md:space-x-2">
                                    <div class="w-full flex flex-col">
                                        <x-label for="peso_atividade" value="Quantidade de Aulas: "/>
                                        <select name="peso_atividade" id="peso_atividade" class="input input-sm" >
                                            <option value="1">Uma Aula</option>
                                            <option value="2">Duas Aula</option>
                                        </select>
                                    </div>
                                    <div class="flex flex-col w-full">
                                        <x-label for="bimestre" value="Bimestre: " />
                                        <select name="bimestre" id="bimestre" class="input-sm input">
                                            @foreach ($bimestres as $bimestre)
                                                <option value="{{ $bimestre['id'] }}">{{ $bimestre['descricao'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="flex flex-col w-full">
                                        <x-label for="programada" value="Atividade Programada: " />
                                        <select name="programada" id="programada" class="input-sm input">
                                            <option value="0">Não</option>
                                            <option value="1">Sim</option>
                                        </select>
                                    </div>
                                </div>

                            <div class="flex flex-col w-full hidden" id="tipo_programada_field">
                                <x-label for="tipo_programada" value="Defina o tipo de Atividade Programada: " />
                                <select name="tipo_programada" id="tipo_programada" class="input-sm input" disabled>
                                    <option value="" selected>Selecione a Atividade Programada...</option>
                                    @foreach ($tipos_programada as $tipo_programada)
                                        <option value="{{ $tipo_programada->id }}">{{ $tipo_programada->descricao }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="flex flex-col w-full">
                                <x-label for="descricao" value="Descrição da Atividade: " />
                                <x-textarea id="descricao" name="descricao" rows="5" cols="30" disabled/>
                            </div>

                            <div class="flex flex-row w-full justify-end">
                                <button type="button" class="button button-sm button-info" id="btnSalvar" type="button" data-modal-toggle="defaultModal">Selecionar Curriculos</button>
                            </div>

                            <div class="flex flex-col w-full">
                                <x-label for="observacao" value="Observacão: " />
                                <x-textarea id="observacao" name="observacao" rows="2" cols="30"/>
                            </div>

                            <div class="w-full mt-4 flex justify-end">
                                <x-submit-btn class="button button-primary w-24">
                                    {{ __('layout.btn-save') }}
                                </x-submit-btn>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

    // Curriculos Modal

    <div id="defaultModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 p-4 w-full md:inset-0 h-modal md:h-full">
        <div class="relative w-full max-w-8xl h-full md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-aside rounded-lg shadow">
                <!-- Modal header -->
                <div class="flex justify-between items-start p-4 rounded-t border-b">
                    <h3 class="txt-title">
                        Selecionar Curriculos
                    </h3>
                </div>
                <!-- Modal body -->
                <div class="p-6 space-y-6">
                    <x-textarea id="curriculos" name="curriculos" rows="3" cols="20" disabled/>
                </div>
                <div class="p-6 space-y-6">
                    <table width="100%" id="curriculos_table" class="stripe hover display">
                        <thead>
                            <tr>
                                <td>Codigo</th>
                                <td>Descricao</th>
                                <td>Selecione</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>ASDÇLASDÓASDÓI ASÓDIASÓID HASOÍD HASOÍD HAÓSID HAÓISDH AOSI DHAŚOID HAÓSIHD</td>
                                <td><x-checkbox name="curriculos[]" class="curriculo" data-curriculo-id="1"/></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- Modal footer -->
                <div class="flex items-center justify-end p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                    <button data-modal-toggle="defaultModal" type="button" class="button button-success">Confimar Curriculos</button>
                    <button data-modal-toggle="defaultModal" type="button" class="button button-danger">Cancelar</button>
                </div>
            </div>
        </div>
    </div>




    @push('scripts')
        <script>

            // Libera o campo para selecionar o Tipo de Atividade Programada

            function unlockAtividadeProgramadaField(){
                if(document.getElementById('programada').value == '1'){
                    document.getElementById('tipo_programada_field').classList.remove('hidden');
                    document.getElementById('tipo_programada').disabled = false;
                }else{
                    document.getElementById('tipo_programada_field').classList.add('hidden');
                    document.getElementById('tipo_programada').disabled = true;
                }
            }

            // Limpa o campo de Descrição

            function clearDescriptionField(){
                document.getElementById('descricao').value = '';
            }

            // Preenche o campo de Descrição com os valores do Tipo Programada

            function setTipoProgramadaValueInDescription(){
                let tipo_programada = document.getElementById('tipo_programada');
                let descricao = document.getElementById('descricao');
                let tipo_programada_value = tipo_programada.options[tipo_programada.selectedIndex].text;
                if($('#tipo_programada').val() != ''){
                    descricao.value = "(ATIVIDADE PROGRAMADA): " + tipo_programada_value;
                }
                else{
                    descricao.value = '';
                }
            }

            $(document).ready(function(){


                $('#programada').change(function(){
                    unlockAtividadeProgramadaField();
                    clearDescriptionField();
                        $('#tipo_programada').change(function(){
                            setTipoProgramadaValueInDescription();
                        });
                });


                // DataTables

                // $('#curriculos_table').DataTable({
                //     "language": {
                //         "url": "//cdn.datatables.net/plug-ins/1.10.21/i18n/Portuguese-Brasil.json",
                //     }
                // });

                $('.curriculo').change(function(){
                    let curriculos = [];
                    $('.curriculo:checked').each(function(){
                        curriculos.push($(this).data('curriculo-id'));
                    });
                    $('#curriculos').val(curriculos);
                });

                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    $.get({
                            url: "{{ route('api.atividades.get-curriculos') }}",
                            success: function (data) {
                                console.log(data.curriculos);
                                let curriculos = data.curriculos;
                                    let curriculos_table = $('#curriculos_table').DataTable({
                                        "language": {
                                            "url": "//cdn.datatables.net/plug-ins/1.10.21/i18n/Portuguese-Brasil.json",
                                        },

                                        pageLength: 5,
                                    });
                                    curriculos_table.clear();
                                    curriculos.forEach(curriculo => {
                                        curriculos_table.row.add([
                                            curriculo.id,
                                            curriculo.descricao,
                                            `<input type="checkbox" class="curriculo" data-curriculo-id="${curriculo.id}">`
                                        ]).draw();
                                    });
                            }
                    });


            });

            // Toda a configuração do Script do Modal está no arquivo modal.js em public
        </script>


        <script src="/js/atividade/create.js"></script>
    @endpush
</x-app-layout>
