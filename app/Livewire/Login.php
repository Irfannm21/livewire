<?php

namespace App\Livewire;

use Livewire\Component;

#[\Livewire\Attributes\Layout('login')]
class Login extends Component
{

    public function render()
    {
        // dd("TEST");
        return view('livewire.login');
    }
}
