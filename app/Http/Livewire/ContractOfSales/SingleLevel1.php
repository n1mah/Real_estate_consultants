<?php

namespace App\Http\Livewire\ContractOfSales;

use App\Models\ContractOfSale;
use App\Models\Person;
use Livewire\Component;

class SingleLevel1 extends Component
{
    public ContractOfSale $contractOfSale;

    public function mount()
    {
        if ($this->contractOfSale->level>1){
        }else{
            redirect()->route('sales');
        }
    }

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
            'contractOfSale'=>$this->contractOfSale
        ])->layout('components.layouts.app');
    }
}
