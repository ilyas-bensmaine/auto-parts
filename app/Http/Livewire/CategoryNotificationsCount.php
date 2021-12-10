<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CategoryNotificationsCount extends Component
{
    public $count;
    public function mount()
    {

    }
    public function render()
    {
        $this->count = Auth::user()->unreadNotifications()->where('type' , 'App\Notifications\ModeleNotification')->count();
        return view('livewire.category-notifications-count');
    }
}
