<?php

namespace App\Http\Livewire\LeaseAgreements;

use App\Models\LeaseAgreement;
use Livewire\Component;

class Level8 extends Component
{
    public LeaseAgreement $leaseAgreement;

    public function mount()
    {
        if ($this->leaseAgreement->level<8) {
            redirect()->route("rents");
        }
    }
    public function create()
    {
        $this->leaseAgreement->level=9;
        $this->leaseAgreement->save();
        redirect()->route('rent.level9',['leaseAgreement'=>$this->leaseAgreement]);
    }

    public function render()
    {
        return view('livewire.lease-agreements.level8')
            ->layout('components.layouts.app');
    }
}
