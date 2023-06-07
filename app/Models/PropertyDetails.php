<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyDetails extends Model
{
    use HasFactory;
    protected $fillable = [
        'contract_of_sale_id','entirety','arena_and_nobles','house_number','sub_part_address','main_part_address',
        'year_of_construction','part','registration_area','house_area','price_per_meter','parking',
        'warehouse','membership_right','telephone','title_deeds','title_deeds_number','address','postal_code'
    ];

    public function contract_of_sale()
    {
        return $this->hasOne(ContractOfSale::class);
    }
}
