<?php

namespace App\Http\Livewire\User\Layouts;

use Livewire\Component;

class Navbar extends Component
{
    public $home;
    public $user;

    public function mount($user)
    {
    }

    public function render()
    {
        return view('livewire.user.layouts.navbar');
    }
}
