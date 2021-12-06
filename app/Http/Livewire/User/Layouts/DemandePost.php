<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DemandePost extends Component
{
    public $user;
    
    public function render()
    {
        return view('livewire.demande-post');
    }
}
