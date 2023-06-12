<?php

namespace App\Http\Livewire\LeaseAgreements;

use App\Models\DetailsOfRental;
use App\Models\FinancialLease;
use App\Models\LeaseAgreement;
use Livewire\Component;

class SingleLevel4 extends Component
{
    public LeaseAgreement $leaseAgreement;
    public $lease;
    public $monthly_rental_amount;
    public $at_first='true';
    public $mortgage;
    public $rent;
    public $payment_type='نقد';
    public $cheque;
    public $bank;
    public $branch;
    public $deposit;
    public $msg;

    public $deposit_return_date;
    public $penalty_for_non_payment;
    public $penalty_for_non_return;
    public $at_first_string;

    public function mount()
    {
        $DetailsOfRental=DetailsOfRental::where('lease_agreement_id',$this->leaseAgreement->id);
        $FinancialLease=FinancialLease::where('lease_agreement_id',$this->leaseAgreement->id);
        if ($FinancialLease->count()==1 && $DetailsOfRental->count()==1 &&  $this->leaseAgreement->level>4){
            $DetailsOfRentalData=$DetailsOfRental->first();
            $FinancialLeaseData=$FinancialLease->first();
            $this->penalty_for_non_payment=$DetailsOfRentalData->penalty_for_non_payment;
            $this->penalty_for_non_return =$DetailsOfRentalData->penalty_for_non_return;
            $this->lease =$FinancialLeaseData->lease_amount;
            $this->monthly_rental_amount =$FinancialLeaseData->monthly_rental_amount;
            $this->at_first =$FinancialLeaseData->at_first;
            $this->at_first_string =($FinancialLeaseData->at_first)?'اول هر ماه':'آخر هر ماه';
            $this->mortgage =$FinancialLeaseData->mortgage;
            $this->rent =$FinancialLeaseData->rent;
            $this->payment_type =$FinancialLeaseData->payment_type;
            $this->bank =$FinancialLeaseData->bank;
            $this->branch =$FinancialLeaseData->branch;
            $this->cheque =$FinancialLeaseData->cheque;
            $this->deposit_return_date =$FinancialLeaseData->deposit_return_date;
            $this->deposit =$FinancialLeaseData->deposit;
        }else{
            redirect()->route('rents');
        }
    }

    public function render()
    {
        return view('livewire.lease-agreements.single-level4',['leaseAgreement'=>$this->leaseAgreement])
            ->layout('components.layouts.app');
    }
}
