<?php

namespace App\Http\Livewire\People;

use App\Models\Person;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
//    protected $listeners = ['searchData' => 'search'];
    public $search="";
    public $perPage=2;


    public function paginationView()
    {
        return 'livewire.components.pagination';
    }
    public function getPeople()
    {
        return Person::orderBy("created_at","asc")->where("firstname","like","%$this->search%");
    }
    public function getPlaceOfBirthPeople()
    {
        $people= new Person;
        return $people->groupBy('place_of_birth')->get('place_of_birth');
    }
    public function render()
    {

        $people= $this->getPeople();
        if ($this->page>ceil($people->count()/$this->perPage)){
            self::setPage(1);
        }
        $people=$people->paginate($this->perPage);

        $places = $this->getPlaceOfBirthPeople();

        return view('livewire.people.index',[
            ...compact('people'),
            ...compact('places'),
        ])
            ->layout('components.layouts.app');
    }
}
