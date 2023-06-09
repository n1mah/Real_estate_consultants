<?php

namespace App\Http\Livewire\LeaseAgreements;

use App\Models\LeaseAgreement;
use Livewire\Component;

class SingleLevel13 extends Component
{

    public LeaseAgreement $leaseAgreement;
    public $comment;

    public function mount(){
        if ($this->leaseAgreement->level>13){
            $this->comment=$this->leaseAgreement->comment;
        }else{
            redirect()->route('rents');
        }
    }
    public function render()
    {
        return view('livewire.lease-agreements.single-level13',['leaseAgreement'=>$this->leaseAgreement])
            ->layout('components.layouts.app');
    }
}
