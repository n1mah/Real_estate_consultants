<?php

namespace App\Http\Livewire\LeaseAgreements;

use App\Models\LeaseAgreement;
use App\Models\RentalPropertyDetails;
use Livewire\Component;

class Level2 extends Component
{
    public LeaseAgreement $leaseAgreement;

    public $gas_status;
    public $phone_status;
    public $warehouse_status;
    public $parking_status;
    public $shoo_status;
    public $contractOfSale;

    public $properties=[];
    public $membership_right=[];

    public $entirety='شش';
    public $title;
    public $type_of_lease='دانگ';
    public $house_number;
    public $sub_part_address;
    public $main_part_address;
    public $part;
    public $house_area;
    public $name;
    public $bedroom;
    public $parking;
    public $warehouse;
    public $title_deeds_number;
    public $address;
    public $postal_code;
    public $telephone;

    protected $listeners = [
        'save'
    ];

    protected $rules = [
        'entirety' => 'required',
        'type_of_lease' => 'required',
        'title' => 'required',
        'address' => 'required|min:5',
        'house_number' => 'required',
        'house_area' => 'required',
        'title_deeds_number' => 'required|min_digits:1',
        'name' => 'required',
        'bedroom' => 'required',
        'postal_code' => 'required|min:5',
    ];

    protected $messages = [
        'entirety.required' => ' تملیک منافع را وارد کنید',
        'type_of_lease.required' => ' نوع مورد اجاره را وارد کنید',
        'title.required' => ' عنوان مورد اجاره را وارد کنید',
        'house_area.required' => 'مساحت را وارد کنید',
        'house_number.required' => 'پلاک را وارد کنید',
        'title_deeds_number.required' => 'شماره سند ثبتی را مشخص کنید',
        'title_deeds_number.min_digits' => 'شماره سند ثبتی دارای حداقل یک عدد می باشد',
        'name.required' => ' نام مالک را وارد کنید',
        'bedroom.required' => ' تعداد اتاق را وارد کنید',
        'address.required' => 'آدرس/نشانی را وارد کنید',
        'address.min' => 'آدرس باید حداقل 5 کارکتر باشد',
        'postal_code.required' => 'کدپستی را وارد کنید',
        'postal_code.min' => 'کدپستی باید حداقل 5 کارکتر باشد',
    ];

    public function updatedParkingStatus()
    {
        if ($this->parking_status=='پارکینگ ندارد'){
            $this->parking_status=null;
        }
    }
    public function updatedWarehouseStatus()
    {
        if ($this->warehouse_status=='انباری ندارد'){
            $this->warehouse_status=null;
        }
    }
    public function updatedPhoneStatus()
    {
        if ($this->phone_status=='تلفن ندارد'){
            $this->phone_status=null;
        }
    }
    public function updatedGasStatus()
    {
        if ($this->gas_status=='گاز ندارد'){
            $this->gas_status=null;
        }
    }
    public function updatedShooStatus()
    {
        if ($this->shoo_status=='شوفاژ ندارد'){
            $this->shoo_status=null;
        }
    }
    public function create()
    {
        $this->validate();
            $membership_right=[...$this->membership_right];
            if ($this->phone_status)
                $membership_right[]=$this->phone_status;
            if ($this->shoo_status)
                $membership_right[]=$this->shoo_status;
            if ($this->gas_status)
                $membership_right[]=$this->gas_status;
            if ($this->warehouse_status)
                $membership_right[]=$this->warehouse_status;
            if ($this->parking_status)
                $membership_right[]=$this->parking_status;

            $RentalPropertyDetails=RentalPropertyDetails::create([
                'lease_agreement_id'=>$this->leaseAgreement->id,
                'entirety'=>$this->entirety,
                'type_of_lease'=>$this->type_of_lease,
                'title'=>$this->title,
                'address'=>$this->address,
                'house_number'=>$this->house_number,
                'sub_part_address'=>$this->sub_part_address,
                'main_part_address'=>$this->main_part_address,
                'part'=>$this->part,
                'house_area'=>$this->house_area,
                'title_deeds_number'=>$this->parking,
                'name'=>$this->parking,
                'bedroom'=>$this->parking,
                'membership_right'=>json_encode($membership_right),
                'parking'=>$this->parking,
                'warehouse'=>$this->warehouse,
                'telephone'=>$this->telephone,
                'postal_code'=>$this->postal_code,
            ]);
            $this->leaseAgreement->level=3;
            $this->leaseAgreement->save();
            redirect()->route('rents');
    }




    public function render()
    {
        return view('livewire.lease-agreements.level2')
            ->layout('components.layouts.app');
    }
}
