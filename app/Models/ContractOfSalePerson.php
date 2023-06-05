<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContractOfSalePerson extends Model
{
//    use HasFactory;
    public $incrementing = true;

    protected $table = 'contract_of_sale_person';
    protected $primaryKey = 'id';
    protected $fillable = [
        'contract_of_sale_id','person_id','lawyer_id','is_buyer'
    ];

}
