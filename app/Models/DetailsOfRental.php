<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailsOfRental extends Model
{
    use HasFactory;

    protected $fillable = [
        'lease_agreement_id','rental_period','rental_period_type','from','until',
        'penalty_for_non_payment','penalty_for_non_return','delivery_time',
        'penalty_for_non_delivery','others','damages_for_non_fulfillment_of_obligations',
        'penalty_for_non_evacuation'
    ];
    public function lease_agreement()
    {
        return $this->belongsTo(LeaseAgreement::class);
    }
}
