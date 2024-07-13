<?php

namespace App\Livewire\Auth;

use Auth;
use Livewire\Component;

class Logout extends Component
{
    public function render()
    {
        return view('livewire.auth.logout');
    }
    public function logout()
    {
        Auth::logout();
        session()->flash('success', "Loged out successfully!");
        return $this->redirectRoute("login", navigate: true);
    }
}
