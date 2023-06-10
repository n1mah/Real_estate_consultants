<?php

namespace App\Http\Livewire\ContractOfSales;

use App\Models\ContractOfSale;
use App\Models\User;
use Livewire\Component;

class SingleLevel10 extends Component
{
    public ContractOfSale $contractOfSale;
    public $comment;


    public function mount(){


        if ($this->contractOfSale->level>10){


            $this->comment=$this->contractOfSale->comment;

//            $total=(($this->amount_received_each*2)+$this->wage);
//            $this->total_received=((($total*$this->tax)/100)+$total);
        }else{
            redirect()->route('sales');
        }

    }
    public function render()
    {
        return view('livewire.contract-of-sales.single-level10')
            ->layout('components.layouts.app');
    }
}
