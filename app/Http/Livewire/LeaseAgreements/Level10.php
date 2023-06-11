<?php

namespace App\Http\Livewire\LeaseAgreements;

use App\Models\DetailsOfRental;
use App\Models\LeaseAgreement;
use Livewire\Component;

class Level10 extends Component
{
    public LeaseAgreement $leaseAgreement;

    public $arbitration=false;
    public $msg='';

    public function mount()
    {
        if ($this->leaseAgreement->level>9){

        }else{
            redirect()->route('rents');
        }
    }
    public function create()
    {
        if ($this->arbitration) {
            $DetailsOfRental = DetailsOfRental::where('lease_agreement_id',$this->leaseAgreement->id)->first();
            $DetailsOfRental->arbitration = true;
            $DetailsOfRental->save();
            $this->leaseAgreement->level=11;
            $this->leaseAgreement->save();
            redirect()->route("rents");
        } else {
            $this->msg = 'برای تکمیل قرارداد اجاره باید شرط داوری پذیرفته شود';
        }
    }


    public function render()
    {
        return view('livewire.lease-agreements.level10')
            ->layout('components.layouts.app');
    }
}
