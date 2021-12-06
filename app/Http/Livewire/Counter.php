<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 5;

    public function increment()
    {
        $this->count = 10;
        // dd($this->count);
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
