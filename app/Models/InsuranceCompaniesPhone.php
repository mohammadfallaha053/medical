<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InsuranceCompaniesPhone extends Model
{
    use HasFactory;
    Protected $primaryKey='ic_phone_id';

    protected $fillable=[
        'ic_phone_id',
        'ic_id',
        'phone',
    ];

    public $timestamps = false;

}
