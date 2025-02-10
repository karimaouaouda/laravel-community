<x-layouts.master>

    <livewire:partials.navbar />

    <div class="w-full">
        @if($type == \App\Models\User::class)
            <livewire:community.profile />
        @else
            <livewire:community.club-profile />
        @endif
    </div>

</x-layouts.master>