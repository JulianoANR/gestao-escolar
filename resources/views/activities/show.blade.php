<x-app-layout>
    <div class="my-6 px-5 md:px-7">
        <div class="flex flex-wrap gap-2 justify-between items-center">
            <h1 class="text-xl font-semibold text-gray-400 dark:text-white">
                {{-- TODO FAZER UM MODAL DE ESCOLHA DE TURMA --}}
                Atividade: <span class="titulo-atividade">{{ $atividade->titulo }}</span>
                <span class="badge text-base">
                    {{ $sala->turma }} - {{ $sala->formatDisciplina($sala->pivot->disciplina_id) }}
                </span>
            </h1>

            <x-layouts.breadcrumb :path="[
                'Atividades da Turma' => route('atividades.index'),
                $atividade->titulo => route('atividades.show', $sala->id),
            ]"/>
        </div>
    </div>

    <div class="flex flex-row w-full justify-center items-center">
        <x-card class="m-6">
            <x-slot name="header" class="flex justify-between">
                <h1 class="text-center">
                    <span class="font-bold">Informações da Atividade: </span><span class="titulo-atividade">{{ $atividade->titulo }}</span>
                </h1>

                <div>
                    <button class="button button-warning duration-300" id="edit-button">Editar Atividade</button>
                    <button class="button button-danger hidden duration-300" id="cancel-button">Cancelar Alterações</button>
                    <button class="button button-success hidden duration-300" id="save-button">Salvar Alterações</button>
                </div>

            </x-slot>

            <x-slot name="body">
                <div class="flex flex-row w-full space-x-2">
                    <div class="flex flex-col w-full">
                        <x-label for="titulo" value="Titulo da Atividade: " class="mt-0"/>
                        <x-input id="titulo" class="input-sm" type="text" name="titulo" :value="$atividade->titulo" disabled />
                    </div>

                    <div class="flex flex-col w-full ">
                        <x-label for="disciplina" value="Disciplina da Atividade: " class="mt-0"/>
                        <x-input id="disciplina" class="input-sm" type="text" name="disciplina" :value="$atividade->disciplina->descricao" disabled />
                    </div>

                    <div class="flex flex-col w-full">
                        <x-label for="data" value="Data da Atividade: " class="mt-0"/>
                        <x-input id="data" class="input-sm" type="date" name="data" :value="$atividade->data" disabled />
                    </div>

                </div>

                <div class="flex flex-row w-full mt-4 space-x-2">
                    <div class="flex flex-col w-full">
                        <x-label for="aula" value="Quantidade de Aulas: " class="mt-0"/>
                        <select name="aula" id="aula" class="input input-sm" disabled >
                            <option value="1">Uma Aula</option>
                            <option value="2">Duas Aula</option>
                        </select>
                    </div>

                    <div class="flex flex-col w-full">
                        <x-label for="programada" value="Atividade Programada: " class="mt-0"/>
                        <select name="programada" id="programada" class="input input-sm" disabled>
                            @if ($atividade->programada == 1)
                            <option value="1">Sim</option>
                            <option value="0">Não</option>
                            @else
                            <option value="0">Não</option>
                            <option value="1">Sim</option>
                            @endif
                        </select>
                    </div>
                </div>

                <div class="flex flex-col mt-4 @if($atividade->programada != 1) hidden @endif">
                    <x-label for="tipo_programada" value="Tipo Programada: " class="mt-0"/>
                    <select name="tipo_programada" id="tipo_programada" class="input input-sm" disabled>
                        <option value="{{ $atividade->tipo_programada_id ?? '' }}" id="tipo_programada_selected">{{ $atividade->tipo_programada->descricao ?? '' }}</option>
                        @foreach ($tipos_programada as $tipo_programada)
                            <option value="{{ $tipo_programada->id  ?? ''}} @if($tipo_programada->id == $atividade->tipo_programada_id) selected @endif">{{ $tipo_programada->descricao  ?? ''}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="flex flex-col mt-4">
                    <x-label for="descricao" value="Habilidades da Atividade: " class="mt-0"/>
                    @if ($atividade->programada == 1)
                        <x-textarea id="descricao" name="descricao" value='(ATIVIDADE PROGRAMADA): {{ $atividade->tipo_programada->descricao }}' disabled />
                    @else
                        <x-textarea id="descricao" name="descricao" disabled />
                    @endif
                </div>

                <div class="flex flex-col w-full">
                    <x-label for="observacao" value="Observacão: " />
                    <x-textarea id="observacao" name="observacao" rows="2" cols="30"/>
                </div>

            </x-slot>
            <x-slot name="footer">
                <div class="w-full flex flex-row justify-between">
                    <span class="text-success">Alunos presentes: 27%</span>
                    <span class="">Participação Geral: 87%</span>
                    <span class="text-danger">Alunos não-presentes: 27%</span>
                </div>
            </x-slot>
        </x-card>
    </div>

    <section>

    </section>

    @push('scripts')



        <script>
            // Reforça a desabilitação dos campos de edição.

            function disableAllInputs(){
                let inputs = document.querySelectorAll('input, select, textarea');
                inputs.forEach(input => {
                    input.disabled = true;
                });
            }

            // Função que recebe o nome da atividade e faz a troca do titulo da atividade presente na página

            function changeTitle(atividade){
                $('.titulo-atividade').text(atividade);
            }

            // Função que aplica o na descrição da atividade o tipo de atividade programada.

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

            // Codigo Main

            $('document').ready(function(){
                disableAllInputs();
                console.log($('#observacao').val()); 
                // Cria uma variavel atividade que recebe os dados atuais da atividade vindo do AtividadeController.
                var atividade = @json($atividade);

                $('#edit-button').click(function(){
                    console.log(atividade);
                    $('#edit-button').addClass('hidden');
                    $('#cancel-button').removeClass('hidden');
                    $('#save-button').removeClass('hidden');
                    $('#tipo_programada_selected').addClass('hidden');

                    $('#titulo').removeAttr('disabled');
                    $('#data').removeAttr('disabled');
                    $('#aula').removeAttr('disabled');
                    $('#bimestre').removeAttr('disabled');
                    $('#tipo_programada').removeAttr('disabled');
                    $('#observacao').removeAttr('disabled');
                });

                $('#cancel-button').click(function(){

                    // Esconde os botões da visualização do usuario.

                    $('#edit-button').removeClass('hidden');
                    $('#cancel-button').addClass('hidden');
                    $('#save-button').addClass('hidden');
                    $('#tipo_programada_selected').removeClass('hidden');

                    // Desabilita os campos de edição.

                    $('#titulo').attr('disabled', true);
                    $('#disciplina').attr('disabled', true);
                    $('#data').attr('disabled', true);
                    $('#aula').attr('disabled', true);
                    $('#programada').attr('disabled', true);
                    $('#tipo_programada').attr('disabled', true);
                    $('#habilidades').attr('disabled', true);
                    $('#observacao').attr('disabled', true);

                    // Adiciona os valores antigos nos campos.

                    $('#titulo').val(atividade.titulo);
                    $('#disciplina').val(atividade.disciplina.descricao);
                    $('#data').val(atividade.data);
                    $('#aula').val(atividade.peso_atividade);
                    $('#programada').val(atividade.programada);
                    $('#tipo_programada').val(atividade.tipo_programada_id != null ? atividade.tipo_programada_id : '');
                    $('#descricao').val(setTipoProgramadaValueInDescription());
                    $('#observacao').val(atividade.observacao);
                });

                $('#tipo_programada').change(function(){
                    setTipoProgramadaValueInDescription();
                });

                $('#save-button').click(function(){
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.post({
                        url: "{{ route('api.atividades.update') }}",
                        data: {
                            id: {{ $atividade->id }},
                            titulo: $('#titulo').val(),
                            data: $('#data').val(),
                            aula: $('#aula').val(),
                            tipo_programada_id: $('#tipo_programada').val(),
                            observacao: $('#observacao').val(),
                        },

                        success: function(response){
                            // Salva na variavel atividade criada no inicio do codigo os dados atualizados da atividade.
                            atividade = response.atividade;
                            // Faz a troca do titulo da atividade na página.
                            changeTitle(response.atividade.titulo);
                        },

                    })

                    // Esconde os botões da visualização do usuario.

                    $('#edit-button').removeClass('hidden');
                    $('#cancel-button').addClass('hidden');
                    $('#save-button').addClass('hidden');
                    $('#tipo_programada_selected').removeClass('hidden');

                    // Desabilita os campos de edição.

                    $('#titulo').attr('disabled', true);
                    $('#disciplina').attr('disabled', true);
                    $('#data').attr('disabled', true);
                    $('#aula').attr('disabled', true);
                    $('#programada').attr('disabled', true);
                    $('#tipo_programada').attr('disabled', true);
                    $('#habilidades').attr('disabled', true);
                    $('#observacao').attr('disabled', true);
                })
            });
        </script>
    @endpush

</x-app-layout>
