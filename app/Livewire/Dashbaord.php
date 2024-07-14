<?php

namespace App\Livewire;

use App\Models\Files;
use Auth;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;


class Dashbaord extends Component
{
    #[Title('dashbaord')]
    #[Url]

    public $search;
    public function render()
    {
        $user = Auth::guard('web')->user();
        $files = Files::where('user_id', $user->id)->where('title', 'like', '%' . $this->search . '%')->orderBy('id', 'desc')->paginate(2);
        return view('livewire.dashbaord', ["files" => $files]);
    }
}
