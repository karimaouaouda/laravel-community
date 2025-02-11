<?php

namespace LaravelCommunity\Livewire\Community;

use Livewire\Component;

class Post extends Component
{
    public ?\LaravelCommunity\Models\LaravelCommunity\Post $post;

    public function mount(\LaravelCommunity\Models\LaravelCommunity\Post $post){
        $this->post = $post;
    }

    public function like(){
        if( !auth()->check() ){
            return response()->json(['error' => 'Unauthorized'], 401);
        }
        $user = auth()->user();

        if(!$this->post->isLikedBy($user->id)){
            $this->post->like($user->id);
        }else{
            $this->post->dislike($user->id);
        }
    }

    public function render()
    {
        $isLiked = auth()->check() && $this->post->isLikedBy(auth()->id());

        return view('community::components.post', [
            'post' => $this->post,
            'isLiked' => $isLiked
        ]);
    }
}
