<?php

namespace App\Http\Livewire\LeaseAgreements;

use App\Models\DetailsOfRental;
use App\Models\LeaseAgreement;
use Livewire\Component;

class SingleLevel5 extends Component
{
    public LeaseAgreement $leaseAgreement;
    public $delivery_time;
    public $penalty_for_non_delivery;

    public function mount()
    {
        $DetailsOfRental=DetailsOfRental::where('lease_agreement_id',$this->leaseAgreement->id);
        if ($DetailsOfRental->count()==1 &&  $this->leaseAgreement->level>5){
            $DetailsOfRentalData=$DetailsOfRental->first();
            $this->delivery_time=$DetailsOfRentalData->delivery_time;
            $this->penalty_for_non_delivery =$DetailsOfRentalData->penalty_for_non_delivery;
        }else{
            redirect()->route('rents');
        }
    }
    public function render()
    {
        return view('livewire.lease-agreements.single-level5',['leaseAgreement'=>$this->leaseAgreement])
            ->layout('components.layouts.app');
    }
}
