<?php

namespace App\Livewire\Users;

use Livewire\Component;
use App\Models\User;

class Show extends Component
{
    public User $user;

    public function render()
    {
        // Menyusun title dinamis menggunakan nama user
        $title = $this->user->name;

        // Mengatur title secara manual di layout atau tampilan
        return view('livewire.users.show', ['title' => $title]);
    }
}
