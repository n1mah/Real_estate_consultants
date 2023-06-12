<?php

namespace App\Http\Livewire\LeaseAgreements;

use App\Models\LeaseAgreement;
use Livewire\Component;

class SingleLevel7 extends Component
{

    public LeaseAgreement $leaseAgreement;
    public function mount()
    {
        if ($this->leaseAgreement->level>7){

        }else{
            redirect()->route('rents');
        }
    }
    public function render()
    {
        return view('livewire.lease-agreements.single-level7',['leaseAgreement'=>$this->leaseAgreement])
            ->layout('components.layouts.app');

    }
}
