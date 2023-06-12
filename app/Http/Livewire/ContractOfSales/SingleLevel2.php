<?php

namespace App\Http\Livewire\ContractOfSales;

use App\Models\ContractOfSale;
use App\Models\PropertyDetails;
use Livewire\Component;

class SingleLevel2 extends Component
{
    public ContractOfSale $contractOfSale;

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
    public $telephone;
    public $total;

    public function mount()
    {

        $PropertyDetails = PropertyDetails::where('contract_of_sale_id',$this->contractOfSale->id);
        if ($PropertyDetails->count()==1 && $this->contractOfSale->level>2){
            $this->year_of_construction =$PropertyDetails->first()->year_of_construction;
            $this->membership_right =json_decode($PropertyDetails->first()->membership_right) ;
            $this->title_deeds =$PropertyDetails->first()->title_deeds;
            $this->entirety =$PropertyDetails->first()->entirety;
            $this->arena_and_nobles =$PropertyDetails->first()->arena_and_nobles;
            $this->house_number =$PropertyDetails->first()->house_number;
            $this->sub_part_address =$PropertyDetails->first()->sub_part_address;
            $this->main_part_address =$PropertyDetails->first()->main_part_address;
            $this->part =$PropertyDetails->first()->part;
            $this->registration_area =$PropertyDetails->first()->registration_area;
            $this->house_area =$PropertyDetails->first()->house_area;
            $this->price_per_meter =$PropertyDetails->first()->price_per_meter;
            $this->parking =$PropertyDetails->first()->parking;
            $this->warehouse =$PropertyDetails->first()->warehouse;
            $this->title_deeds_number =$PropertyDetails->first()->title_deeds_number;
            $this->address =$PropertyDetails->first()->address;
            $this->postal_code =$PropertyDetails->first()->postal_code;
            $this->telephone =$PropertyDetails->first()->telephone;
            if (!empty($this->house_area) && !empty($this->price_per_meter)){
                $this->total =$this->house_area * $this->price_per_meter;
            }else{
                $this->total = 0;
            }
        }else{
            redirect()->route('sales');
        }
    }
    public function render()
    {
        return view('livewire.contract-of-sales.single-level2',['contractOfSale'=>$this->contractOfSale])
            ->layout('components.layouts.app');
    }
}
