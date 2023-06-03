<?php

namespace App\Http\Livewire\ContractOfSales;

use App\Models\Person;
use Livewire\Component;
use function PHPUnit\Framework\isNull;

class Add extends Component
{
    public $selected;
    public $people;
    public $search;
    public $searchResult;
    public $people_selected=[];

    protected $listeners = ['selectedItem' => 'aa'];

    public function updatedSearch()
    {
        if (!empty($this->search))
        $this->searchResult = Person::orderBy("lastname","asc")
           ->where("firstname","like","%$this->search%")
            ->orWhere("lastname","like","%$this->search%")
            ->orWhere("national_code","like","%$this->search%")->get();
        else
            $this->searchResult=null;


    }
    public function aa()
    {
        if (!empty($this->selected))
            if (!in_array($this->selected,$this->people_selected))
                 array_push($this->people_selected,$this->selected);

    }
    public function mount(){
        $this->people=Person::all();
//        dd($this->persons);
    }
    public function render()
    {
        return view('livewire.contract-of-sales.add')
            ->layout('components.layouts.app');
    }
}
