<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Component;

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
