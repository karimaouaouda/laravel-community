<?php

namespace LaravelCommunity\Livewire;


use LaravelCommunity\Models\LaravelCommunity\Post;
use Livewire\Component;

class Community extends Component
{
    public int $perPage = 1;

    public function loadMore(){
        $this->perPage += 1;
    }

    public function render()
    {
        $posts = Post::limit($this->perPage)->get();
        return view('community::livewire.community', compact('posts'));
    }
}
