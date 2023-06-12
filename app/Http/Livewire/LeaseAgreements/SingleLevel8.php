<?php

namespace App\Http\Livewire\LeaseAgreements;

use App\Models\LeaseAgreement;
use Livewire\Component;

class SingleLevel8 extends Component
{
    public LeaseAgreement $leaseAgreement;
    public function mount()
    {
        if ($this->leaseAgreement->level>8){

        }else{
            redirect()->route('rents');
        }
    }
    public function render()
    {
        return view('livewire.lease-agreements.single-level8',['leaseAgreement'=>$this->leaseAgreement])
            ->layout('components.layouts.app');
    }
}
