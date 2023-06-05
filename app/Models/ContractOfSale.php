<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContractOfSale extends Model
{
    use HasFactory;

    protected $fillable = [
        'level','file_number','confirm_date'
    ];
    public function people()
    {
        return $this->belongsToMany(Person::class)->withPivot('is_buyer', 'lawyer_id','created_at','updated_at');
    }
    public function peopleBuyer()
    {
        return $this->belongsToMany(Person::class)->withPivot('is_buyer', 'lawyer_id','created_at','updated_at')->where('is_buyer', 1);
    }
    public function peopleSeller()
    {
        return $this->belongsToMany(Person::class)->withPivot('is_buyer', 'lawyer_id','created_at','updated_at')->where('is_buyer', 0);
    }
    public function properies_details()
    {
        return $this->belongsToMany(PropertyDetails::class);
    }
}
