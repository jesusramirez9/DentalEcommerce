<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class NotificationComponent extends Component
{

    public $notifications, $count;

    public function mount(){
        $this->notifications = auth()->user()->notifications;
        $this->count = auth()->user()->unreadNotifications->count();
    }

    public function markAsRead(){
        auth()->user()->unreadNotifications->markAsRead();
        $this->count = 0;

    }

    public function render()
    {
        return view('livewire.admin.notification-component')->layout('layouts.admin');
    }
}
