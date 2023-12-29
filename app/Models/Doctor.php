<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    Protected $primaryKey='d_id';

    protected $fillable=[
        'd_id',
        'first_name',
        'last_name',
        'gender',
        'Specialization'
    ];
    public $timestamps = false;

    public function phones()
    {
        return $this->hasMany(DoctorPhone::class,'d_id','d_id');
    }
}
