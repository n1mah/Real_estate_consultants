<?php

namespace App\Http\Livewire\LeaseAgreements;

use App\Models\LeaseAgreement;
use Carbon\Carbon;
use Livewire\Component;

class Level12 extends Component
{
    public LeaseAgreement $leaseAgreement;
    public $user_id;
    public $user_manager;
    public $user_address;
    public $user_membership_number;
    public $signature_date;
    public $signature_hour=12;
    public $signature_minutes=0;
    protected $rules = [
        'signature_date' => 'required',
        'signature_hour' => 'required',
        'user_id' => 'required',
    ];

    protected $messages = [
        'signature_date.required' => 'تاریخ امضا و مبادله قرارداد را وارد کنید',
        'signature_hour.required' => 'ساعت امضا و مبادله قرارداد را مشخص کنید',
        'user_id.required' => 'کاربر نامشخص است',
    ];

    public function mount(){
        $this->signature_date=time();
        $user=auth()->user();
        $this->user_id=($user->id)?($user->id):null;
        $this->user_address=($user->address)?($user->address):null;
        $this->user_membership_number=($user->membership_number)?($user->membership_number):null;
        $this->user_manager=($user->manager)?($user->manager):null;
    }

    public function Checker($data):bool{
        if (!empty($data) && $data!=null && trim($data)!=""){
            return true;
        }
        return false;
    }
    public function create()
    {
        $this->validate();
        if ($this->Checker($this->signature_date) &&
            $this->Checker($this->signature_hour) &&
            $this->Checker($this->user_id)){
                $this->leaseAgreement->signature_date=(Carbon::createFromTimestamp($this->signature_date, 'Asia/Tehran')->format('y/m/d').' 12:00:00');
                $this->leaseAgreement->signature_hour=$this->signature_hour;
                $this->leaseAgreement->signature_minutes=$this->signature_minutes;
                $this->leaseAgreement->user_id=$this->user_id;
                $this->leaseAgreement->level=13;
                $this->leaseAgreement->save();
                redirect()->route('rent.level13',['leaseAgreement'=>$this->leaseAgreement]);
        }else{
            $this->msg='داده ها را با دقت وارد کنید';
        }
    }
    public function render()
    {
        return view('livewire.lease-agreements.level12')
            ->layout('components.layouts.app');
    }
}
