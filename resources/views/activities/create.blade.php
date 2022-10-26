<x-app-layout>
    <div class="my-6 px-5 md:px-7">
        <div class="flex flex-wrap gap-2 justify-between items-center">
            <h1 class="text-xl font-semibold text-gray-400 dark:text-white">
                {{-- TODO FAZER UM MODAL DE ESCOLHA DE TURMA --}}
                Criando Atividade para a turma:
                <span class="badge text-base">
                    {{ $sala->turma }}
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
            <form action="" method="post" class="w-full h-full">
                <div class="card">
                    <div class="card-header">
                        {{ "Nova Atividade" }}
                    </div>

                    <div class="card-body">
                        <div class="flex flex-wrap justify-between space-y-2">
                            <div class="w-full flex flex-col">
                                <x-label for="titulo" value="Insira o Titulo:" />
                                <x-input name="titulo" placeholder="Título da Atividade" class="input input-sm w-full" />
                            </div>
                            <div class="w-full flex flex-col">
                                <x-label for="disciplina" value="Selecione a Disciplina: " />
                                <select name="disciplina" id="disciplina" class="input input-sm w-full">
                                    <option value="">Selecione a Disciplina...</option>
                                    @foreach($disciplinas as $disciplina)
                                        <option value="{{ $disciplina->id }}">{{ $disciplina->descricao }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="w-full flex flex-row space-x-2">
                                <div class="w-full flex flex-col">
                                    <x-label for="titulo" value="Data da Atividade: " class="w-full"/>
                                    <x-input type="date" name="date" placeholder="Título da Atividade" class="input-sm w-full" />
                                </div>
                                <div class="flex flex-col w-full">
                                    <x-label for="bimestre" value="Bimestre: " />
                                    <select name="programada" id="programada" class="input-sm input">
                                        <option value="false">Não</option>
                                        <option value="true">Sim</option>
                                    </select>
                                </div>
                                <div class="flex flex-col w-full">
                                    <x-label for="programada" value="Atividade Programada: " />
                                    <select name="programada" id="programada" class="input-sm input">
                                        <option value="false">Não</option>
                                        <option value="true">Sim</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
</x-app-layout>
