<?php

namespace App\Http\Livewire\ContractOfSales;

use App\Models\ContractOfSale;
use App\Models\Person;
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

    public function getContract()
    {
//        ->whereIn('place_of_birth', [...$this->places_filter])
//        ->where(function($query) {
//            $query->where("firstname","like","%$this->search%")
//                ->orWhere("lastname","like","%$this->search%")
//                ->orWhere("national_code","like","%$this->search%");
//        });
        return ContractOfSale::orderBy("created_at","desc")
            ->where("file_number","like","%$this->search%");
//            ->orWhere("lastname","like","%$this->search%")
//            ->orWhere("national_code","like","%$this->search%");
    }
    public function gotoFirstPage($contracts)
    {
        if (ceil($contracts->count()/$this->perPage) < $this->page)
            self::setPage(1);
    }
    public function render()
    {
        $contracts= $this->getContract()->paginate($this->perPage);
        $this->gotoFirstPage($contracts);
//        $buyers=$contracts
        return view('livewire.contract-of-sales.index',
        [
            ...compact('contracts')
        ])
            ->layout('components.layouts.app');
    }
}
