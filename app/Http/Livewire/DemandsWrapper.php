<?php

namespace App\Http\Livewire;

use App\Models\Demande;
use Livewire\Component;

class DemandsWrapper extends Component
{
    public $filter;
    public $demands;

    public function mount()
    {
        // dd($this->filter);
        $this->demands = Demande::all();
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
