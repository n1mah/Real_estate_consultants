<?php

namespace App\Http\Livewire\LeaseAgreements;

use App\Models\FinancialLease;
use App\Models\LeaseAgreement;
use Livewire\Component;

class SingleLevel11 extends Component
{
    public LeaseAgreement $leaseAgreement;
    public $city;
    public $wage;
    public $amount_received_each;
    public $tax;
    public $total_received;

    public function CalcTotal(): void
    {
            $total=(($this->amount_received_each*2)+$this->wage);
            $this->total_received=((($total*$this->tax)/100)+$total);
    }

    public function mount()
    {
        $financial=FinancialLease::where('lease_agreement_id',$this->leaseAgreement->id);
        if ($this->leaseAgreement->level>11 && $financial->count()==1){
            $this->CalcTotal();
            $financialData=$financial->first();
            $this->city=$financialData->city;
            $this->wage=$financialData->wage;
            $this->amount_received_each=$financialData->amount_received_each;
            $this->tax=$financialData->tax;
            $total=(($this->amount_received_each*2)+$this->wage);
            $this->total_received=((($total*$this->tax)/100)+$total);
        }else{
            redirect()->route('rents');
        }
    }


    public function render()
    {
        return view('livewire.lease-agreements.single-level11',['leaseAgreement'=>$this->leaseAgreement])
            ->layout('components.layouts.app');
    }
}
