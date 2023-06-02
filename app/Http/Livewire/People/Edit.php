<?php

namespace App\Http\Livewire\People;

use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class Edit extends ModalComponent
{
    public static function modalMaxWidth(): string
    {
        return 'cusome_edit_people';
    }
    public function render()
    {

        return view('livewire.people.edit');
    }
}
