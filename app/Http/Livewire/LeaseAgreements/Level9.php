<?php

namespace App\Http\Livewire\LeaseAgreements;

use App\Models\LeaseAgreement;
use Livewire\Component;

class Level9 extends Component
{
    public LeaseAgreement $leaseAgreement;

    public function mount()
    {
        if ($this->leaseAgreement->level<9) {
            redirect()->route("rents");
        }
    }
    public function create()
    {
        $this->leaseAgreement->level=10;
        $this->leaseAgreement->save();
        redirect()->route('rent.level10',['leaseAgreement'=>$this->leaseAgreement]);
    }
    public function render()
    {
        return view('livewire.lease-agreements.level9')
            ->layout('components.layouts.app');
    }
}
