{{-- @props(['formatted' => str_replace(']', '', str_replace('[', '.', $name))]) --}}

@php
    $formatted = str_replace(']', '', str_replace('[', '.', $name));
    $value = $value ?? old($formatted);
@endphp

<textarea {{ $attributes->merge(['class' => "input" . ($errors->has($formatted) ? ' is-border-danger' : '')]) }}>{{ $value }}</textarea>

@error($formatted)
    <span class="inline-block uppercase text-danger text-[12px] pl-2" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
