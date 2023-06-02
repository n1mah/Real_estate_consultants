<?php

namespace App\Http\Livewire\People;

use App\Models\Person;
use Illuminate\Support\Facades\Gate;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class Show extends ModalComponent
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

    protected static array $maxWidths=[
        'custom_edit_people' => 'w-full-65',
    ];
//    protected $listeners = ['cusClose' => ''];

    public static function modalMaxWidth(): string
    {
        return 'custom_edit_people';
    }
    public function mount(Person $person_get)
    {
        $this->person_id=$person_get->id;
        $this->firstname=$person_get->firstname;
        $this->lastname=$person_get->lastname;
        $this->fathername=$person_get->fathername;
        $this->national_code=$person_get->national_code;
        $this->birth_certificate_number=$person_get->birth_certificate_number;
        $this->place_of_birth=$person_get->place_of_birth;
        $this->postal_code=$person_get->postal_code;
        $this->mobile=$person_get->mobile;
        $this->phone=$person_get->phone;
        $this->address=$person_get->address;
        $this->date_of_birth=$person_get->date_of_birth;

    }

    public function render()
    {
        return view('livewire.people.show');
    }
}
