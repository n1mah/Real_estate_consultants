<?php

namespace App\Http\Livewire\ContractOfSales;

use App\Models\ContractOfSale;
use Livewire\Component;

class Level2 extends Component
{
    public $checkPhoneStatus=0;
    public $gas_status;
    public $phone_status;
    public $shoo_status;
    public $contractOfSale;

    public $properties=[];
    public $membership_right=[];

    public $title_deeds;
    public $entirety;
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
    public $phone;
    public $total=0;
    public $title_deeds_check=false;
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
        $this->title_deeds_check=($this->title_deeds=="دارا")?true:false;
    }
    protected $listeners = [
        'checkPhone',
        'save'
        ];

    public function searchItemInArray(string $value,array $array):null|int{
        if (in_array($value,$array)) {
            if (($key = array_search($value, $array)) !== false) {
                return $key;
            }
        }
        return null;
    }


    public function save()
    {
        dd(1);
    }
    public function checkPhone($status)
    {
        $this->phone_status=$status;
    }

    public function mount(ContractOfSale $contractOfSale)
    {
        $this->contractOfSale = $contractOfSale;
    }
    public function render()
    {
        return view('livewire.contract-of-sales.level2')
            ->layout('components.layouts.app');
    }
}
