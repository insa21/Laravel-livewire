<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use App\Models\User;
use Livewire\Attributes\Rule;

class PostForm extends Form
{
    #[Rule(['required', 'string', 'min:3', 'max:255'])]
    public string $title = '';


    #[Rule(['required', 'string', 'min:3', 'max:255'])]
    public string $body = '';


    public function store(): void
    {
        // TODO: implement save logic
        $user = User::find(1); //@todo

        $user->posts()->create(
            $this->validate()
        );

        $this->reset();
    }
}
