<?php

namespace App\Http\Livewire\People;

use App\Models\Person;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Gate;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;
use LivewireUI\Modal\Modal;
use function Assert\that;

class Delete extends ModalComponent
{

    public Person $person_get;
    public $person_id;
    public $firstname;
    public $lastname;
    public $fathername;
    public $national_code;

    protected $listeners = ['deleteAction'];
    public function deleteAction(){
        $this->delete();
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
    }

    public function delete()
    {
        try {
            $person=Person::findOrFail($this->person_id);
            $person->delete();
        } catch(ModelNotFoundException $e) {
            redirect()->route("people");
        }


    }
    public function render()
    {

        return view('livewire.people.delete');
    }
}
