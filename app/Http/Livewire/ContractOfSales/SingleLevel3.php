<?php

namespace App\Http\Livewire\ContractOfSales;

use App\Models\ContractOfSale;
use App\Models\Financial;
use App\Models\PropertyDetails;
use Livewire\Component;

class SingleLevel3 extends Component
{
    public ContractOfSale $contractOfSale;

    public $total;
    public $purchase_price;
    public $debt_balance;
    public $deposit;
    public $msg;
    public $payment_type;
    public $bank;
    public $branch;
    public $cheque;

    public function mount()
    {
        $PropertyDetails=PropertyDetails::where('contract_of_sale_id',$this->contractOfSale->id);
        $financial=Financial::where('contract_of_sale_id',$this->contractOfSale->id);
        if ($financial->count()==1 && $PropertyDetails->count()==1 && $this->contractOfSale->level>3){
            $financialData=$financial->first();
            $PropertyDetailsData=$PropertyDetails->first();
            $this->total=$PropertyDetailsData->price_per_meter * $PropertyDetailsData->house_area;
            $this->bank =$financialData->bank;
            $this->branch =$financialData->branch;
            $this->payment_type =$financialData->payment_type;
            $this->deposit =$financialData->deposit;
            $this->cheque =$financialData->cheque;
            $this->purchase_price =$financialData->purchase_price;
            $this->debt_balance=$this->purchase_price-$this->deposit;
        }else{
            redirect()->route('sales');
        }
    }
    public function render()
    {
        return view('livewire.contract-of-sales.single-level3',['contractOfSale'=>$this->contractOfSale])
            ->layout('components.layouts.app');

    }
}
