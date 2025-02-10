<div class="flex flex-col w-full items-center py-10 bg-gray-800">
    <div class="w-fit flex flex-col gap-3">

        <div class="my-4 flex justify-center space-x-4 mx-auto">
            <a href="{{ route('community.index') }}" class="py-2 px-3 space-x-1 rounded-md bg-slate-700 shadow-md">
                <i class="bi bi-house text-white"></i>
                <span class="font-semibold capitalize text-white">
                    feed
                </span>
            </a>

            <a href="#" class="py-2 px-3 space-x-1 rounded-md bg-slate-700 shadow-md">
                <i class="bi bi-heart text-white"></i>
                <span class="font-semibold capitalize text-white">
                    following
                </span>
            </a>

            <a href="#" class="py-2 px-3 space-x-1 rounded-md bg-slate-700 shadow-md">
                <i class="bi bi-fire text-white"></i>
                <span class="font-semibold capitalize text-white">
                    trending
                </span>
            </a>

            <a href="{{ route('clubs') }}" class="py-2 px-3 space-x-1 rounded-md bg-slate-700 shadow-md">
                <i class="bi bi-people text-white"></i>
                <span class="font-semibold capitalize text-white">
                    clubs
                </span>
            </a>

        </div>
        @foreach($clubs as $club)
            <x-partials.club :club="$club"/>
        @endforeach

        <div class="w-full mt-4 flex justify-center items-center">
            <button x-intersect="$wire.loadMore()" class="gap-2 text-slate-600 mx-auto w-fit ">
                <i wire:loading.class="animate-spin" class="bi bi-arrow-clockwise block text-xl"></i>
            </button>
        </div>
    </div>


</div>