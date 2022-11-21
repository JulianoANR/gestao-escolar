<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="w-full min-h-full flex justify-center">
        <div class="max-w-[100%] h-32 bg-body rounded-md p-2 flex overflow-y-hidden scroll-smooth items-center">
            <div class="flex flex-row space-x-2 justify-start">
                @foreach ($salas as $sala)
                    <x-classroom-card
                    :salaSelecionada="$salaSelecionada"
                    :sala="$sala"
                    />
                @endforeach
            </div>
        </div>
    </div>
    @push('scripts')
    <script>
        function activeCard() {
            const cards = document.querySelectorAll('.classroom-card');
            cards.forEach(card => {
                card.addEventListener('click', () => {
                    cards.forEach(card => {
                        card.classList.remove('bg-black/30');
                    });
                    card.classList.add('bg-black/30');
                });
            });
        }

        function removeActiveCard() {
            const cards = document.querySelectorAll('.classroom-card');
            cards.forEach(card => {
                card.addEventListener('click', () => {
                    cards.forEach(card => {
                        card.classList.remove('bg-black/30');
                    });
                });
            });
        }

        $(document).ready(function () {
        $('.classroom-card').click(function (e) {
            removeActiveCard();
            activeCard();
            console.log($(this).data('class'));
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.post({
                    url: "{{ route('update.classroom') }}",
                    data: {
                        class: $(this).data('class'),
                        disciplina: $(this).data('disciplina')
                    },
                    success: function (data) {
                        console.log(data);
                    }
                });
            });
        })
    </script>
    @endpush

</x-app-layout>
