<?php

namespace App\Http\Livewire\ContractOfSales;

use App\Models\ContractOfSale;
use Livewire\Component;

class Delete extends Component
{
    public ContractOfSale $contractOfSale;
    public $comment;
    public $commentData;
    public $fileNumber;

    protected $listeners=[
        'delete'
    ];

    public function mount()
    {

        if ($this->contractOfSale->level>0){
            $this->fileNumber=$this->contractOfSale->file_number;
            $this->commentData=$this->contractOfSale->comment;
        }else{
            redirect()->route('sales');
        }
    }

    public function delete()
    {
        if ($this->contractOfSale->level!=66 || $this->contractOfSale->level<0|| $this->contractOfSale->level>11){
            $newComment='این قرارداد در ماده '.$this->contractOfSale->level-1 .'کنسل شد .'." \n ".$this->commentData." \n ".$this->comment;
            $this->contractOfSale->comment=$newComment;
            $this->contractOfSale->level=66;
            $this->contractOfSale->save();
        }
        redirect()->route("sales");
    }

    public function render()
    {
        return view('livewire.contract-of-sales.delete',[
            'contractOfSale'=>$this->contractOfSale
        ])->layout('components.layouts.app');
    }
}
