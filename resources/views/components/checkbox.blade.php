@php
    $formatted = str_replace(']', '', str_replace('[', '.', $name));
    $value = $value ?? old($formatted)
@endphp

<input {{ $attributes->merge(['class' => 'checkbox']) }} type="checkbox" @checked($value ?? old($formatted))>
