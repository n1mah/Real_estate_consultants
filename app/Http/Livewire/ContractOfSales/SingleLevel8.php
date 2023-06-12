<?php

namespace App\Http\Livewire\ContractOfSales;

use App\Models\ContractOfSale;
use App\Models\Financial;
use Livewire\Component;

class SingleLevel8 extends Component
{
    public ContractOfSale $contractOfSale;

    public $city;
    public $wage;
    public $amount_received_each;
    public $tax;
    public $total_received;

    public function mount(){
        $financial=Financial::where('contract_of_sale_id',$this->contractOfSale->id);
        if ($financial->count()==1 && $this->contractOfSale->level>8){
            $financialData=$financial->first();
            $this->amount_received_each =$financialData->amount_received_each;
            $this->city=$financialData->city;
            $this->wage=$financialData->wage;
            $this->tax=$financialData->tax;
            $total=(($this->amount_received_each*2)+$this->wage);
            $this->total_received=((($total*$this->tax)/100)+$total);
        }else{
            redirect()->route('sales');
        }
    }
    public function render()
    {
        return view('livewire.contract-of-sales.single-level8',['contractOfSale'=>$this->contractOfSale])
            ->layout('components.layouts.app');
    }
}
