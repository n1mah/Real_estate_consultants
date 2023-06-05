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
    public $levels_filter=[];

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

    public function loadLevels()
    {
        $this->levels_filter=[ ...ContractOfSale::pluck('level')->unique()];
    }
    public function refreshPage()
    {
        $this->search="";
        $this->levels_filter=[...ContractOfSale::pluck('level')->unique()];
        self::setPage(1);
    }
    public function getContract()
    {
//        ->whereIn('place_of_birth', [...$this->places_filter])
//        ->where(function($query) {
//            $query->where("firstname","like","%$this->search%")
//                ->orWhere("lastname","like","%$this->search%")
//                ->orWhere("national_code","like","%$this->search%");
//        });
        return ContractOfSale::orderBy("created_at","desc")
            ->where("file_number","like","%$this->search%")
             ->whereIn('level', [...$this->levels_filter]);
//            ->orWhere("lastname","like","%$this->search%")
//            ->orWhere("national_code","like","%$this->search%");
    }
    public function getExistLevel()
    {
        return ContractOfSale::pluck('level')->unique();
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
        $levels = $this->getExistLevel()->sort();

//        $buyers=$contracts
        return view('livewire.contract-of-sales.index',
        [
            ...compact('levels'),
            ...compact('contracts')
        ])
            ->layout('components.layouts.app');
    }
}
