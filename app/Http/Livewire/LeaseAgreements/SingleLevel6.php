<?php

namespace App\Http\Livewire\LeaseAgreements;

use App\Models\DetailsOfRental;
use App\Models\LeaseAgreement;
use Livewire\Component;

class SingleLevel6 extends Component
{
    public LeaseAgreement $leaseAgreement;
    public $others;
    public $damages_for_non_fulfillment_of_obligations;
    public $penalty_for_non_evacuation;

    public function mount()
    {
        $DetailsOfRental=DetailsOfRental::where('lease_agreement_id',$this->leaseAgreement->id);
        if ($DetailsOfRental->count()==1 &&  $this->leaseAgreement->level>6){
            $DetailsOfRentalData=$DetailsOfRental->first();
            $this->others=$DetailsOfRentalData->others;
            $this->damages_for_non_fulfillment_of_obligations=$DetailsOfRentalData->damages_for_non_fulfillment_of_obligations;
            $this->penalty_for_non_evacuation =$DetailsOfRentalData->penalty_for_non_evacuation;
        }else{
            redirect()->route('rents');
        }
    }
    public function render()
    {
        return view('livewire.lease-agreements.single-level6',['leaseAgreement'=>$this->leaseAgreement])
            ->layout('components.layouts.app');
    }
}
