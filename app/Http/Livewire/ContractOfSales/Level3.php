<?php

namespace App\Http\Livewire\ContractOfSales;

use App\Models\ContractOfSale;
use Livewire\Component;

class Level3 extends Component
{
    public ContractOfSale $contractOfSale;
    public $total;
    public $purchase_price;
    public $deposit;
    public $payment_type='نقد';

    public function mount()
    {
       $this->total =  $this->contractOfSale->properies_detail()->orderBy('id','desc')->first()->price_per_meter * $this->contractOfSale->properies_detail()->orderBy('id','desc')->first()->house_area;
       $this->payment_type='نقد';
    }

    public function updatePurchasePrice()
    {
        if ($this->purchase_price=="" || $this->purchase_price==null  || empty($this->purchase_price)){
            $this->purchase_price=0;
        }
    }

    public function render()
    {
        return view('livewire.contract-of-sales.level3')
            ->layout('components.layouts.app');
    }
}
