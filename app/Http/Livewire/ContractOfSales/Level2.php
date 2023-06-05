<?php

namespace App\Http\Livewire\ContractOfSales;

use App\Models\ContractOfSale;
use Livewire\Component;

class Level2 extends Component
{
    public $contractOfSale;

    public function mount(ContractOfSale $contractOfSale)
    {
        $this->contractOfSale = $contractOfSale;
    }
    public function render()
    {
        return view('livewire.contract-of-sales.level2')
            ->layout('components.layouts.app');
    }
}
