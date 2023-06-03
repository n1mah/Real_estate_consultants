<?php

namespace App\Http\Livewire\ContractOfSales;

use App\Models\Person;
use Livewire\Component;

class Add extends Component
{
    public $selected;
    public $people;
    public $people_selected=[];

    protected $listeners = ['selectedItem' => 'aa'];


    public function aa()
    {
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
