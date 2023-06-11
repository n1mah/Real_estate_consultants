<?php

namespace App\Http\Livewire\LeaseAgreements;

use App\Models\DetailsOfRental;
use App\Models\LeaseAgreement;
use Carbon\Carbon;
use Livewire\Component;

class Level5 extends Component
{
    public LeaseAgreement $leaseAgreement;

    public $delivery_time;
    public $penalty_for_non_delivery;


    protected $rules = [
        'delivery_time' => 'required',
        'penalty_for_non_delivery' => 'required',
    ];

    protected $messages = [
        'delivery_time.required' => ' تاریخ تحویل مورداجاره به مستاجر/مستاجرین را انتخاب کنید',
        'penalty_for_non_delivery.required' => ' خسارت عدم تحویل مورداجاره به مستاجر/مستاجرین را وارد کنید',
    ];

    public function mount()
    {
        $DetailsOfRental=DetailsOfRental::where('lease_agreement_id',$this->leaseAgreement->id);
        if ($DetailsOfRental->count()!=1 || $this->leaseAgreement->level<5) {
            redirect()->route("rents");
        }
    }

    public function create()
    {
        $this->validate();
        $DetailsOfRental=DetailsOfRental::where('lease_agreement_id',$this->leaseAgreement->id);
        if ($DetailsOfRental->count()==1) {
            $DetailsOfRentalData=$DetailsOfRental->first();
            $DetailsOfRentalData->delivery_time=(Carbon::createFromTimestamp($this->delivery_time, 'Asia/Tehran')->format('y/m/d').' 12:00:00');
            $DetailsOfRentalData->penalty_for_non_delivery=$this->penalty_for_non_delivery;
            $DetailsOfRentalData->save();
            $this->leaseAgreement->level=6;
            $this->leaseAgreement->save();
            redirect()->route("rents");
        }else{
            redirect()->route("rents");
        }
    }

    public function render()
    {
        return view('livewire.lease-agreements.level5')
            ->layout('components.layouts.app');
    }
}
