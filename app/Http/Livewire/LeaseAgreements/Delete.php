<?php

namespace App\Http\Livewire\LeaseAgreements;

use App\Models\LeaseAgreement;
use Livewire\Component;

class Delete extends Component
{
    public LeaseAgreement $leaseAgreement;

    public $comment;
    public $commentData;
    public $fileNumber;

    protected $listeners=[
        'delete'
    ];

    public function mount()
    {

        if ($this->leaseAgreement->level>0){
            $this->fileNumber=$this->leaseAgreement->file_number;
            $this->commentData=$this->leaseAgreement->comment;
        }else{
            redirect()->route('sales');
        }
    }

    public function delete()
    {
        if ($this->leaseAgreement->level!=66 || $this->leaseAgreement->level<0|| $this->leaseAgreement->level>14){
            $newComment='این قرارداد در ماده '.$this->leaseAgreement->level-1 .'کنسل شد .'." \n ".$this->commentData." \n ".$this->comment;
            $this->leaseAgreement->comment=$newComment;
            $this->leaseAgreement->level=66;
            $this->leaseAgreement->save();
        }
        redirect()->route("rents");
    }
    public function render()
    {
        return view('livewire.lease-agreements.delete')
            ->layout('components.layouts.app');
    }
}
