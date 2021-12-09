<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DemandPost extends Component
{
    public $demand;
    public $user;
    public $wilyas;
    public $etat;
    public $prix;
    public $heart;
    public $countHearts;

    public function mount()
    {
           $this->countHearts = $this->demand->viewers()->count();
    }

    public function FunctionName()
    {
        
    }

    public function render()
    {
        return view('livewire.demand-post');
    }
}
