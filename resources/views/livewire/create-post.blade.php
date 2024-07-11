<div class="body flex flex-col gap-4">
    <form wire:submit="publish" method="post">
        <div x-init="empty = $el.innerText == ''" class="text-input" x-data="{placeholder: 'tao something...', empty : true}">
            <p
                :class="{
                            'text-gray-500' : empty
                        }"
                name="d"
                @focus="empty != false?$el.innerText = '' : false ; empty=false"
                @blur="val=$el.innerText;empty = $el.innerText.trim() == ''"
                id="d" rows="1" contenteditable="true" role="textbox" placeholder="post content"
                class="p-2 border-0 border-l focus:ring-0 h-fit  outline-none" resize="false" x-text="empty?placeholder:$el.innerText"></p>
        </div>

        <div class="flex flex-col md:flex-row gap-4 justify-around items-center">

            <button class="p-2 w-full md:w-auto flex-1 bg-gray-200 justify-center text-slate-700 shadow shadow-md rounded-md hover:bg-gray-300 flex items-center gap-2">
                <i class="bi bi-card-image"></i>
                <span class="font-semibold text-md">
                            insert image
                        </span>
            </button>

            <button class="p-2 w-full md:w-auto flex-1 bg-gray-200 justify-center text-slate-700 shadow shadow-md rounded-md hover:bg-gray-300 flex items-center gap-2">
                <i class="bi bi-play-btn"></i>
                <span class="font-semibold text-md">
                            insert video
                        </span>
            </button>

            <button class="p-2 w-full md:w-auto flex-1 bg-gray-200 justify-center text-slate-700 shadow shadow-md rounded-md hover:bg-gray-300 flex items-center gap-2">
                <i class="bi bi-file-earmark"></i>
                <span class="font-semibold text-md">
                            insert file
                        </span>
            </button>

            <button class="p-2 w-full md:w-auto flex-1 bg-gray-200 justify-center text-slate-700 shadow shadow-md rounded-md hover:bg-gray-300 flex items-center gap-2">
                <i class="bi bi-emoji-sunglasses"></i>
                <span class="font-semibold text-md">
                            insert feeling
                        </span>
            </button>
        </div>

        <div class="my-4 flex justify-end gap-4 w-full">
            <button class="px-4 py-2 bg-gray-200 hover:bg-gray-300 shadow text-slate-700 rounded-md">
                schedule for later
            </button>
            <button type="submit" class="px-4 py-2 bg-sky-500 hover:bg-sky-600 shadow text-white rounded-md">
                publish now
            </button>
        </div>
    </form>
</div>

@script
<script>
    $wire.on('post-created', function(){
        alert('post-created')
    })
</script>
@endscript
