@props(['user' => $user ?? null])

@if(true)
    <img class="w-8 h-8 object-cover rounded-full" src="{{ Auth::user()->profile_path_image ? asset('storage/'.Auth::user()->profile_path_image) : asset('assets/images/profile/default.png') }}" alt="Photo-{{ Auth::user()->name }}">
@else
    <div {{ $attributes->merge(['class' => 'w-8 h-8 rounded-full bg-white flex items-center justify-center text-gray-900']) }}>
        <!-- <i class="text-xs  fas fa-user"></i> -->
        <x-icon class="w-4 h-4" name="person-sharp" library="ion-icon" />
    </div>
@endif


