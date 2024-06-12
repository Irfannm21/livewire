<?php

namespace App\Livewire\Users;

use Livewire\Component;
use ivewire\Attributes\Title;

class Show extends Component
{

    public  \App\Models\User $user;


    public function render()
    {
        return view('livewire.users.show')->title($this->user->name);
    }
}
