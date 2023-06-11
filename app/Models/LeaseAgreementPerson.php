<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeaseAgreementPerson extends Model
{
    use HasFactory;
    public $incrementing = true;

    protected $table = 'lease_agreement_person';
    protected $primaryKey = 'id';
    protected $fillable = [
        'lease_agreement_id','person_id','lawyer_id','is_tenant'
    ];
}
