<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinancialLease extends Model
{
    use HasFactory;
    protected $fillable = [
        'lease_agreement_id','lease_amount','monthly_rental_amount','at_first','mortgage','rent'
        ,'payment_type','bank','branch','cheque','deposit','deposit_return_date'
    ];
}
