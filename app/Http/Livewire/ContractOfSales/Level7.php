<?php

namespace App\Http\Livewire\ContractOfSales;

use App\Models\ContractOfSale;
use Livewire\Component;

class Level7 extends Component
{
    public ContractOfSale $contractOfSale;
    public $arbitration=false;
    public $msg='';

    public function create()
    {
        if ($this->arbitration){
                $DetailsOfContracts=$this->contractOfSale->details_of_contract()->get()->first();
                $DetailsOfContracts->arbitration=true;
                $DetailsOfContracts->save();
                $this->contractOfSale->level=8;
                $this->contractOfSale->save();
            redirect()->route('sales.level8',['contractOfSale'=>$this->contractOfSale]);
        }else{
                $this->msg='برای تکمیل قرارداد باید شرط داوری پذیرفته شود';
        }
    }

    public function render()
    {
        return view('livewire.contract-of-sales.level7')
            ->layout('components.layouts.app');
    }
}
