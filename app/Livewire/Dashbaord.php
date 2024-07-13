<?php

namespace App\Livewire;

use App\Models\Files;
use Auth;
use Livewire\Component;
use Livewire\Attributes\Title;

class Dashbaord extends Component
{
    #[Title('dashbaord')]
    public function render()
    {
        $user = Auth::guard('web')->user();
        $files = Files::where('user_id', $user->id)->orderBy('id', 'desc')->get();
        return view('livewire.dashbaord', ["files" => $files]);
    }
}
