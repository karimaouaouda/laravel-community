<div class="body flex flex-col gap-4">
    <form wire:submit="publish" method="post" >
        <div class="bg-slate-700/30 shadow rounded-md p-2">
            <div x-init="empty = $el.innerText == ''" class="text-input" x-data="{placeholder: 'tap something...', empty : true}">
                <textarea
                    wire:model="data.text_content"
                    :class="{
                            'text-gray-100' : empty
                        }"
                    name="d"
                    id="d"  placeholder="post content"
                    class="p-2 w-full min-h-16 max-h-40 placeholder:text-slate-500 outline-none focus:ring-0 bg-transparent border-none" aria-placeholder="hello there" resize="false"></textarea>
            </div>

            <div x-data="{progress : false, uploading : false}"
                 x-on:livewire-upload-start="uploading = true"
                 x-on:livewire-upload-finish="uploading = false"
                 x-on:livewire-upload-progress="progress = $event.detail.progress"
                 class="flex px-3 justify-start space-x-3 items-center">

                @if(\LaravelCommunity\CommunityFeatures::canPublishWith(\LaravelCommunity\Enums\PostFeatures::IMAGE))
                    <input id="image" wire:model="data.image" type="file" class="hidden" />
                    <div x-show="uploading">
                        <progress max="100" x-bind:value="progress"></progress>
                    </div>
                    <i @click="$el.parentElement.querySelector('input#image').click()" class="bi bi-card-image text-xl text-slate-500 cursor-pointer"></i>
                @endif

                @if(\LaravelCommunity\CommunityFeatures::canPublishWith(\LaravelCommunity\Enums\PostFeatures::VIDEO))
                        <i class="bi bi-play-btn text-xl text-slate-500 cursor-pointer"></i>
                @endif

                @if(\LaravelCommunity\CommunityFeatures::canPublishWith(\LaravelCommunity\Enums\PostFeatures::FILE))
                        <i class="bi bi-file-earmark text-xl text-slate-500 cursor-pointer"></i>

                @endif

                @if(\LaravelCommunity\CommunityFeatures::canPublishWith(\LaravelCommunity\Enums\PostFeatures::FEELING))
                        <i class="bi bi-emoji-sunglasses text-xl text-slate-500 cursor-pointer"></i>
                @endif
            </div>
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
