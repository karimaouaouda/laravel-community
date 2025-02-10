<?php

namespace LaravelCommunity\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Post extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public \LaravelCommunity\Models\LaravelCommunity\Post $post)
    {

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        dd("from normal component");
        return view('community::components.post');
    }
}
