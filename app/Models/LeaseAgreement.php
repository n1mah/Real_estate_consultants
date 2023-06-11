<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class LeaseAgreement extends Model
{
    use HasFactory;
    protected $fillable = [
        'level','file_number','confirm_date','signature_date','signature_hour','signature_minutes','user_id','comment'
    ];
    public function people()
    {
        return $this->belongsToMany(Person::class)->withPivot('is_tenant', 'lawyer_id','created_at','updated_at');
    }
    public function peopleTenants()
    {
        return $this->belongsToMany(Person::class)->withPivot('is_tenant', 'lawyer_id','created_at','updated_at')->where('is_tenant', 1);
    }
    public function peopleLessors()
    {
        return $this->belongsToMany(Person::class)->withPivot('is_tenant', 'lawyer_id','created_at','updated_at')->where('is_tenant', 0);
    }
    public function rental_properies_detail()
    {
        return $this->hasOne(RentalPropertyDetails::class);
    }
    public function details_of_rental(): HasOne
    {
        return $this->hasOne(DetailsOfRental::class);
    }
    public function financial()
    {
        return $this->hasOne(FinancialLease::class);
    }
}
