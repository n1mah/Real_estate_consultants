<?php

namespace App\Http\Livewire\ContractOfSales;

use App\Models\ContractOfSale;
use App\Models\DetailsOfContracts;
use Livewire\Component;

class SingleLevel4 extends Component
{
    public ContractOfSale $contractOfSale;
    public $set_time=null;
    public $notary_public;
//
    public function mount()
    {
        $DetailsOfContracts=DetailsOfContracts::where('contract_of_sale_id',$this->contractOfSale->id);
        if ($DetailsOfContracts->count()==1 && $this->contractOfSale->level>4){
            $DetailsOfContractsData=$DetailsOfContracts->first();
            $this->set_time=$DetailsOfContractsData->set_time;
            $this->notary_public=$DetailsOfContractsData->notary_public;
            }else{
            redirect()->route('sales');
        }
    }
    public function render()
    {
        return view('livewire.contract-of-sales.single-level4',['contractOfSale'=>$this->contractOfSale])
            ->layout('components.layouts.app');
    }
}
