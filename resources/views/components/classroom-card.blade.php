<div class="card card-primary @if($sala->id == $salaSelecionada->id && $sala->pivot->disciplina_id == $salaSelecionada->pivot->disciplina_id) bg-black/30 @endif animate-up w-80 h-[6rem] hover:cursor-pointer classroom-card" data-class={{ $sala->id ?? ''}} data-disciplina={{ $sala->pivot->disciplina_id ?? '' }}>
    <div class="card-body flex items-center space-x-4">
        <div class="grow">
            <h3 class="text-xl text-gray-100 font-semibold">{{ $sala->turma ?? '' }} - {{ $sala->formatDisciplina($sala->pivot->disciplina_id) ?? ''}}</h3>
            <div class="font-semibold capitalize text-gray-100 text-xs w-48">
                {{ strtolower($sala->escola->nome) ?? ''}}
            </div>
        </div>
        <div class="w-12 h-12 bg-white/20 text-gray-100 flex items-center justify-center rounded-full">
            <i class="fa-solid fa-user-group text-gray-100"></i>
        </div>
    </div>
</div>
