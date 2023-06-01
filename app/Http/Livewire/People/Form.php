<?php

namespace App\Http\Livewire\People;

use App\Models\Person;
use Livewire\Component;

class Form extends Component
{

    public Person $person;

    public function mount()
    {
        $this->person = new Person();
    }
    protected $rules = [
        'person.firstname' => 'required',
        'person.lastname' => 'required',
        'person.fathername' => 'required',
        'person.national_code' => 'required',
        'person.birth_certificate_number' => 'required',
        'person.place_of_birth' => 'required',
        'person.postal_code' => 'required',
        'person.mobile' => 'required',
        'person.phone' => 'nullable',
        'person.address' => 'required',
        'person.date_of_birth' => 'required',
    ];

    protected $messages = [
        'person.firstname.required' => 'نام را وارد کنید',
        'person.lastname.required' => 'نام خانوادگی  را وارد کنید',
        'person.fathername.required' => 'نام پدر را وارد کنید',
        'person.national_code.required' => 'کدملی را وارد کنید',
        'person.birth_certificate_number.required' => 'شماره شناسنامه را وارد کنید',
        'person.place_of_birth.required' => 'محل تولد را وارد کنید',
        'person.postal_code.required' => 'کدپستی را وارد کنید',
        'person.mobile.required' => 'موبایل را وارد کنید',
        'person.address.required' => 'آدرس خود را وارد کنید',
        'person.date_of_birth.required' => 'تاریخ تولد را وارد کنید',
    ];

    public function create()
    {
//        dd(1);
        $this->validate();
        $this->person->save();
        redirect()->route('people');
    }
    public function render()
    {
        return view('livewire.people.form')
        ->layout('components.layouts.app');
    }
}
