<?php

namespace App\Livewire\Discover;

use App\Models\Club;
use Livewire\Component;

class Clubs extends Component
{
    public int $perPage = 1;

    public function loadMore(): void
    {
        $this->perPage += 5;
    }
    public function render()
    {
        $clubs = Club::limit($this->perPage)->get();
        return view('livewire.discover.clubs', compact('clubs'));
    }
}
