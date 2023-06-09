<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

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
    public function properies_detail()
    {
        return $this->hasOne(PropertyDetails::class);
    }
    public function details_of_contract(): HasOne
    {
        return $this->hasOne(DetailsOfContracts::class);
    }
    public function financial()
    {
        return $this->hasOne(Financial::class);
    }
}
