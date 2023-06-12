<?php

namespace App\Http\Livewire\LeaseAgreements;

use App\Models\LeaseAgreement;
use App\Models\User;
use Livewire\Component;

class SingleLevel12 extends Component
{
    public LeaseAgreement $leaseAgreement;

    public $user_id;
    public $user_manager;
    public $user_address;
    public $user_membership_number;
    public $signature_date;
    public $signature_hour;
    public $signature_minutes;

    public function mount(){
        if ($this->leaseAgreement->level>11){
            $user=User::where('id',$this->leaseAgreement->user_id)->first();
            $this->user_id=$user->id;
            $this->user_address=$user->address;
            $this->user_membership_number=$user->membership_number;
            $this->user_manager=$user->manager;
            $this->signature_date=$this->leaseAgreement->signature_date;
            $this->signature_hour=$this->leaseAgreement->signature_hour;
            $this->signature_minutes=$this->leaseAgreement->signature_minutes;
        }else{
            redirect()->route('rents');
        }

    }
    public function render()
    {
        return view('livewire.lease-agreements.single-level12')
            ->layout('components.layouts.app');
    }
}
