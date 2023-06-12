<?php

namespace App\Http\Livewire\LeaseAgreements;

use App\Models\LeaseAgreement;
use Livewire\Component;

class SingleLevel10 extends Component
{
    public LeaseAgreement $leaseAgreement;

    public $arbitration;
    public $msg='';

    public function mount()
    {
        if ($this->leaseAgreement->level>10){
            $this->arbitration=true;
        }else{
            redirect()->route('rents');
        }
    }
    public function render()
    {
        return view('livewire.lease-agreements.single-level10',['leaseAgreement'=>$this->leaseAgreement])
            ->layout('components.layouts.app');
    }
}
