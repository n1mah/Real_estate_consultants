<?php

namespace App\Http\Livewire\LeaseAgreements;

use App\Models\DetailsOfRental;
use App\Models\LeaseAgreement;
use Carbon\Carbon;
use Livewire\Component;

class Level6 extends Component
{
    public LeaseAgreement $leaseAgreement;
    public $others;
    public $damages_for_non_fulfillment_of_obligations;
    public $penalty_for_non_evacuation;
    protected $rules = [
        'others' => 'required',
        'damages_for_non_fulfillment_of_obligations' => 'required',
        'penalty_for_non_evacuation' => 'required',
    ];

    protected $messages = [
        'others.required' => ' حق انتقال و واگذاری مورد اجاره به غیر را وارد کنید',
        'damages_for_non_fulfillment_of_obligations.required' => ' خسارت عدم انجام تعهدات مستاجر (تنفیذ مستاجر) را وارد کنید',
        'penalty_for_non_evacuation.required' => ' جریمه عدم تسلیم (مورداجاره) توسط مستاجر ( به صورت روزانه ) را وارد کنید',
    ];

    public function mount()
    {
        $DetailsOfRental=DetailsOfRental::where('lease_agreement_id',$this->leaseAgreement->id);
        if ($DetailsOfRental->count()!=1 || $this->leaseAgreement->level<6) {
            redirect()->route("rents");
        }
    }

    public function create()
    {
        $this->validate();
        $DetailsOfRental=DetailsOfRental::where('lease_agreement_id',$this->leaseAgreement->id);
        if ($DetailsOfRental->count()==1) {
            $DetailsOfRentalData=$DetailsOfRental->first();
            $DetailsOfRentalData->others=$this->others;
            $DetailsOfRentalData->damages_for_non_fulfillment_of_obligations=$this->damages_for_non_fulfillment_of_obligations;
            $DetailsOfRentalData->penalty_for_non_evacuation=$this->penalty_for_non_evacuation;
            $DetailsOfRentalData->save();
            $this->leaseAgreement->level=7;
            $this->leaseAgreement->save();
            redirect()->route("rents");
        }else{
            redirect()->route("rents");
        }
    }
    public function render()
    {
        return view('livewire.lease-agreements.level6')
            ->layout('components.layouts.app');
    }
}
