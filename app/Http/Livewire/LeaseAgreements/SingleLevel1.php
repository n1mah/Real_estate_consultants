<?php

namespace App\Http\Livewire\LeaseAgreements;

use App\Models\LeaseAgreement;
use App\Models\Person;
use Livewire\Component;

class SingleLevel1 extends Component
{
    public LeaseAgreement $leaseAgreement;

    public function getPerson($id)
    {
        return Person::find($id);
    }

    public function mount()
    {
        if ($this->leaseAgreement->level>1){

        }else{
            redirect()->route('rents');
        }

    }

    public function render()
    {
        $fileNumber=$this->leaseAgreement->file_number;
        $people_selectedTenant=$this->leaseAgreement->peopleTenants()->get();
        $people_selectedLessor=$this->leaseAgreement->peopleLessors()->get();
        $people_selectedTenant=$people_selectedTenant->map(function ($person_selectedTenant) {
            $data= collect($person_selectedTenant)->only(['id', 'firstname', 'lastname','pivot']);
            $data['lawyer']= $this->getPerson($data['pivot']['lawyer_id']);
            return $data;
        });
        $people_selectedLessor=$people_selectedLessor->map(function ($person_selectedLessor) {
            $data= collect($person_selectedLessor)->only(['id', 'firstname', 'lastname','pivot']);
            $data['lawyer']= $this->getPerson($data['pivot']['lawyer_id']);
            return $data;
        });
        return view('livewire.lease-agreements.single-level1',[
            'fileNumber'=>$fileNumber,
            'people_selectedTenant'=>$people_selectedTenant,
            'people_selectedLessor'=>$people_selectedLessor,
            'leaseAgreement'=>$this->leaseAgreement
        ])->layout('components.layouts.app');
    }
}
