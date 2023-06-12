<?php

namespace App\Http\Livewire\LeaseAgreements;

use App\Models\LeaseAgreement;
use Livewire\Component;

class Level7 extends Component
{
    public LeaseAgreement $leaseAgreement;

    public function mount()
    {
        if ($this->leaseAgreement->level<7) {
            redirect()->route("rents");
        }
    }

    public function create()
    {
            $this->leaseAgreement->level=8;
            $this->leaseAgreement->save();
            redirect()->route('rent.level8',['leaseAgreement'=>$this->leaseAgreement]);
    }

    public function render()
    {
        return view('livewire.lease-agreements.level7')
            ->layout('components.layouts.app');
    }
}
