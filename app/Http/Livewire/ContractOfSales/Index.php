<?php

namespace App\Http\Livewire\ContractOfSales;

use App\Models\ContractOfSale;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public function paginationView()
    {
        return 'livewire.components.pagination';
    }
    public $search="";
    public $perPage=2;

    public $statuslabel=[
        0=>'پیش انتظار',
        1=>'درانتظار ثبت',
        2=>'ماده 2',
        3=>'ماده 3',
        4=>'ماده 4',
        5=>'ماده 5',
        6=>'ماده 6',
        7=>'ماده 7',
        8=>'ماده 8',
        9=>'ماده 9',
        10=>'تکمیل شده',
    ];

    public function render()
    {
        $contracts=ContractOfSale::orderBy('id', 'desc')->paginate($this->perPage);
//        $buyers=$contracts
        return view('livewire.contract-of-sales.index',
        [
            ...compact('contracts')
        ])
            ->layout('components.layouts.app');
    }
}
