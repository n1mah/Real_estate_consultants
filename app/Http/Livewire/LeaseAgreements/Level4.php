<?php

namespace App\Http\Livewire\LeaseAgreements;

use App\Models\DetailsOfRental;
use App\Models\FinancialLease;
use App\Models\LeaseAgreement;
use Carbon\Carbon;
use Livewire\Component;

class Level4 extends Component
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


    protected $rules = [
        'lease' => 'required',
        'monthly_rental_amount' => 'required',
        'at_first' => 'required',
        'mortgage' => 'required',
        'rent' => 'required',
        'payment_type' => 'required',
        'deposit' => 'required',
        'deposit_return_date' => 'required',
        'penalty_for_non_payment' => 'required',
        'penalty_for_non_return' => 'required',
    ];

    protected $messages = [
        'lease.required' => ' میزان اجاره بها را وارد کنید',
        'monthly_rental_amount.required' => ' اجاره ماهیانه را وارد کنید',
        'at_first.required' => ' زمان دریافت اجاره ماهیانه را مشخص کنید',
        'mortgage.required' => ' مبلغ قرض الحسنه توافقی (رهن) را وارد کنید',
        'rent.required' => ' بیعانه مبلغ قرض الحسنه توافقی (رهن) را وارد کنید',
        'payment_type.required' => ' نوع پرداخت مابقی رهن را مشخص کنید',
        'deposit.required' => ' باقیمانده را مشخص کنید',
        'deposit_return_date.required' => ' تاریخ پرداخت باقیمانده مبلغ قرض الحسنه (رهن) را وارد کنید',
        'penalty_for_non_payment.required' => ' خسارت عدم پرداخت/وصول باقیمانده مبلغ قرض الحسنه (رهن) را وارد کنید',
        'penalty_for_non_return.required' => ' خسارت استنکاف موجر در استرداد رهن به طور روزانه را وارد کنید',
    ];


    public function updatedMortgage()
    {
        if ($this->rent=="" || $this->rent==null  || empty($this->rent)){
            $this->rent=null;
        }else{
            if (!($this->mortgage=="" || $this->mortgage==null  || empty($this->mortgage))){
                if ($this->rent>$this->mortgage){
                    $this->rent=(int)($this->rent/10);
                    $this->deposit=$this->mortgage-$this->rent;
                }else{
                    $this->deposit=$this->mortgage-$this->rent;

                }
            }
        }
    }
    public function updatedRent()
    {
        if ($this->mortgage=="" || $this->mortgage==null  || empty($this->mortgage)){
            $this->mortgage=null;
        }else{
            if (!($this->rent=="" || $this->rent==null  || empty($this->rent))){
                if ($this->rent>$this->mortgage){
                    $this->rent=(int)($this->rent/10);
                    $this->deposit=$this->mortgage-$this->rent;
                }else{
                    $this->deposit=$this->mortgage-$this->rent;

                }
            }
        }
    }

    public function mount()
    {
        $DetailsOfRental=DetailsOfRental::where('lease_agreement_id',$this->leaseAgreement->id);
        if ($DetailsOfRental->count()!=1) {
            redirect()->route("rents");
        }
    }
    public function create()
    {
        $this->validate();
        if (!($this->mortgage=="" || $this->mortgage==null  || empty($this->mortgage))){
            $this->msg['mortgage']='';
            if (!($this->rent=="" || $this->rent==null  || empty($this->rent))){
                $this->msg['rent']='';
                $DetailsOfRental=DetailsOfRental::where('lease_agreement_id',$this->leaseAgreement->id);
                if ($DetailsOfRental->count()==1) {
                    $DetailsOfRentalData=$DetailsOfRental->first();
                    $DetailsOfRentalData->penalty_for_non_payment=$this->penalty_for_non_payment;
                    $DetailsOfRentalData->penalty_for_non_return=$this->penalty_for_non_return;
                    $DetailsOfRentalData->save();
                }else{
                    redirect()->route("rents");
                }
                FinancialLease::create([
                    'lease_agreement_id'=>$this->leaseAgreement->id,
                    'lease_amount'=>$this->lease,
                    'monthly_rental_amount'=>$this->monthly_rental_amount,
                    'at_first'=>($this->at_first=='true')?true:false,
                    'mortgage'=>$this->mortgage,
                    'rent'=>$this->rent,
                    'payment_type'=>$this->payment_type,
                    'bank'=>$this->bank,
                    'branch'=>$this->branch,
                    'cheque'=>$this->cheque,
                    'deposit_return_date'=>(Carbon::createFromTimestamp($this->deposit_return_date, 'Asia/Tehran')->format('y/m/d').' 12:00:00'),
                    'deposit'=>$this->deposit,
                ]);
                $this->leaseAgreement->level=5;
                $this->leaseAgreement->save();
                redirect()->route('rent.level5',['leaseAgreement'=>$this->leaseAgreement]);
            }else{
                $this->msg['rent']='بیعانه رهن  را وارد کنید';
            }
        }else{
            $this->msg['mortgage']='مبلغ رهن را وارد کنید';
        }
    }
    public function render()
    {
        return view('livewire.lease-agreements.level4')
            ->layout('components.layouts.app');
    }
}
