<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Financial extends Model
{
    use HasFactory;
    protected $fillable = [
        'contract_of_sale_id','purchase_price','deposit','payment_type','bank','branch','cheque'
    ];
    public function contract_of_sale()
    {
        return $this->belongsTo(ContractOfSale::class);
    }
}
