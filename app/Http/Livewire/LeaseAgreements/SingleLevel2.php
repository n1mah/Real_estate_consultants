<?php

namespace App\Http\Livewire\LeaseAgreements;

use App\Models\LeaseAgreement;
use App\Models\RentalPropertyDetails;
use Livewire\Component;

class SingleLevel2 extends Component
{
    public LeaseAgreement $leaseAgreement;
    public $membership_right=[];

    public $entirety;
    public $title;
    public $type_of_lease;
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

    public function mount()
    {
        $RentalPropertyDetails = RentalPropertyDetails::where('lease_agreement_id',$this->leaseAgreement->id);
        if ($RentalPropertyDetails->count()==1 && $this->leaseAgreement->level>2){
            $RentalPropertyDetailsData=$RentalPropertyDetails->first();
            $this->entirety =$RentalPropertyDetailsData->entirety;
            $this->type_of_lease =$RentalPropertyDetailsData->type_of_lease;
            $this->title =$RentalPropertyDetailsData->type_of_lease;
            $this->address =$RentalPropertyDetailsData->address;
            $this->house_number =$RentalPropertyDetailsData->house_number;
            $this->sub_part_address =$RentalPropertyDetailsData->sub_part_address;
            $this->main_part_address =$RentalPropertyDetailsData->main_part_address;
            $this->part =$RentalPropertyDetailsData->part;
            $this->house_area =$RentalPropertyDetailsData->house_area;
            $this->title_deeds_number =$RentalPropertyDetailsData->title_deeds_number;
            $this->name =$RentalPropertyDetailsData->name;
            $this->bedroom =$RentalPropertyDetailsData->bedroom;
            $this->membership_right =json_decode($RentalPropertyDetailsData->membership_right) ;
            $this->parking =$RentalPropertyDetailsData->parking;
            $this->warehouse =$RentalPropertyDetailsData->warehouse;
            $this->telephone =$RentalPropertyDetailsData->telephone;
            $this->postal_code =$RentalPropertyDetailsData->postal_code;
        }else{
            redirect()->route('rents');
        }
    }
    public function render()
    {
        return view('livewire.lease-agreements.single-level2')
            ->layout('components.layouts.app');

    }
}
