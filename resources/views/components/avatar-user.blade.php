@props(['user' => $user ?? null])

@if(true)
    <img class="w-8 h-8 object-cover rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Photo-{{ Auth::user()->name }}">
@else
    <div {{ $attributes->merge(['class' => 'w-8 h-8 rounded-full bg-white flex items-center justify-center text-gray-900']) }}>
        <!-- <i class="text-xs  fas fa-user"></i> -->
        <x-icon class="w-4 h-4" name="person-sharp" library="ion-icon" />
    </div>
@endif


