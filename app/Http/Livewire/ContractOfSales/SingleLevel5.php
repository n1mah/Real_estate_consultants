<?php

namespace App\Http\Livewire\ContractOfSales;

use App\Models\ContractOfSale;
use App\Models\DetailsOfContracts;
use Livewire\Component;

class SingleLevel5 extends Component
{
    public ContractOfSale $contractOfSale;
    public $delivery_time;
    public $loss_of_no_sale;
    public function mount()
    {
        $DetailsOfContracts=DetailsOfContracts::where('contract_of_sale_id',$this->contractOfSale->id);
        if ($DetailsOfContracts->count()==1 && $this->contractOfSale->level>5){
            $DetailsOfContractsData=$DetailsOfContracts->first();
            $this->delivery_time=$DetailsOfContractsData->delivery_time;
            $this->loss_of_no_sale=$DetailsOfContractsData->loss_of_no_sale;
        }else{
            redirect()->route('sales');
        }
    }
    public function render()
    {
        return view('livewire.contract-of-sales.single-level5',['contractOfSale'=>$this->contractOfSale])
            ->layout('components.layouts.app');

    }
}
