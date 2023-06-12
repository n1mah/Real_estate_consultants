<?php

namespace App\Http\Livewire\ContractOfSales;

use App\Models\ContractOfSale;
use App\Models\DetailsOfContracts;
use Carbon\Carbon;
use Livewire\Component;

class Level4 extends Component
{
    public ContractOfSale $contractOfSale;
    public $set_time=null;
    public $notary_public;

    protected $rules = [
        'notary_public' => 'required|min:3|max:200',
        'set_time' => 'required|max:55',
    ];

    protected $messages = [
        'notary_public.required' => 'دفتر اسناد رسمی را وارد کنید',
        'set_time.required' => 'تاریخ حضور در دفترخانه را وارد کنید',
        'notary_public.min' => 'عنوان دفتر اسناد رسمی باید حداقل 3 کارکتر باشد',
        'notary_public.max' => 'عنوان دفتر اسناد رسمی باید حداکثر 200 کارکتر باشد',
        'set_time.max' => 'تاریخ حضور در دفترخانه نامعتبر می باشد',
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
        if ($this->Checker($this->set_time) && $this->Checker($this->notary_public)){
            DetailsOfContracts::create(
                [
                    'contract_of_sale_id'=>$this->contractOfSale->id,
                    'set_time'=>(Carbon::createFromTimestamp($this->set_time, 'Asia/Tehran')->format('y/m/d').' 12:00:00'),
                    'notary_public'=>$this->notary_public
                ]
            );
            $this->contractOfSale->level=5;
            $this->contractOfSale->save();
            redirect()->route('sales.level5',['contractOfSale'=>$this->contractOfSale]);
        }
    }

    public function render()
    {
        return view('livewire.contract-of-sales.level4')
            ->layout('components.layouts.app');
    }
}
