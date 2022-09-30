@props(['active' => $active, 'activeClasses' => 'bg-primary/10 text-primary !hover:bg-primary/10 !focus:bg-primary/20 !dark:hover:bg-primary/10 !dark:focus:bg-primary/20'])

<div class="flex flex-col-reverse lg:flex-row">

    <x-card class="grow lg:mr-3">
        <x-slot name="body" {{ $attributes }}>
            {{ $slot }}
        </x-slot>
    </x-card>

    <div class="w-full relative mb-6 lg:w-64 lg:mb-0">
        <div class="w-[11rem] space-y-6 overflow-hidden lg:py-5 lg:max-h-max" id="wrapper_items">

            <div>
                <h3 class="font-semibold text-sm pl-4 mb-2">
                    {{ 'Account' }}
                </h3>

                <a class="flex items-center gap-x-3 relative py-2 px-4 mb-1 w-full cursor-pointer rounded-sm transition text-sm hover:bg-gray-100 focus:bg-gray-200 dark:hover:bg-white/5 dark:focus:bg-white/10
                          {{ strtolower($active) == 'account_data' ? $activeClasses : '' }}" href="{{ route('user.edit') }}">
                    <x-icon class="w-5 h-5 text-xl" name="person-outline" library="ion-icon"></x-icon>
                    {{ __('layout.account-data') }}
                </a>
                <!---->
                <!---->
                <a class="flex items-center gap-x-3 relative py-2 px-4 mb-1 w-full cursor-pointer rounded-sm transition text-sm hover:bg-gray-100 focus:bg-gray-200 dark:hover:bg-white/5 dark:focus:bg-white/10
                          {{ strtolower($active) == 'preferences' ? $activeClasses : '' }}" href="{{ route('user.preferences') }}">
                    <x-icon class="w-5 h-5 text-xl" name="brush-outline" library="ion-icon"></x-icon>
                    {{ __('layout.preferences') }}
                </a>
                <!---->
                <!---->
                {{-- <a class="flex items-center gap-x-3 relative py-2 px-4 mb-1 w-full cursor-pointer rounded-sm transition text-sm hover:bg-gray-100 focus:bg-gray-200 dark:hover:bg-white/5 dark:focus:bg-white/10
                          {{ strtolower($active) == 'teams' ? $activeClasses : '' }}" href="#">
                    <x-icon class="w-5 h-5 text-xl" name="people-outline" library="ion-icon"></x-icon>
                    Teams
                </a> --}}
                <!---->
                <!---->
                <a class="flex items-center gap-x-3 relative py-2 px-4 mb-1 w-full cursor-pointer rounded-sm transition text-sm hover:bg-gray-100 focus:bg-gray-200 dark:hover:bg-white/5 dark:focus:bg-white/10
                          {{ strtolower($active) == 'browser_sessions' ? $activeClasses : '' }}" href="{{ route('user.sections') }}">

                    <x-icon class="w-5 h-5 text-xl" name="tv-outline" library="ion-icon"></x-icon>
                    {{ __('layout.sections') }}
                </a>
                <!---->
                <!---->
                <a class="flex items-center gap-x-3 relative py-2 px-4 mb-1 w-full cursor-pointer rounded-sm transition text-sm hover:bg-gray-100 focus:bg-gray-200 dark:hover:bg-white/5 dark:focus:bg-white/10
                          {{ strtolower($active) == 'logs' ? $activeClasses : '' }}" href="{{ route('user.logs') }}">

                    <x-icon class="w-5 h-5 text-xl" name="business-outline" library="ion-icon"></x-icon>
                    {{ __('layout.my-logs') }}
                </a>
            </div>

            <div>
                <h3 class="font-semibold text-sm pl-4 mb-2">
                    {{ __('layout.schools') }}
                </h3>

                <a class="flex items-center gap-x-3 relative py-2 px-4 mb-1 w-full cursor-pointer rounded-sm transition text-sm hover:bg-gray-100 focus:bg-gray-200 dark:hover:bg-white/5 dark:focus:bg-white/10
                          {{ strtolower($active) == 'schools' ? $activeClasses : '' }}" href="{{ route('escolas.index') }}">
                    <x-icon class="w-5 h-5 text-xl" name="business-outline" library="ion-icon"></x-icon>
                    {{ __('layout.my-schools') }}
                </a>

                <a class="flex items-center gap-x-3 relative py-2 px-4 mb-1 w-full cursor-pointer rounded-sm transition text-sm hover:bg-gray-100 focus:bg-gray-200 dark:hover:bg-white/5 dark:focus:bg-white/10
                          {{ strtolower($active) == 'classrooms' ? $activeClasses : '' }}" href="{{ route('salas.index') }}">
                    <x-icon class="w-5 h-5 text-xl" name="business-outline" library="ion-icon"></x-icon>
                    {{ __('layout.my-classrooms') }}
                </a>
            </div>
        </div>

        <div class="absolute inset-x-0 bottom-0 pointer-events-none flex justify-center pt-10 pb-3 bg-gradient-to-t from-body lg:!hidden">
            <button class="button button-primary button-sm pointer-events-auto" id="show_more">
                View all <i class="fa-solid fa-chevron-down"></i>
            </button>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        window.addEventListener('DOMContentLoaded', () => {

            document.querySelector('#show_more').addEventListener('click', function() {

                this.parentNode.remove();
                document.getElementById('wrapper_items').classList.remove('max-h-[11rem]');
            });
        });
    </script>
@endpush
