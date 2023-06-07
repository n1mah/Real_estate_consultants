<?php

namespace App\Http\Livewire\ContractOfSales;

use App\Models\ContractOfSale;
use App\Models\PropertyDetails;
use Carbon\Carbon;
use Livewire\Component;

class Level2 extends Component
{
    public $gas_status;
    public $phone_status;
    public $shoo_status;
    public $contractOfSale;

    public $properties=[];
    public $membership_right=[];

    public $title_deeds;
    public $entirety='شش';
    public $arena_and_nobles;
    public $house_number;
    public $sub_part_address;
    public $main_part_address;
    public $year_of_construction;
    public $part;
    public $registration_area;
    public $house_area;
    public $price_per_meter;
    public $parking;
    public $warehouse;
    public $title_deeds_number;
    public $address;
    public $postal_code;
    public $telephone;
    public $total=0;
    public $title_deeds_check=false;

    protected $listeners = [
        'save'
    ];

    protected $rules = [
        'title_deeds' => 'required',
//        'entirety' => 'required',
//        'year_of_construction' => 'required|digits:4',
        'house_area' => 'required',
        'price_per_meter' => 'required|min_digits:1',
        'arena_and_nobles' => 'required',
        'address' => 'required|min:5',
        'postal_code' => 'required|min:5',
    ];

    protected $messages = [
        'title_deeds.required' => 'وضعیت سند ثبتی را مشخص کنید',
//        'entirety.required' => 'دانگ را انتخاب کنید',
//        'year_of_construction.required' => 'سال ساخت را انتخاب کنید',
        'house_area.required' => 'مساحت را وارد کنید',
        'price_per_meter.required' => 'قیمت هر متر مربع به ریال را وارد کنید',
        'arena_and_nobles.required' => 'عرصه و ایان را وارد کنید',
        'address.required' => 'آدرس/نشانی را وارد کنید',
        'price_per_meter.min_digits' => ' قیمت هر متر مربع باید عدد صحیح به ریال باشد (حداقل یک کارکتر)',
//        'year_of_construction.digits' => 'سال ساخت را با سال چهار رقمی مشخص کنید',
        'postal_code.required' => 'کدپستی را وارد کنید',
        'address.min' => 'آدرس باید حداقل 5 کارکتر باشد',
        'postal_code.min' => 'کدپستی باید حداقل 5 کارکتر باشد',
         ];

    public function create()
    {
        $this->validate();
        if ($this->title_deeds!='null'){
            $membership_right=[...$this->membership_right,$this->phone_status,$this->shoo_status,$this->gas_status];
            $PropertyDetails=PropertyDetails::create([
                'contract_of_sale_id'=>$this->contractOfSale->id,
                'entirety'=>$this->entirety,
                'arena_and_nobles'=>$this->arena_and_nobles,
                'house_number'=>$this->house_number,
                'sub_part_address'=>$this->sub_part_address,
                'main_part_address'=>$this->main_part_address,
                'year_of_construction'=>$this->year_of_construction,
                'part'=>$this->part,
                'registration_area'=>$this->registration_area,
                'house_area'=>$this->house_area,
                'price_per_meter'=>$this->price_per_meter,
                'parking'=>$this->parking,
                'warehouse'=>$this->warehouse,
                'telephone'=>$this->telephone,
                'title_deeds'=>$this->title_deeds,
                'title_deeds_number'=>$this->title_deeds_number,
                'address'=>$this->address,
                'postal_code'=>$this->postal_code,
                'membership_right'=>json_encode($membership_right)
            ]);
            $this->contractOfSale->level=3;
            $this->contractOfSale->save();
            redirect()->route('sales');
        }
    }
    public function total()
    {
        if (!empty($this->house_area) && !empty($this->price_per_meter)){
            $this->total =$this->house_area * $this->price_per_meter;
        }else{
            $this->total = 0;
        }
    }
    public function updatedHouseArea(){
        $this->total();
    }


    public function updatedPricePerMeter(){
        $this->total();
    }
    public function updatedTitleDeeds()
    {
        $this->title_deeds_check=($this->title_deeds==1)?true:false;
    }




    public function mount(ContractOfSale $contractOfSale)
    {
        $this->contractOfSale = $contractOfSale;
        $this->year_of_construction =\Morilog\Jalali\Jalalian::now()->format('Y');
    }
    public function render()
    {
        return view('livewire.contract-of-sales.level2')
            ->layout('components.layouts.app');
    }
}
