<?php

namespace App\Http\Livewire\People;

use Livewire\Component;

class Form extends Component
{
    public function render()
    {
        return view('livewire.people.form')
        ->layout('components.layouts.app');
    }
}
