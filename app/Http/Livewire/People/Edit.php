<?php

namespace App\Http\Livewire\People;

use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class Edit extends ModalComponent
{
    protected static array $maxWidths=[
        'custom_edit_people' => 'w-full-80',
    ];
    public static function modalMaxWidth(): string
    {
        return 'custom_edit_people';
    }
    public function render()
    {

        return view('livewire.people.edit');
    }
}
