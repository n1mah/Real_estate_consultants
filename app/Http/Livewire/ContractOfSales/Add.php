<?php

namespace App\Http\Livewire\ContractOfSales;

use App\Models\Person;
use Livewire\Component;
class Add extends Component
{

    public $level=0;
    public $people;

    public $selected;
    public $selectedSeller;

    public $search;
    public $searchSeller;
    public $searchResult;
    public $searchResultSeller;
    public $people_selected=[];
    public $people_selectedSeller=[];
    public $id_selected=[];
    public $id_selectedSeller=[];

    protected $listeners = [
        'selectedItem',
        'removeItem',
        'selectedItemSeller',
        'removeItemSeller',
        'level0',
        'level1',
        'level2',
        'level3',
        'level4',
        'level5',
        'level6',
        'level7',
        'level8',
        'level1Action'=>'level1',
        'level2Action'=>'level2',
        'level3Action'=>'level3'
        ];

    public function level0()
    {
        $this->level=0;
    }
    public function level1()
    {
        $this->level=1;
    }
    public function level2()
    {
        $this->level=2;
    }
    public function level3()
    {
        $this->level=3;
    }
    public function level4()
    {
        $this->level=4;
    }
    public function level5()
    {
        $this->level=5;
    }
    public function level6()
    {
        $this->level=6;
    }
    public function level7()
    {
        $this->level=7;
    }
    public function level8()
    {
        $this->level=8;
    }
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

    public function updatedSearchSeller()
    {
        if (!empty($this->searchSeller))
        $this->searchResultSeller = Person::orderBy("lastname","asc")
           ->where("firstname","like","%$this->searchSeller%")
            ->orWhere("lastname","like","%$this->searchSeller%")
            ->orWhere("national_code","like","%$this->searchSeller%")->get();
        else
            $this->searchResultSeller=null;
    }
    public function removeItem(int $id){
        if (in_array($id,$this->id_selected)) {
            if (($key = array_search($id, $this->id_selected)) !== false) {
                unset($this->id_selected[$key]);
                unset($this->people_selected[$key]);
            }
        }
        }
    public function selectedItem(int $id=null)
    {
        $id_add=null;
        if (!is_null($id)){
            $id_add=$id;
        }else{
            $id_add=$this->selected;
        }

        if (!empty($id_add)){
            if (!in_array($id_add,$this->id_selected)){
                array_push($this->id_selected,$id_add);
                $p=Person::find($id_add);
                $this->people_selected[] = [
                    'id' => $p->id,
                    'firstname' => $p->firstname,
                    'lastname' => $p->lastname,
                    'national_code' => $p->national_code,
                ];
            }
        }
    }  public function removeItemSeller(int $id){
        if (in_array($id,$this->id_selectedSeller)) {
            if (($key = array_search($id, $this->id_selectedSeller)) !== false) {
                unset($this->id_selectedSeller[$key]);
                unset($this->people_selectedSeller[$key]);
            }
        }
    }
    public function selectedItemSeller(int $id=null)
    {
        $id_add=null;
        if (!is_null($id)){
            $id_add=$id;
        }else{
            $id_add=$this->selectedSeller;
        }

        if (!empty($id_add)){
            if (!in_array($id_add,$this->id_selectedSeller)){
                array_push($this->id_selectedSeller,$id_add);
                $p=Person::find($id_add);
                $this->people_selectedSeller[] = [
                    'id' => $p->id,
                    'firstname' => $p->firstname,
                    'lastname' => $p->lastname,
                    'national_code' => $p->national_code,
                ];
            }
        }    }
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
