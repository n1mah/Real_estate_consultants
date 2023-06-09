<?php

namespace App\Http\Livewire\ContractOfSales;

use App\Models\ContractOfSale;
use Livewire\Component;

class Level8 extends Component
{
    public ContractOfSale $contractOfSale;
    public $city;
    public $wage;
    public $amount_received_each;
    public $tax;
    public $total_received;
    public function mount(){
        $user=auth()->user();
        $this->city=($user->city)?($user->city):null;
        $this->wage=($user->default_wage)?($user->default_wage):null;
        $this->tax=($user->default_tax)?($user->default_tax):null;
    }
    public function render()
    {
        return view('livewire.contract-of-sales.level8')
            ->layout('components.layouts.app');

    }
}
