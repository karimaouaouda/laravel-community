<?php

namespace LaravelCommunity\Livewire;

use Livewire\Component;

class CreatePost extends Component
{
    public function render(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
    {
        return view('community::livewire.create-post');
    }



    public function publish(){
        $this->dispatch('post-created');
    }
}
