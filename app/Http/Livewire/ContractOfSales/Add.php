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
    public function aa(int $id=null)
    {
        $id_add=null;
        if (!is_null($id)){
            $id_add=$id;
        }else{
            $id_add=$this->selected;
        }
        if (!in_array($id_add,$this->people_selected))
            array_push($this->people_selected,$id_add);
        $this->dispatchBrowserEvent('onHide');

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
