<?php

namespace App\Http\Livewire\LeaseAgreements;

use App\Models\DetailsOfRental;
use App\Models\LeaseAgreement;
use Carbon\Carbon;
use Livewire\Component;

class SingleLevel3 extends Component
{
    public LeaseAgreement $leaseAgreement;
    public $rental_period;
    public $rental_period_type;

    public $from;
    public $until;


    public function mount()
    {
        $DetailsOfRental=DetailsOfRental::where('lease_agreement_id',$this->leaseAgreement->id);
        if ($DetailsOfRental->count()==1 &&  $this->leaseAgreement->level>3){
            $DetailsOfRentalData=$DetailsOfRental->first();
            $this->rental_period_type=$DetailsOfRentalData->rental_period_type;
            $this->rental_period =$DetailsOfRentalData->rental_period;
            $this->from =$DetailsOfRentalData->from;
            $this->until =$DetailsOfRentalData->until;
        }else{
            redirect()->route('rents');
        }
    }
    public function render()
    {
        return view('livewire.lease-agreements.single-level3',['leaseAgreement'=>$this->leaseAgreement])
            ->layout('components.layouts.app');
    }
}
