<?php

namespace App\Livewire\Posts;

use Livewire\Component;

class Create extends Component
{
    #[\Livewire\Attributes\Rule(['required', 'string', 'min:3', 'max:255'])]
    public string $title = '';


    #[\Livewire\Attributes\Rule(['required', 'string', 'min:3', 'max:255'])]
    public string $body = '';

    public function save()
    {
        // TODO: implement save logic
        $user = \App\Models\User::find(1);
        $validated = $this->validate();

        $user->posts()->create($validated);

        $this->reset();
    }


    public function render()
    {
        return view('livewire.posts.create');
    }
}
