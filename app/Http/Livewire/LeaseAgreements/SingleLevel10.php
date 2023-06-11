<?php

namespace App\Http\Livewire\LeaseAgreements;

use App\Models\DetailsOfRental;
use App\Models\LeaseAgreement;
use Livewire\Component;

class SingleLevel10 extends Component
{
    public LeaseAgreement $leaseAgreement;

    public $arbitration;
    public $msg='';

    public function mount()
    {
        $DetailsOfRental = DetailsOfRental::where('lease_agreement_id',$this->leaseAgreement->id)->first();
        if ($this->leaseAgreement->level>10){
            $this->arbitration=true;
        }else{
            redirect()->route('rents');
        }
    }
    public function render()
    {
        return view('livewire.lease-agreements.single-level10')
            ->layout('components.layouts.app');
    }
}
