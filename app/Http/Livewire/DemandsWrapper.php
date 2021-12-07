<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DemandsWrapper extends Component
{
    public $filter;

    public function mount()
    {
        // dd($this->filter);
    }
    public function render()
    {
        return view('livewire.demands-wrapper');
    }


    public function updatedFilter()
    {
        dd($this->filter);
    }
}
