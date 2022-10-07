<nav class="fixed z-30 top-0 -left-full w-80 h-full flex flex-col bg-theme shadow transition-[left] duration-300 ease-in-out lg:w-72 xl:!left-0 xl:z-10 xl:bg-aside xl:pt-16 xl:transition-none" id="navigation">

    <div class="h-16 flex items-center justify-between p-4 px-5 xl:hidden">
        <a href="{{  route('index') }}">
            <x-application-logo type="full" class="min-w-8 h-8 fill-current text-white" />
        </a>

        <label class="cursor-pointer p-2 text-white rounded-full transition hover:bg-white/10 focus:outline-none focus:ring focus:ring-white/20 focus:bg-white/10" for="checkbox-navigation" tabindex="1">
            <x-icon name="close" library="ion-icon"></x-icon>
        </label>
    </div>

    <div class="h-[calc(100%-4rem)] overflow-y-auto flex flex-col pt-2 px-3 pb-4 space-y-4 text-white xl:h-full xl:pt-6 xl:text-gray-600 dark:text-gray-400">
        <!-- Active classes: bg-white/5 xl:text-primary xl:bg-gray-50 dark:bg-white/5 -->

        <!-- Dashboard -->
        <div class="space-y-2">
            <h2 class="text-gray-200 font-semibold ml-2 xl:text-gray-500 dark:text-gray-300">
                {{ 'Dashboard' }}
            </h2>

            <a class="flex items-center gap-x-3 relative py-2 px-3 w-full cursor-pointer rounded-sm transition hover:bg-white/10 focus:outline-none xl:hover:bg-gray-100 xl:focus:bg-gray-200
                        dark:hover:bg-white/10 dark:focus:bg-white/20
                        bg-white/5 xl:text-primary xl:bg-gray-50 dark:bg-white/5 dark:text-white" href="{{ route('dashboard') }}">

                <x-icon name="pie-chart" library="ion-icon"></x-icon>
                Home
            </a>

            <a class="flex items-center gap-x-3 relative py-2 px-3 w-full cursor-pointer rounded-sm transition hover:bg-white/10 focus:outline-none xl:hover:bg-gray-100 xl:focus:bg-gray-200
                        dark:hover:bg-white/10 dark:focus:bg-white/20" href="#">

                <x-icon name="mail-open-outline" library="ion-icon"></x-icon>
                Inbox
            </a>

            <a class="flex items-center gap-x-3 relative py-2 px-3 w-full cursor-pointer rounded-sm transition hover:bg-white/10 focus:outline-none xl:hover:bg-gray-100 xl:focus:bg-gray-200
                        dark:hover:bg-white/10 dark:focus:bg-white/20" href="{{ route('salas.index') }}">

                <x-icon name="users" library="fontawesome"></x-icon>
                Minhas Turmas
            </a>

            <div>
                <button class="flex items-center gap-x-3 relative py-2 px-3 w-full text-current cursor-pointer rounded-sm transition hover:bg-white/10 focus:outline-none xl:hover:bg-gray-100 xl:focus:bg-gray-200
                                dark:hover:bg-white/10 dark:focus:bg-white/20" data-trigger="collapse">

                    <x-icon name="settings-outline" library="ion-icon"></x-icon>

                    <span class="grow flex justify-between items-center">
                        {{ __('layout.settings') }}
                        <x-icon class="h-5 w-5 text-xl" name="chevron-down" library="ion-icon"></x-icon>
                    </span>
                </button>

                <div class="is-collapsed collapsible mt-2 space-y-1">
                    <!---->
                    <!---->
                    <a class="py-2 px-12 block relative text-sm text-current cursor-pointer rounded-sm transition hover:bg-white/10 focus:outline-none xl:hover:bg-gray-100 xl:focus:bg-gray-200 dark:hover:bg-white/5 dark:focus:bg-white/10
                                before-marker before:absolute before:left-5 before:top-1/2 before:-translate-y-1/2" href="{{ route('user.edit') }}">
                        {{ __('layout.account') }}
                    </a>
                    <!---->
                    <!---->
                    <a class="py-2 px-12 block relative text-sm text-current cursor-pointer rounded-sm transition hover:bg-white/10 focus:outline-none xl:hover:bg-gray-100 xl:focus:bg-gray-200 dark:hover:bg-white/5 dark:focus:bg-white/10
                                before-marker before:absolute before:left-5 before:top-1/2 before:-translate-y-1/2" href="{{ route('user.preferences') }}">
                        {{ __('layout.preferences') }}
                    </a>
                    <!---->
                    <!---->
                    <a class="py-2 px-12 block relative text-sm text-current cursor-pointer rounded-sm transition hover:bg-white/10 focus:outline-none xl:hover:bg-gray-100 xl:focus:bg-gray-200 dark:hover:bg-white/5 dark:focus:bg-white/10
                                before-marker before:absolute before:left-5 before:top-1/2 before:-translate-y-1/2" href="{{ route('user.logs') }}">
                        {{ __('layout.my-logs') }}
                    </a>
                    <!---->
                    <!---->
                    <a class="py-2 px-12 block relative text-sm text-current cursor-pointer rounded-sm transition hover:bg-white/10 focus:outline-none xl:hover:bg-gray-100 xl:focus:bg-gray-200 dark:hover:bg-white/5 dark:focus:bg-white/10
                                before-marker before:absolute before:left-5 before:top-1/2 before:-translate-y-1/2" href="{{ route('escolas.index') }}">
                        {{ __('layout.my-schools') }}
                    </a>
                </div>
            </div>
        </div>

        {{-- <!-- Ui Elements -->
        <div class="space-y-2">
            <h2 class="text-gray-200 font-semibold ml-2 xl:text-gray-500 dark:text-gray-300">
                {{ 'Ui Elements' }}
            </h2>

            <div>
                <button class="flex items-center gap-x-3 relative py-2 px-3 w-full text-current cursor-pointer rounded-sm transition hover:bg-white/10 focus:outline-none xl:hover:bg-gray-100 xl:focus:bg-gray-200
                                dark:hover:bg-white/10 dark:focus:bg-white/20" data-trigger="collapse">

                    <x-icon name="cube-outline" library="ion-icon"></x-icon>

                    <span class="grow flex justify-between items-center">
                        Components
                        <x-icon class="h-5 w-5 text-xl" name="chevron-down" library="ion-icon"></x-icon>
                    </span>
                </button>

                <div class="is-collapsed collapsible mt-2 space-y-1">
                    <!---->
                    <!---->
                    <a class="py-2 px-12 block relative text-sm text-current cursor-pointer rounded-sm transition hover:bg-white/10 focus:outline-none xl:hover:bg-gray-100 xl:focus:bg-gray-200 dark:hover:bg-white/5 dark:focus:bg-white/10
                                before-marker before:absolute before:left-5 before:top-1/2 before:-translate-y-1/2" href="#">
                        Introduction
                    </a>
                    <!---->
                    <!---->
                    <a class="py-2 px-12 block relative text-sm text-current cursor-pointer rounded-sm transition hover:bg-white/10 focus:outline-none xl:hover:bg-gray-100 xl:focus:bg-gray-200 dark:hover:bg-white/5 dark:focus:bg-white/10
                                before-marker before:absolute before:left-5 before:top-1/2 before:-translate-y-1/2"  href="#">
                        Icons
                    </a>
                    <!---->
                    <!---->
                    <a class="py-2 px-12 block relative text-sm text-current cursor-pointer rounded-sm transition hover:bg-white/10 focus:outline-none xl:hover:bg-gray-100 xl:focus:bg-gray-200 dark:hover:bg-white/5 dark:focus:bg-white/10
                                before-marker before:absolute before:left-5 before:top-1/2 before:-translate-y-1/2" href="#">
                        DataTable
                    </a>
                    <!---->
                    <!---->
                    <a class="py-2 px-12 block relative text-sm text-current cursor-pointer rounded-sm transition hover:bg-white/10 focus:outline-none xl:hover:bg-gray-100 xl:focus:bg-gray-200 dark:hover:bg-white/5 dark:focus:bg-white/10
                                before-marker before:absolute before:left-5 before:top-1/2 before:-translate-y-1/2" href="#">
                        Charts
                    </a>
                </div>
            </div>
        </div> --}}

        <div class="p-3 flex flex-col gap-y-4 bg-white/10 rounded xl:bg-gray-100 dark:bg-white/5">

            <div class="flex justify-center text-3xl">
                <i class="fa-solid fa-gift"></i>
            </div>

            <p class="text-sm text-center">
                Sistema de Gestão Escolar, desenvolvido e mantido pela <strong class="text-primary">Informatica Educativa</strong>
            </p>

            <button class="button button-primary button-sm w-full waves-effect">
                Go to <i class="fa-brands fa-github"></i>
            </button>
        </div>
    </div>
</nav>
