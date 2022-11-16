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

                            <hr>

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
            });
        </script>
    @endpush
</x-app-layout>
