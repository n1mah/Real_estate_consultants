<?php

namespace App\Http\Livewire\ContractOfSales;

use App\Models\ContractOfSale;
use App\Models\DetailsOfContracts;
use Livewire\Component;

class SingleLevel7 extends Component
{
    public ContractOfSale $contractOfSale;
    public $arbitration;

    public function mount()
    {
        $DetailsOfContracts=DetailsOfContracts::where('contract_of_sale_id',$this->contractOfSale->id);
        if ($DetailsOfContracts->count()==1){
            $DetailsOfContractsData=$DetailsOfContracts->first();
            $this->arbitration=$DetailsOfContractsData->arbitration;
        }else{
            redirect()->route('sales');
        }
    }
    public function render()
    {
        return view('livewire.contract-of-sales.single-level7')
            ->layout('components.layouts.app');
    }
}
