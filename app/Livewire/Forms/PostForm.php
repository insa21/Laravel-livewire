<?php

namespace App\Livewire\Forms;

use App\Models\User;
use Livewire\Attributes\Rule;
use Livewire\Form;

class PostForm extends Form
{
    #[Rule(['required', 'string', 'min:3', 'max:255'])]
    public string $title = '';

    #[Rule(['required', 'string', 'min:3', 'max:255'])]
    public string $body = '';

    public function store(): void
    {
        $user = User::find(1); //@todo

        $user->posts()->create(
            $this->validate()
        );

        // session()->flash('message', 'Post created successfully.');
        flash('Post created successfully.');

        $this->reset();
    }
}
