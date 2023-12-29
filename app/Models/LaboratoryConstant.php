<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaboratoryConstant extends Model
{
    use HasFactory;

    Protected $primaryKey='lc_id';

//    protected $fillable=[
//        'lc_id',
//        'lab_name',
//        'logo_image',
//        'address',
//        'hospital_name',
//        'email',
//        'Price_Of_Unit',
//        'mange_name',
//    ];

    protected $guarded =[];


    public $timestamps = false;

    public function phones()
    {
        return $this->hasMany(LabPhone::class,'lc_id','lc_id');
    }
}
