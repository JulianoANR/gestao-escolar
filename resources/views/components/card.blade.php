@props([])

<div {{ $attributes->merge(['class' => "card"]) }}>

    @isset($header)
        <div {{ $header->attributes->merge(['class' =>'card-header']) }}>
            {{ $header }}
        </div>
    @endisset

    @isset($body)
        <div {{ $body->attributes->merge(['class' =>'card-body']) }}>
            {{ $body }}
        </div>
    @endisset

    @isset($footer)
        <div {{ $body->attributes->merge(['class' =>'card-footer']) }}>
            {{ $footer }}
        </div>
    @endisset
</div>
