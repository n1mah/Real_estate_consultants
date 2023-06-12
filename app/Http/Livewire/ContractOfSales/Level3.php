<?php

namespace App\Http\Livewire\ContractOfSales;

use App\Models\ContractOfSale;
use App\Models\Financial;
use App\Models\PropertyDetails;
use Livewire\Component;

class Level3 extends Component
{
    public ContractOfSale $contractOfSale;
    public $total;
    public $purchase_price;
    public $debt_balance;
    public $deposit;
    public $cheque;
    public $msg;
    public $payment_type='نقد';
    public $bank;
    public $branch;

    public function mount()
    {
        $PropertyDetailsFind = PropertyDetails::where('contract_of_sale_id',$this->contractOfSale->id)->count();
        if ($PropertyDetailsFind>0){
            $this->total =  $this->contractOfSale->properies_detail()->orderBy('id','desc')->first()->price_per_meter * $this->contractOfSale->properies_detail()->orderBy('id','desc')->first()->house_area;
            $this->payment_type='نقد';
        }else{
            redirect()->route('sales');
        }
    }

    public function updatedPurchasePrice()
    {
        if ($this->purchase_price=="" || $this->purchase_price==null  || empty($this->purchase_price)){
            $this->purchase_price=null;
        }else{
            if (!($this->deposit=="" || $this->deposit==null  || empty($this->deposit))) {
                $this->debt_balance=$this->purchase_price-$this->deposit;
            }
        }
    }

    public function updatedDeposit()
    {
        if ($this->deposit=="" || $this->deposit==null  || empty($this->deposit)){
            $this->deposit=null;
        }else{
            if (!($this->purchase_price=="" || $this->purchase_price==null  || empty($this->purchase_price))){
                if ($this->deposit>$this->purchase_price){
                    $this->deposit=(int)($this->deposit/10);
                    $this->debt_balance=$this->purchase_price-$this->deposit;
                }else{
                    $this->debt_balance=$this->purchase_price-$this->deposit;
                }
            }
        }
    }

    public function create()
    {
        if ( !($this->deposit=="" || $this->deposit==null  || empty($this->deposit)) ){
            $this->msg['deposit']='';
            if (!($this->purchase_price=="" || $this->purchase_price==null  || empty($this->purchase_price))){
                $this->msg['purchase_price']='';
                Financial::create([
                    'contract_of_sale_id'=>$this->contractOfSale->id,
                    'purchase_price'=>$this->purchase_price,
                    'deposit'=>$this->deposit,
                    'payment_type'=>$this->payment_type,
                    'bank'=>$this->bank,
                    'branch'=>$this->branch,
                    'cheque'=>$this->cheque,
                ]);
                $this->contractOfSale->level=4;
                $this->contractOfSale->save();
                redirect()->route('sales.level4',['contractOfSale'=>$this->contractOfSale]);
            }else{
                $this->msg['purchase_price']='ثمن معامله را وارد کنید';
            }
        }else{
            $this->msg['deposit']='بیعانه را وارد کنید';
        }
    }
    public function render()
    {
        return view('livewire.contract-of-sales.level3')
            ->layout('components.layouts.app');
    }
}
