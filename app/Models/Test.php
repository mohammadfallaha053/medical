<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;
    Protected $primaryKey='t_id';

    protected $fillable=[
        't_id',
        'p_id',
        'd_id',
        'u_id',
        'ic_id',
        'test_date',
        'discount',
    ];

    public $timestamps = true;

    public function doctor()
    {
        //return $this->hasOne(Doctor::class,'d_id','d_id');
        return $this->belongsTo(Doctor::class,'d_id','d_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'u_id','u_id');
    }

    public function patient()
    {
        return $this->belongsTo(Patient::class,'p_id','p_id');
    }

    public function insurance_company()
    {
        return $this->belongsTo(InsuranceCompanies::class,'ic_id','ic_id');
    }

}
