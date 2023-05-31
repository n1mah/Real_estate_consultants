<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContractOfSale extends Model
{
    use HasFactory;

    protected $fillable = [
        'level','confirm_date'
    ];
    public function people()
    {
        return $this->belongsToMany(Person::class);
    }
}
