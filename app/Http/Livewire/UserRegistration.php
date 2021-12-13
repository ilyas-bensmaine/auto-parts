<?php

namespace App\Http\Livewire;

use Livewire\Component;

class UserRegistration extends Component
{
    // Multi form parametres
    public $currentStep=1;
    public $totalSteps =1;


    
    public function render()
    {
        return view('livewire.user-registration');
    }
}
