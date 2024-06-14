<?php

namespace App\Livewire\Posts;

use Livewire\Component;

#[\Livewire\Attributes\Title('Posts')]

class Index extends Component
{
    public function render()
    {
        return view('livewire.posts.index');
    }
}
