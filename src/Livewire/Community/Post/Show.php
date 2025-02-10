<?php

namespace App\Livewire\Community\Post;

use LaravelCommunity\Models\LaravelCommunity\Post;
use Livewire\Component;
use function PHPUnit\Framework\isEmpty;

class Show extends Component
{
    public ?Post $post;

    public int $perPage = 1;

    public string $comment = '';

    public function loadMore(): void
    {
        $this->perPage += 2;
    }

    public function commenter(){
        if( !auth()->check() ){
            $this->redirect(route('login'));
        }

        if(isempty($this->comment)){
           return null;
        }

        $this->post->comments()->create([
           'user_id' => auth()->id(),
           'text' => $this->comment,
        ]);
        $this->perPage += 1;

        $this->comment = '';
    }

    public function mount(Post $post){
        $this->post = $post;
    }

    public function render()
    {
        $comments = $this->post->comments()->limit($this->perPage)->get();
        return view('livewire.community.post.show', [
            'post' => $this->post,
            'comments' => $comments,
        ]);
    }
}
