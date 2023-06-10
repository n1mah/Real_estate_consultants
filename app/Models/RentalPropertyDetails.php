<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RentalPropertyDetails extends Model
{
    use HasFactory;
    protected $fillable = [
        'lease_agreement_id','entirety','type_of_lease','address','house_number','sub_part_address',
        'main_part_address', 'part','house_area','title_deeds_number','name',
        'bedroom','membership_right','parking','warehouse','telephone','postal_code'
    ];
}
