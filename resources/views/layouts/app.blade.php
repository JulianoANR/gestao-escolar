<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="blue">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{-- Headers adicionais --}}
        @stack('header')

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        {{-- <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap"> --}}
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">

        <!-- Fontawesome 6.1.1 -->
        <link href="{{ asset('assets/fontawesome/css/all.css') }}" rel="stylesheet">

        <!-- Pace loading -->
        <link rel="stylesheet" href="{{ asset('assets/pace/minimal.css') }}">
        <script src="{{ asset('assets/pace/pace.min.js') }}"></script>

        {{-- Icon --}}
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

        <!-- Datatable -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

        <!-- Notyf -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        @stack('styles')

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Init preferences -->
        <script>
            if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                document.documentElement.classList.add('dark')
            } else {
                document.documentElement.classList.remove('dark')
            }
        </script>

        <style>
            ::-webkit-scrollbar
            {
                width: 5px;
                height: 4px;
            }
            ::-webkit-scrollbar-thumb
            {
                border: 1px;
                background: #ccc;
                border-radius: 6px;
            }

        </style>
    </head>

    <body {{ $attributes }}>

        <div>
            <!-- Wrapper Global -->
            <div class="flex flex-col w-full h-screen !overflow-y-auto overflow-x-hidden relative" id="wrapper_global">

                <x-layouts.navbar />

                <div>
                    <x-layouts.sidebar />

                    <label class="invisible opacity-0 fixed z-20 inset-0 bg-zinc-900/60 transition duration-300 xl:hidden" id="overlay-navigation" for="checkbox-navigation">
                        <!-- Overlay Navigation -->
                    </label>
                </div>

                <div class="grow flex flex-col bg-body xl:ml-72">

                    <main class="grow pb-12">

                        {{-- Alertas --}}
                        @if (session('status') && session('class'))
                            <x-layouts.alerta class="{{ session('class') }}">
                                {{ session('status')  }}
                            </x-layouts.alerta>
                        @endif

                        {{-- Content --}}
                        {{ $slot }}

                    </main>

                    {{-- Footer --}}
                    <x-layouts.footer-min />
                </div>
            </div>
        </div>

        <!-- Slide-over -->
        <div class="hidden relative z-20" aria-labelledby="slide-over-title" role="dialog" aria-modal="true">
            <!--
                Background backdrop, show/hide based on slide-over state.

                Entering: "ease-in-out duration-500"
                From: "opacity-0"
                To: "opacity-100"
                Leaving: "ease-in-out duration-500"
                From: "opacity-100"
                To: "opacity-0"
            -->
            <div class="fixed inset-0 bg-zinc-900/60 transition-opacity"></div>

            <div class="fixed inset-0 overflow-hidden">
                <div class="absolute inset-0 overflow-hidden">
                    <div class="pointer-events-none fixed inset-y-0 right-0 flex max-w-full pl-10">
                        <!--
                            Slide-over panel, show/hide based on slide-over state.

                            Entering: "transform transition ease-in-out duration-500 sm:duration-700"
                            From: "translate-x-full"
                            To: "translate-x-0"
                            Leaving: "transform transition ease-in-out duration-500 sm:duration-700"
                            From: "translate-x-0"
                            To: "translate-x-full"
                        -->
                        <div class="pointer-events-auto relative w-screen max-w-md">
                            <!--
                                Close button, show/hide based on slide-over state.

                                Entering: "ease-in-out duration-500"
                                From: "opacity-0"
                                To: "opacity-100"
                                Leaving: "ease-in-out duration-500"
                                From: "opacity-100"
                                To: "opacity-0"
                            -->
                            <div class="absolute top-0 left-0 -ml-8 flex pt-4 pr-2 sm:-ml-10 sm:pr-4">
                                <button type="button" class="rounded-md text-gray-300 hover:text-white focus:outline-none focus:ring-2 focus:ring-white">
                                    <span class="sr-only">Close panel</span>
                                    <!-- Heroicon name: outline/x -->
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>

                            <div class="flex h-full flex-col overflow-y-scroll bg-white py-6 shadow-xl">
                                <div class="px-4 sm:px-6">
                                    <h2 class="text-lg font-medium text-gray-900" id="slide-over-title">Panel title</h2>
                                </div>
                                <div class="relative mt-6 flex-1 px-4 sm:px-6">
                                    <!-- Replace with your content -->
                                    <div class="absolute inset-0 px-4 sm:px-6">
                                        <div class="h-full border-2 border-dashed border-gray-200" aria-hidden="true"></div>
                                    </div>
                                    <!-- /End replace -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Go top -->
        <button class="invisible opacity-0 button button-primary button-sm p-3 shadow-lg rounded fixed bottom-6 right-6 lg:bottom-6 lg:right-6" role="button">
            <x-icon class="w-4 h-4" name="arrow-up" library="ion-icon" />
        </button>

        <!-- Ion-icon -->
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

        {{-- Scripts --}}
        <script src="{{ asset('js/main.js') }}"></script>
        <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.js"></script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.js"></script>

        @stack('scripts')

        <script>
            $(document).ready( function () {
                $('#table_id').DataTable({
                    "language": {
                        "url": "//cdn.datatables.net/plug-ins/1.10.21/i18n/Portuguese-Brasil.json",
                    }
                });
            } );
        </script>
    </body>
</html>
