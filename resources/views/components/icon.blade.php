@props([
    'name' => $name ?? null,
    'library' => $name ?? null,
])

@switch(strtolower($library))
    @case('ion-icon')
        <div {{ $attributes->has('class') ? $attributes : $attributes->class('w-6 h-6 text-2xl') }} data-library="{{ $library }}" data-name="{{ $name }}" style="pointer-events: none">
            <ion-icon name="{{ $name }}"></ion-icon>
        </div>
    @break

    @case('fontawesome')
        <i {{ $attributes->merge(['class' => "fa-solid fa-{$name}"]) }}></i>
    @break

    @case('material-icon')
        <div class="material-symbols-outlined">{{ $name }}</div>
    @break

@endswitch
