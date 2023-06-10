<?php

namespace App\Http\Livewire\ContractOfSales;

use App\Models\ContractOfSale;
use App\Models\DetailsOfContracts;
use Livewire\Component;

class SingleLevel6 extends Component
{
    public ContractOfSale $contractOfSale;
    public $damages_for_non_fulfillment_of_obligations;
    public $contract_costs;
    public $seller_delayed_payment_fine;
    public $buyer_delayed_payment_fine;
    public function mount()
    {
        $DetailsOfContracts=DetailsOfContracts::where('contract_of_sale_id',$this->contractOfSale->id);
        if ($DetailsOfContracts->count()==1){
            $DetailsOfContractsData=$DetailsOfContracts->first();
            $this->damages_for_non_fulfillment_of_obligations=$DetailsOfContractsData->damages_for_non_fulfillment_of_obligations;
            $this->contract_costs=$DetailsOfContractsData->contract_costs;
            $this->buyer_delayed_payment_fine=$DetailsOfContractsData->buyer_delayed_payment_fine;
            $this->seller_delayed_payment_fine=$DetailsOfContractsData->seller_delayed_payment_fine;
        }else{
            redirect()->route('sales');
        }
    }
    public function render()
    {
        return view('livewire.contract-of-sales.single-level6')
            ->layout('components.layouts.app');
    }
}
