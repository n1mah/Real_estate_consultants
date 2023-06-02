<?php

namespace App\Http\Livewire\People;

use App\Models\Person;
use Livewire\Component;
use Livewire\WithPagination;
use Morilog\Jalali\Jalalian;

class Index extends Component
{
    use WithPagination;
    protected $listeners = ['changeCustomer' => '$refresh'];
    public $search="";
    public $perPage=2;
    public $places_filter=[];



    public function loadPlaces()
    {
        $this->places_filter=[ ...Person::pluck('place_of_birth')->unique()];
    }


    public function updatedPlacesFilter(){
        $people=  Person::orderBy("created_at","asc")
            ->whereIn('place_of_birth', [...$this->places_filter])
            ->where(function($query) {
                $query->where("firstname","like","%$this->search%")
                    ->orWhere("lastname","like","%$this->search%")
                    ->orWhere("national_code","like","%$this->search%");
            });


    }
    public function updatedSearch(){
            self::setPage(1);
    }
    public function paginationView()
    {
        return 'livewire.components.pagination';
    }
    public function refreshPage()
    {
        $this->search="";
        $this->places_filter=[...Person::pluck('place_of_birth')->unique()];
        self::setPage(1);
    }
    public function getPeople()
    {
        return Person::orderBy("created_at","asc")
            ->whereIn('place_of_birth', [...$this->places_filter])
            ->where(function($query) {
                $query->where("firstname","like","%$this->search%")
                ->orWhere("lastname","like","%$this->search%")
                ->orWhere("national_code","like","%$this->search%");
            });
    }
    public function getPlaceOfBirthPeople()
    {
        return Person::pluck('place_of_birth')->unique();
    }

    public function gotoFirstPage($people)
    {
        if (ceil($people->count()/$this->perPage) < $this->page)
            self::setPage(1);
    }
    public function render()
    {
        $a=3;
        $people= $this->getPeople();
        $this->gotoFirstPage($people);
        $people=$people->paginate($this->perPage);
        $places = $this->getPlaceOfBirthPeople();
        return view('livewire.people.index',[
            ...compact('people'),
            ...compact('places'),
            'a'=>$a
        ])
            ->layout('components.layouts.app');
    }
}
