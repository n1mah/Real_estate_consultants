<?php

namespace App\Http\Livewire\People;

use App\Models\Person;
use Illuminate\Support\Facades\Gate;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class Edit extends ModalComponent
{
    public Person $person_get;
    public $person_id;
    public $firstname;
    public $lastname;
    public $fathername;
    public $national_code;
    public $birth_certificate_number;
    public $place_of_birth;
    public $postal_code;
    public $mobile;
    public $phone;
    public $address;
    public $date_of_birth;

    public function update()
    {

    }
    protected static array $maxWidths=[
        'custom_edit_people' => 'w-full-65',
    ];
    public static function modalMaxWidth(): string
    {
        return 'custom_edit_people';
    }
    public function mount(Person $person_get)
    {
        $this->person_get=$person_get;
        $this->person_id=$this->person_get->id;
        $this->firstname=$this->person_get->firstname;
        $this->lastname=$this->person_get->lastname;
        $this->fathername=$this->person_get->fathername;
        $this->national_code=$this->person_get->national_code;
        $this->birth_certificate_number=$this->person_get->birth_certificate_number;
        $this->place_of_birth=$this->person_get->place_of_birth;
        $this->postal_code=$this->person_get->postal_code;
        $this->mobile=$this->person_get->mobile;
        $this->phone=$this->person_get->phone;
        $this->address=$this->person_get->address;
        $this->date_of_birth=$this->person_get->date_of_birth;
    }


    public function render()
    {

        return view('livewire.people.edit');
    }
}
