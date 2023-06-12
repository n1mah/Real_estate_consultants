<?php

namespace App\Http\Livewire\LeaseAgreements;

use App\Models\LeaseAgreement;
use Livewire\Component;

class Level13 extends Component
{
    public LeaseAgreement $leaseAgreement;
    public $comment;

    public function create()
    {
        $this->leaseAgreement->comment=$this->comment;
        $this->leaseAgreement->level=14;
        $this->leaseAgreement->save();
        redirect()->route("rents");
    }
    public function render()
    {
        return view('livewire.lease-agreements.level13')
            ->layout('components.layouts.app');
    }
}
