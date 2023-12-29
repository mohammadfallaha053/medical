<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    Protected $table='patients';
    Protected $primaryKey='p_id';
    protected $fillable=[
      'p_id',
      'first_name',
      'last_name',
      'phone' ,
      'gender',
      'birthday'
    ];
    public $timestamps = false;

    public function insuranceCompanies()
    {
        return $this->belongsToMany(InsuranceCompanies::class,'insurance_companies_patients','p_id','ic_id');
    }
}
