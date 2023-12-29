<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorPhone extends Model
{
    use HasFactory;
    Protected $primaryKey='d_Phone_id';
    protected $fillable=[
        'd_Phone_id',
        'd_id',
        'phone',
    ];
    //protected $hidden = ['d_Phone_id', 'd_id'];
    public $timestamps = false;

    public function doctor()
    {
        return $this->hasOne(Doctor::class,'d_id','d_id');
    }
}

