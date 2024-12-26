<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use App\Models\User;
use App\Models\Post;
use Livewire\Attributes\Rule;
use Illuminate\Support\Facades\Auth;

class PostForm extends Form
{
    #[Rule(['required', 'string', 'min:3', 'max:255'])]
    public string $body = '';

    /**
     * Method untuk menyimpan data post.
     */
    public function store()
    {
        // Validasi input dan buat post terkait user yang sedang login
        $post = Auth::user()->posts()->create(
            $this->validate()
        );

        // Tampilkan pesan sukses menggunakan helper flash
        flash('Post created successfully.');

        // Reset properti formulir
        $this->reset();
        return $post;
    }
}
