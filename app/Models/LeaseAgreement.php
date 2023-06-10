<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeaseAgreement extends Model
{
    use HasFactory;
    protected $fillable = [
        'level','file_number','confirm_date','signature_date','signature_hour','signature_minutes','user_id','comment'
    ];
}
