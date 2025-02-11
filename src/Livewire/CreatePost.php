<?php

namespace LaravelCommunity\Livewire;

use LaravelCommunity\Models\LaravelCommunity\Post;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreatePost extends Component
{
    use WithFileUploads;

    public array $data = [];
    public function render(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
    {
        return view('community::livewire.create-post');
    }



    public function publish(){
        dd($this->data);
        $post = new Post();
        $post->publisher_id = 1;
        $post->text_content = request('text_content');
        $post->save();
        $this->dispatch('post-created');
    }
}
