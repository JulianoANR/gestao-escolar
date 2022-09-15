@props(['id' => 'button',
        'class' => 'button button-primary',
        'type' => 'submit',
        ])
<button id={{ $id }} type="{{ $type }}" class="{{ $class }}">
    <i class="animate-spin fa-solid fa-spinner hidden"></i> {{ $slot }}
</button>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


@if($type == 'submit')
<script>
    $('#{{ $id }}').on('click', function() {
        $(this).find('i').removeClass('hidden');
    });
</script>
@endif
