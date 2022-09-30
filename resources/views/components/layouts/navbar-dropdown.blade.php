<div class="relative">
    <button class="flex items-center justify-center space-x-2 text-white ml-2" data-trigger="dropdown" data-dropdown-sensible>

        <div class="relative">
            <x-avatar-user :user="Auth::user()" />
            <span class="-bottom-0.5 -right-0.5 absolute w-3.5 h-3.5 bg-green-400 border-2 border-theme rounded-full dark:border-zinc-800"></span>
        </div>

        <span class="hidden text-sm text-current font-medium sm:block lg:text-base">
            {{ Auth::user()->name }}
        </span>
        <x-icon name="chevron-down" class="w-5 h-5 text-xl" library="ion-icon" />
    </button>

    <div class="hidden animate-zoom-in origin-top-right absolute right-0 top-14 rounded shadow bg-white py-2 min-w-[200px] border border-slate-200
                dark:bg-header dark:border-zinc-800 dark:shadow-lg">
        {{-- Profile --}}
        <a class="flex items-center space-x-4 w-full px-4 py-2 text-gray-700 cursor-pointer transition hover:bg-gray-100 focus:bg-gray-200
                    dark:text-gray-100 dark:hover:bg-white/5 dark:focus:bg-white/10" href="{{ route('user.edit') }}">
            <i class="fa-solid fa-user"></i>
            <span class="capitalize">{{  __('layout.profile') }}</span>
        </a>
        {{-- Preferences --}}
        <a class="flex items-center space-x-4 w-full px-4 py-2 text-gray-700 cursor-pointer transition hover:bg-gray-100 focus:bg-gray-200
                    dark:text-gray-100 dark:hover:bg-white/5 dark:focus:bg-white/10" href="{{ route('user.preferences') }}">
            <i class="fa-solid fa-gear"></i>
            <span class="capitalize">{{  __('layout.preferences') }}</span>
        </a>
        {{-- Schools --}}
        <a class="flex items-center space-x-4 w-full px-4 py-2 text-gray-700 cursor-pointer transition hover:bg-gray-100 focus:bg-gray-200
                dark:text-gray-100 dark:hover:bg-white/5 dark:focus:bg-white/10" href="{{ route('escolas.index') }}">
            <ion-icon name="business-outline"></ion-icon>
            <span>{{ __('layout.my-schools') }}</span>
        </a>
        {{-- Logout --}}
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button class="flex items-center space-x-4 px-4 py-2 text-gray-700 border-t w-full cursor-pointer transition hover:text-white hover:bg-red-400 focus:text-white focus:bg-red-500
                            dark:text-gray-100 dark:hover:bg-white/5 dark:focus:bg-white/10 dark:border-zinc-700" type="submit">
                <i class="fa-solid fa-power-off"></i>
                <span>{{  __('layout.logout') }}</span>
            </button>
        </form>
    </div>
</div>
