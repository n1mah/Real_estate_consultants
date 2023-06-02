<?php

namespace App\Http\Livewire\People;

use App\Models\Person;
use Carbon\Carbon;
use Illuminate\Support\Facades\Gate;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;
use LivewireUI\Modal\Modal;
use function Assert\that;

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

    protected $listeners = ['editAction'];
    public function editAction(){
        $this->update();
//        $this->closeModalWithEvents("ch");
        $this->closeModalWithEvents([
            'changeCustomer',
        ]);
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

    protected $rules = [
        'firstname' => 'required|min:3|max:30',
        'lastname' => 'required|min:3|max:30',
        'fathername' => 'required|min:3|max:30',
//        'national_code' => 'required|digits:10|unique:people,national_code',
        'birth_certificate_number' => 'required',
        'place_of_birth' => 'required|max:55',
        'postal_code' => 'required',
        'mobile' => 'required|digits:11',
        'phone' => 'nullable',
        'address' => 'required|min:6',
        'date_of_birth' => 'required',
    ];

    protected $messages = [
        'firstname.required' => 'نام را وارد کنید',
        'firstname.min' => 'نام باید حداقل 3 کارکتر باشد',
        'firstname.max' => 'نام باید حداکثر 30 کارکتر باشد',
        'lastname.required' => 'نام خانوادگی  را وارد کنید',
        'lastname.min' => 'نام باید حداقل 3 کارکتر باشد',
        'lastname.max' => 'نام باید حداکثر 30 کارکتر باشد',
        'fathername.required' => 'نام پدر را وارد کنید',
        'fathername.min' => 'نام پدر باید حداقل 3 کارکتر باشد',
        'fathername.max' => 'نام پدر باید حداکثر 30 کارکتر باشد',
//        'national_code.required' => 'کدملی را وارد کنید',
//        'national_code.digits' => 'کدملی باید 10 عدد باشد',
//        'national_code.numeric' => 'کدملی باید عدد باشد',
//        'national_code.unique' => 'مشتری با این کد ملی از قبل در نرم افزار وجود دارد',
        'birth_certificate_number.required' => 'شماره شناسنامه را وارد کنید',
        'place_of_birth.required' => 'محل تولد را وارد کنید',
        'place_of_birth.max' => 'محل تولد حداکثر باید 55 کارکتر باشد',
        'postal_code.required' => 'کدپستی را وارد کنید',
        'mobile.required' => 'موبایل را وارد کنید',
        'mobile.numeric' => 'شماره موبایل باید عدد باشد',
        'mobile.digits' => 'شماره موبایل باید 11 رقم باشد',
        'phone.numeric' => 'شماره تلفن باید عدد باشد',
        'address.required' => 'آدرس خود را وارد کنید',
        'address.min' => 'آدرس باید حداقل 6 کارکتر باشد',
        'date_of_birth.required' => 'تاریخ تولد را وارد کنید',
    ];

    public function update()
    {
        $data = $this->validate();
        $person=Person::findOrFail($this->person_id);
        $data =[
            ...$data,
            'date_of_birth'=>Carbon::createFromTimestamp($this->date_of_birth, 'Asia/Tehran')->format('y/m/d H:i'),
            ];
        $person->update($data);
//        $this->close();
//        $this->close(
//            andForget: [
//                Edit::class => ['person' => $this->person_id],
//            ]
//        );
//        redirect()->route('people');
    }
    public function render()
    {

        return view('livewire.people.edit');
    }
}
