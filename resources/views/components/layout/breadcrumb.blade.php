@props(['path' => $path ?? [], 'initial' => $initial ?? ['Home' => route('index')]])

<nav {{ $attributes->merge(['class' => 'inline-flex items-center space-x-1 md:space-x-3']) }} aria-label="Breadcrumb">
    <a class="inline-flex items-center font-semibold text-sm text-primary dark:text-gray-400 dark:hover:text-gray-300" href="{{ $initial[array_keys($initial)[0]] }}">
        <x-icon name="home-sharp" library="ion-icon" class="mr-2 w-h h-4" />
        {{ array_keys($initial)[0] }}
    </a>

    @foreach($path as $url)
        <span class="inline-flex items-center">
            <x-icon name="chevron-forward" library="ion-icon" class="mr-2 w-h h-4 text-gray-400" />

            <a class="text-sm text-gray-400 font-semibold hover:text-gray-500 dark:text-gray-400 dark:hover:text-gray-300" href="{{ $url }}">
                {{ array_keys($path)[$loop->index] }}
            </a>
        </span>
    @endforeach
</nav>
