<?php

namespace App\Http\Livewire;

use Livewire\Component;

class NewDemandModal extends Component
{

    public $category = [];

    public function render()
    {
        return view('livewire.new-demand-modal');
    }

    public function store()
    {
        $this->name = '';
        $this->category = '';
        $this->emit('productStore');
    }


}
