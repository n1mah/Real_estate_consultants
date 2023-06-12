<?php

namespace App\Http\Livewire\ContractOfSales;

use App\Models\ContractOfSale;
use Carbon\Carbon;
use Livewire\Component;

class Level5 extends Component
{
    public ContractOfSale $contractOfSale;
    public $delivery_time;
    public $loss_of_no_sale;
    protected $rules = [
        'loss_of_no_sale' => 'required',
        'delivery_time' => 'required|max:55',
    ];

    protected $messages = [
        'loss_of_no_sale.required' => 'مبلغ خسارت را وارد کنید',
        'delivery_time.required' => 'تاریخ تحویل را وارد کنید',
        'delivery_time.max' => 'تاریخ تحویل نامعتبر می باشد',
    ];

    public function Checker($data):bool{
        if (!empty($data) && $data!=null && trim($data)!=""){
            return true;
        }
        return false;
    }

    public function create()
    {
        $this->validate();
        if ($this->Checker($this->delivery_time) && $this->Checker($this->loss_of_no_sale)){
                $DetailsOfContracts=$this->contractOfSale->details_of_contract()->get()->first();
                $DetailsOfContracts->delivery_time=(Carbon::createFromTimestamp($this->delivery_time, 'Asia/Tehran')->format('y/m/d').' 12:00:00');
                $DetailsOfContracts->loss_of_no_sale=$this->loss_of_no_sale;
                $DetailsOfContracts->save();
                $this->contractOfSale->level=6;
                $this->contractOfSale->save();
            redirect()->route('sales.level6',['contractOfSale'=>$this->contractOfSale]);
        }
    }
    public function render()
    {
        return view('livewire.contract-of-sales.level5')
            ->layout('components.layouts.app');
    }
}
