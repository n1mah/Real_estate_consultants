<?php

namespace App\Http\Livewire;

use Livewire\Component;


class Testt extends Component
{
    public $count = 0;

    public function changerr($opr=1)
    {

        $opr==1?$this->count++:$this->count--;
    }
    public function render()
    {
        return view('livewire.testt');
    }
}
