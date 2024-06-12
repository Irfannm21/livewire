<?php

namespace App\Livewire\Posts;

use App\Models\User;
use Livewire\Component;

class Create extends Component
{
    #[\Livewire\Attributes\Rule(['required',"string","min:2"])]
    public string $title = '';

    #[\Livewire\Attributes\Rule('required')]
    public string $body = '';
    public function save()
    {
        $user = User::find(1);

        $validated = $this->validate();

        $user->posts()->create($validated);

        flash('Post Created Successfully', 'success');
    }
    public function render()
    {
        return view('livewire.posts.create');
    }
}
