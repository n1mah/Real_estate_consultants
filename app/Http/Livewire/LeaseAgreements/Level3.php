<?php

namespace App\Http\Livewire\LeaseAgreements;

use App\Models\DetailsOfRental;
use App\Models\LeaseAgreement;
use Carbon\Carbon;
use Livewire\Component;

class Level3 extends Component
{
    public LeaseAgreement $leaseAgreement;
    public $rental_period=12;
    public $rental_period_type='ماه';

    public $from;
    public $until;

    public function Checker($data):bool{
        if (!empty($data) && $data!=null && trim($data)!=""){
            return true;
        }
        return false;
    }

    public function create()
    {
//        $this->validate();
        if ($this->Checker($this->from) && $this->Checker($this->until) && $this->Checker($this->rental_period_type) && $this->Checker($this->rental_period)){
            DetailsOfRental::create(
                [
                    'lease_agreement_id'=>$this->leaseAgreement->id,
                    'rental_period_type'=>$this->rental_period_type,
                    'rental_period'=>$this->rental_period,
                    'from'=>(Carbon::createFromTimestamp($this->from, 'Asia/Tehran')->format('y/m/d').' 12:00:00'),
                    'until'=>(Carbon::createFromTimestamp($this->until, 'Asia/Tehran')->format('y/m/d').' 12:00:00'),
                ]
            );
            $this->leaseAgreement->level=4;
            $this->leaseAgreement->save();
            redirect()->route('rent.level4',['leaseAgreement'=>$this->leaseAgreement]);
        }
    }

    public function render()
    {
        return view('livewire.lease-agreements.level3')
            ->layout('components.layouts.app');
    }
}
