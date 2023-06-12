<?php

namespace App\Http\Livewire\ContractOfSales;

use App\Models\ContractOfSale;
use Livewire\Component;

class SingleLevel10 extends Component
{
    public ContractOfSale $contractOfSale;
    public $comment;

    public function mount(){


        if ($this->contractOfSale->level>10){
            $this->comment=$this->contractOfSale->comment;
        }else{
            redirect()->route('sales');
        }
    }
    public function render()
    {
        return view('livewire.contract-of-sales.single-level10',['contractOfSale'=>$this->contractOfSale])
            ->layout('components.layouts.app');
    }
}
