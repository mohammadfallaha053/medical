<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LabPhone extends Model
{
    use HasFactory;

    Protected $primaryKey='lab_phone_id';

    protected $fillable=[
        'lab_phone_id',
        'lc_id',
        'phone',

    ];

    public $timestamps = false;

    public function lab()
    {
        return $this->hasOne(LaboratoryConstant::class,'lc_id','lc_id');
    }
}
