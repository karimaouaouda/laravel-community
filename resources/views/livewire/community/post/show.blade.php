<div class="mt-4 w-full flex flex-col items-center">
    <livewire:community.post :post="$post"/>

    <form wire:submit="commenter" class="mt-3 rounded-lg bg-slate-700 shadow p-2 w-full max-w-[450px]">
        <textarea
            class="w-full h-30 rounded-md bg-transparent border shadow"
            name="comment" 
            wire:model="comment" 
            id="comment" 
            placeholder="write a comment"></textarea>

            <button 
                type="submit"
                class="px-3 py-1 float-right rounded-md bg-slate-600 hover:bg-slate-500 duration-300 text-white">
                share
            </button>
    </form>

    <div class="mt-4 w-full space-y-3 max-w-[450px] pl-2 border-l">
        @foreach($comments as $comment)
            <x-partials.comment :comment="$comment"/>
        @endforeach
    </div>

    <div class="w-full mt-4 flex justify-center items-center">
            <button x-intersect="$wire.loadMore()" class="gap-2 text-slate-600 mx-auto w-fit ">
                <i wire:loading.class="animate-spin" class="bi bi-arrow-clockwise block text-xl"></i>
            </button>
        </div>
</div>
