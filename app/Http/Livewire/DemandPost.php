<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DemandPost extends Component
{
    public $user;
    
    public function render()
    {
        return view('livewire.demand-post');
    }
}
