<?php

namespace App\Http\Livewire\People;

use App\Models\Person;
use Carbon\Carbon;
use Livewire\Component;

class Add extends Component
{

    public Person $person;

    public function mount(Person $person)
    {
        $this->person = $person;
    }
    protected $rules = [
        'person.firstname' => 'required|min:3|max:30',
        'person.lastname' => 'required|min:3|max:30',
        'person.fathername' => 'required|min:3|max:30',
        'person.national_code' => 'required|digits:10|unique:people,national_code',
        'person.birth_certificate_number' => 'required',
        'person.place_of_birth' => 'required|max:55',
        'person.postal_code' => 'required',
        'person.mobile' => 'required|digits:11',
        'person.phone' => 'nullable',
        'person.address' => 'required|min:6',
        'person.date_of_birth' => 'required',
    ];

    protected $messages = [
        'person.firstname.required' => 'نام را وارد کنید',
        'person.firstname.min' => 'نام باید حداقل 3 کارکتر باشد',
        'person.firstname.max' => 'نام باید حداکثر 30 کارکتر باشد',
        'person.lastname.required' => 'نام خانوادگی  را وارد کنید',
        'person.lastname.min' => 'نام باید حداقل 3 کارکتر باشد',
        'person.lastname.max' => 'نام باید حداکثر 30 کارکتر باشد',
        'person.fathername.required' => 'نام پدر را وارد کنید',
        'person.fathername.min' => 'نام پدر باید حداقل 3 کارکتر باشد',
        'person.fathername.max' => 'نام پدر باید حداکثر 30 کارکتر باشد',
        'person.national_code.required' => 'کدملی را وارد کنید',
        'person.national_code.digits' => 'کدملی باید 10 عدد باشد',
        'person.national_code.numeric' => 'کدملی باید عدد باشد',
        'person.national_code.unique' => 'مشتری با این کد ملی از قبل در نرم افزار وجود دارد',
        'person.birth_certificate_number.required' => 'شماره شناسنامه را وارد کنید',
        'person.place_of_birth.required' => 'محل تولد را وارد کنید',
        'person.place_of_birth.max' => 'محل تولد حداکثر باید 55 کارکتر باشد',
        'person.postal_code.required' => 'کدپستی را وارد کنید',
        'person.mobile.required' => 'موبایل را وارد کنید',
        'person.mobile.numeric' => 'شماره موبایل باید عدد باشد',
        'person.mobile.digits' => 'شماره موبایل باید 11 رقم باشد',
        'person.phone.numeric' => 'شماره تلفن باید عدد باشد',
//        'person.phone.min' => 'شماره تلفن نامعتبر می باشد',
//        'person.phone.max' => 'شماره تلفن نامعتبر می باشد',
        'person.address.required' => 'آدرس خود را وارد کنید',
        'person.address.min' => 'آدرس باید حداقل 6 کارکتر باشد',
        'person.date_of_birth.required' => 'تاریخ تولد را وارد کنید',
    ];

    public function create()
    {
        $this->validate();
        $this->person->date_of_birth=Carbon::createFromTimestamp($this->person->date_of_birth, 'Asia/Tehran')->format('y/m/d H:i');
        $this->person->save();
        redirect()->route('people');
    }
    public function render()
    {
        return view('livewire.people.add',['ss'=>$this->person->date_of_birth])
        ->layout('components.layouts.app');
    }
}
