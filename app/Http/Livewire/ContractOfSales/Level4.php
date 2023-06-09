<?php

namespace App\Http\Livewire\ContractOfSales;

use App\Models\ContractOfSale;
use Livewire\Component;

class Level4 extends Component
{

    public ContractOfSale $contractOfSale;
    public $set_time;
    public $notary_public;

    public function create()
    {

    }

    public function render()
    {
        return view('livewire.contract-of-sales.level4')
            ->layout('components.layouts.app');

    }
}
