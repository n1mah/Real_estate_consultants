<?php

namespace App\Http\Livewire\ContractOfSales;

use App\Models\Person;
use Livewire\Component;
use function PHPUnit\Framework\isNull;

class Add extends Component
{
    public $people;

    public $selected;
    public $selected2;

    public $search;
    public $search2;
    public $searchResult;
    public $searchResult2;
    public $people_selected=[];
    public $people_selected2=[];
    public $id_selected=[];
    public $id_selected2=[];

    protected $listeners = [
        'selectedItem' => 'addItem',
        'removeItem' => 'deleteItem',
        'selectedItem2' => 'addItem2',
        'removeItem2' => 'deleteItem2',
        ];

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
    public function updatedSearch2()
    {
        if (!empty($this->search2))
        $this->searchResult2 = Person::orderBy("lastname","asc")
           ->where("firstname","like","%$this->search2%")
            ->orWhere("lastname","like","%$this->search2%")
            ->orWhere("national_code","like","%$this->search2%")->get();
        else
            $this->searchResult2=null;
    }
    public function deleteItem(int $id){
        if (in_array($id,$this->id_selected)) {
            if (($key = array_search($id, $this->id_selected)) !== false) {
                unset($this->id_selected[$key]);
                unset($this->people_selected[$key]);
            }
        }
        }
    public function addItem(int $id=null)
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
    }  public function deleteItem2(int $id){
        if (in_array($id,$this->id_selected2)) {
            if (($key = array_search($id, $this->id_selected2)) !== false) {
                unset($this->id_selected2[$key]);
                unset($this->people_selected2[$key]);
            }
        }
    }
    public function addItem2(int $id=null)
    {
        $id_add=null;
        if (!is_null($id)){
            $id_add=$id;
        }else{
            $id_add=$this->selected2;
        }

        if (!empty($id_add)){
            if (!in_array($id_add,$this->id_selected2)){
                array_push($this->id_selected2,$id_add);
                $p=Person::find($id_add);
                $this->people_selected2[] = [
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
