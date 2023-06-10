<?php

namespace App\Http\Livewire\ContractOfSales;

use App\Models\ContractOfSale;
use Carbon\Carbon;
use Livewire\Component;

class Level10 extends Component
{ public ContractOfSale $contractOfSale;
    public $comment;
    public function create()
    {
            $this->contractOfSale->comment=$this->comment;
            $this->contractOfSale->level=11;
            $this->contractOfSale->save();
            redirect()->route("sales");
    }
    public function render()
    {
        return view('livewire.contract-of-sales.level10')
            ->layout('components.layouts.app');
    }

}
