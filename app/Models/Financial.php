<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Financial extends Model
{
    use HasFactory;
    protected $fillable = [
        'purchase_price','deposit','payment_type','bank','branch'
    ];
    public function contract_of_sale()
    {
        return $this->belongsTo(ContractOfSale::class);
    }
}
