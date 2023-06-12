<?php

namespace App\Http\Livewire\LeaseAgreements;

use App\Models\LeaseAgreement;
use Livewire\Component;

class Show extends Component
{
    public LeaseAgreement $leaseAgreement;
    public $fileNumber;
    public function mount()
    {
        if ($this->leaseAgreement->level>1){
            $this->fileNumber=$this->leaseAgreement->file_number;
        }else{
            redirect()->route('rents');
        }
    }
    public function render()
    {
        return view('livewire.lease-agreements.show',[
            'lease_agreement'=>$this->leaseAgreement
        ])
            ->layout('components.layouts.app');
    }
}
