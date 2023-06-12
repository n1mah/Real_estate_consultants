<?php

namespace App\Http\Livewire\ContractOfSales;

use App\Models\ContractOfSale;
use App\Models\User;
use Livewire\Component;

class SingleLevel9 extends Component
{
    public ContractOfSale $contractOfSale;
    public $user_id;
    public $user_manager;
    public $user_address;
    public $user_membership_number;
    public $signature_date;
    public $signature_hour;
    public $signature_minutes;

    public function mount(){
        if ($this->contractOfSale->level>9){
            $user=User::where('id',$this->contractOfSale->user_id)->first();
            $this->user_id=$user->id;
            $this->user_address=$user->address;
            $this->user_membership_number=$user->membership_number;
            $this->user_manager=$user->manager;
            $this->signature_date=$this->contractOfSale->signature_date;
            $this->signature_hour=$this->contractOfSale->signature_hour;
            $this->signature_minutes=$this->contractOfSale->signature_minutes;
        }else{
            redirect()->route('sales');
        }
    }

    public function render()
    {
        return view('livewire.contract-of-sales.single-level9',['contractOfSale'=>$this->contractOfSale])
            ->layout('components.layouts.app');
    }
}
