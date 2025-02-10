<article class="w-full max-w-[450px] p-4 flex flex-col rounded-md bg-slate-700 shadow">
    <div class="flex justify-between items-center">
        <div class="personal-info flex gap-3">
            <div class="w-10 h-10 rounded-full overflow-hidden border border-white">
                <img src="{{ $post->user->profile_photo_url }}" class="object-cover w-full h-full" alt="">
            </div>
            <div class="flex flex-col justify-center">
                <h1 class="font-semibold capitalize text-sm tracking-wide text-white">
                    {{ $post->user->name }}
                </h1>
                <span class="font-light text-white text-xs">
                    Manager
                </span>
            </div>
            <i class="bi bi-patch-check-fill text-white -ml-2"></i>
        </div>
    </div>

    <p class="post-text mt-4 text-white text-sm">
        {{ $post->text }}
    </p>

    <div class="media-box rounded-lg w-full mt-2 overflow-hidden">
        <img src="{{ asset('post.jpeg') }}" class="object-cover w-full" alt="">
    </div>

    <div class="actions flex items-center justify-between mt-3 px-4">
        <div class="reactions space-x-3 flex items-center">

            <button
                wire:click="like('{{$post->id}}')"
                class="flex items-center flex-col mx-2"
                type="button">
                <i 
                    class="bi bi-heart{{$isLiked ? '-fill' : ''}} text-xl text-white"></i>
                <span class="-mt-1 text-white text-sm">
                    {{ $post->likes()->count() }}
                </span>
            </button>

            <button
                class="flex items-center flex-col mx-2"
                type="button">
                <i class="bi bi-chat text-xl text-white"></i>
                <span class="-mt-1 text-white text-sm">
                    {{ $post->likes()->count() }}
                </span>
            </button>

            <button
                class="flex items-center flex-col mx-2"
                type="button">
                <i class="bi bi-send text-xl text-white"></i>
                <span class="-mt-1 text-white text-sm">
                    {{ $post->likes()->count() }}
                </span>
            </button>

        </div>

        <button
            class="flex gap-2"
            type="button">
            <i class="bi bi-bookmark text-xl text-white"></i>
        </button>
    </div>
</article>