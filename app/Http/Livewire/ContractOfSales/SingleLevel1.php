<?php

namespace App\Http\Livewire\ContractOfSales;

use App\Models\ContractOfSale;
use App\Models\Person;
use Livewire\Component;

class SingleLevel1 extends Component
{
    public ContractOfSale $contractOfSale;

    public function getPerson($id)
    {
        return Person::find($id);
    }

    public function render()
    {
        $fileNumber=$this->contractOfSale->file_number;
        $people_selectedBuyer=$this->contractOfSale->peopleBuyer()->get();
        $people_selectedSeller=$this->contractOfSale->peopleSeller()->get();
        $people_selectedBuyer=$people_selectedBuyer->map(function ($person_selectedBuyer) {
            $data= collect($person_selectedBuyer)->only(['id', 'firstname', 'lastname','pivot']);
            $data['lawyer']= $this->getPerson($data['pivot']['lawyer_id']);
//            if ($u['lawyer']!=null){
//                $u['lawyer_firstname']= $this->getPerson($u['pivot']['lawyer_id'])['firstname'];
//                $u['lawyer_lastname']= $this->getPerson($u['pivot']['lawyer_id'])['lastname'];
//            }
            return $data;
        });
        $people_selectedSeller=$people_selectedSeller->map(function ($person_selectedSeller) {
            $data= collect($person_selectedSeller)->only(['id', 'firstname', 'lastname','pivot']);
            $data['lawyer']= $this->getPerson($data['pivot']['lawyer_id']);
            return $data;
        });
        return view('livewire.contract-of-sales.single-level1',[
            'fileNumber'=>$fileNumber,
            'people_selectedBuyer'=>$people_selectedBuyer,
            'people_selectedSeller'=>$people_selectedSeller,
        ])
            ->layout('components.layouts.app');

    }
}
