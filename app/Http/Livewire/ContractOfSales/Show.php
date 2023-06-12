<?php

namespace App\Http\Livewire\ContractOfSales;

use App\Models\ContractOfSale;
use Livewire\Component;

class Show extends Component
{
    public ContractOfSale $contractOfSale;
    public $fileNumber;

    public function mount()
    {
        if ($this->contractOfSale->level>1){
            $this->fileNumber=$this->contractOfSale->file_number;
        }else{
            redirect()->route('sales');
        }
    }
    public function render()
    {
        return view('livewire.contract-of-sales.show',[
            'contractOfSale'=>$this->contractOfSale
        ])->layout('components.layouts.app');
    }
}
