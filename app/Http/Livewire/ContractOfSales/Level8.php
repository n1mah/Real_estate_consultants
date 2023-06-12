<?php

namespace App\Http\Livewire\ContractOfSales;

use App\Models\ContractOfSale;
use Livewire\Component;

class Level8 extends Component
{
    public ContractOfSale $contractOfSale;
    public $msg='';
    public $city;
    public $wage;
    public $amount_received_each;
    public $tax;
    public $total_received;

    public function mount(){
        $user=auth()->user();
        $this->city=($user->city)?($user->city):null;
        $this->wage=($user->default_wage)?($user->default_wage):null;
        $this->tax=($user->default_tax)?($user->default_tax):null;
    }

    protected $rules = [
        'city' => 'required',
        'wage' => 'required',
        'amount_received_each' => 'required',
        'tax' => 'required',
        'total_received' => 'required',
    ];

    protected $messages = [
        'city.required' => 'شهرستان را وارد کنید',
        'wage.required' => 'حق الزحمه مشاور املاک را مشخص کنید',
        'amount_received_each.required' => 'مبلغ دریافتی از هر طرف را وارد کنید',
        'tax.required' => 'مالیات بر ارزش افزوده را وارد کنید',
        'total_received.required' => 'جمع دریافتی نامشخص است',
    ];
    public function Checker($data):bool{
        if (!empty($data) && $data!=null && trim($data)!=""){
            return true;
        }
        return false;
    }

    public function CheckerTwo($data):bool{
        if ($data && !empty($data) && $data!=null && trim($data)!="" && trim($data)!=0){
            return true;
        }
        return false;
    }

    public function CalcTotal(): void
    {
        if ($this->Checker($this->amount_received_each) &&
            $this->Checker($this->wage) &&
            $this->Checker($this->tax)){
                $total=(($this->amount_received_each*2)+$this->wage);
                $this->total_received=((($total*$this->tax)/100)+$total);
        }
    }

    public function updatedWage()
    {
        $this->CalcTotal();
        if ($this->wage=="" || $this->wage==0){
            $this->total_received=0;
        }
    }

    public function updatedAmountReceivedEach()
    {
        $this->CalcTotal();
        if ($this->amount_received_each=="" || $this->amount_received_each==0){
            $this->total_received=0;
        }
    }

    public function updatedTax()
    {
        $this->CalcTotal();
        if ($this->tax=="" || $this->tax==0){
            $this->total_received=0;
        }
    }

    public function create()
    {
        $this->validate();
        if ($this->CheckerTwo($this->amount_received_each) &&
            $this->CheckerTwo($this->wage) &&
            $this->CheckerTwo($this->tax) &&
            $this->CheckerTwo($this->city) &&
            $this->CheckerTwo($this->total_received)){
                $financial=$this->contractOfSale->financial()->get()->first();
                $financial->city=$this->city;
                $financial->wage=$this->wage;
                $financial->amount_received_each=$this->amount_received_each;
                $financial->tax=$this->tax;
                $financial->total_received=$this->total_received;
                $financial->save();
                $this->contractOfSale->level=9;
                $this->contractOfSale->save();
            redirect()->route('sales.level9',['contractOfSale'=>$this->contractOfSale]);
        }else{
                $this->msg='داده ها را با دقت وارد کنید';
        }
    }

    public function render()
    {
        return view('livewire.contract-of-sales.level8')
            ->layout('components.layouts.app');
    }
}
