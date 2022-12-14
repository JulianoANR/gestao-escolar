@props(['classe' => $classe ?? 'red'])

<section class="px-4 mt-5 md:px-6 mb-6">
    <div id="alert-border-2" class="flex p-4 mb-4 bg-{{ $classe }}-100 border-t-4 border-{{ $classe }}-500 dark:bg-{{ $classe }}-200" role="alert">
        <svg class="flex-shrink-0 w-5 h-5 text-{{ $classe }}-700" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
        </svg>
        <div class="ml-3 text-sm font-medium text-{{ $classe }}-700">
            {{ $slot }}
        </div>
        <button type="button"
            class="ml-auto -mx-1.5 -my-1.5 bg-{{ $classe }}-100 dark:bg-{{ $classe }}-200 text-{{ $classe }}-500 rounded-lg focus:ring-2 focus:ring-{{ $classe }}-400 p-1.5 hover:bg-{{ $classe }}-200 dark:hover:bg-{{ $classe }}-300 inline-flex h-8 w-8"
                onclick="this.parentElement.parentElement.style.display='none';">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
        </button>
    </div>
</section>
