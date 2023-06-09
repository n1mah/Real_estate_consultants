<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailsOfContracts extends Model
{
    use HasFactory;
    protected $fillable = [
        'contract_of_sale_id','set_time','notary_public','delivery_time','loss_of_no_sale',
        'damages_for_non_fulfillment_of_obligations','contract_costs','seller_delayed_payment_fine',
        'buyer_delayed_payment_fine','arbitration'
    ];
    public function contract_of_sale()
    {
        return $this->belongsTo(ContractOfSale::class);
    }
}
