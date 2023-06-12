<?php

namespace App\Http\Livewire\ContractOfSales;

use App\Models\ContractOfSale;
use Livewire\Component;

class Level6 extends Component
{
    public ContractOfSale $contractOfSale;
    public $damages_for_non_fulfillment_of_obligations;
    public $contract_costs='';
    public $seller_delayed_payment_fine;
    public $buyer_delayed_payment_fine;

    protected $rules = [
        'damages_for_non_fulfillment_of_obligations' => 'required',
        'contract_costs' => 'required',
        'seller_delayed_payment_fine' => 'required',
        'buyer_delayed_payment_fine' => 'required',
    ];

    protected $messages = [
        'damages_for_non_fulfillment_of_obligations.required' => 'مبلغ خسارت عدم انجام تعهدات فروشنده به خریدار را وارد کنید',
        'contract_costs.required' => 'هزینه حق الثبت و حق التحریر را مشخص کنید',
        'seller_delayed_payment_fine.required' => 'مبلغ خسارت عدم اجرای تعهد از جانب فروشنده به ازای هر روز تاخیر را وارد کنید',
        'buyer_delayed_payment_fine.required' => 'مبلغ خسارت عدم اجرای تعهد از جانب خریدار به ازای هر روز تاخیر را وارد کنید',
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
        if ($this->Checker($this->damages_for_non_fulfillment_of_obligations) &&
            $this->Checker($this->contract_costs) &&
            $this->Checker($this->seller_delayed_payment_fine) &&
            $this->Checker($this->buyer_delayed_payment_fine)){
                $DetailsOfContracts=$this->contractOfSale->details_of_contract()->get()->first();
                $DetailsOfContracts->damages_for_non_fulfillment_of_obligations=$this->damages_for_non_fulfillment_of_obligations;
                $DetailsOfContracts->contract_costs=$this->contract_costs;
                $DetailsOfContracts->buyer_delayed_payment_fine=$this->buyer_delayed_payment_fine;
                $DetailsOfContracts->seller_delayed_payment_fine=$this->seller_delayed_payment_fine;
                $DetailsOfContracts->save();
                $this->contractOfSale->level=7;
                $this->contractOfSale->save();
                redirect()->route('sales.level7',['contractOfSale'=>$this->contractOfSale]);
        }
    }

    public function render()
    {
        return view('livewire.contract-of-sales.level6')
            ->layout('components.layouts.app');

    }
}
