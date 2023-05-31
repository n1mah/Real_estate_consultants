<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;
    protected $fillable = [
        'firstname','lastname', 'national_code', 'birth_certificate_number', 'date_of_birth','place_of_birth','fathername','address','postal_code','mobile','phone'
    ];
    public function contract_of_sales()
    {
        return $this->belongsToMany(ContractOfSale::class);
    }
}
