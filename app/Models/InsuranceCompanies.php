<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InsuranceCompanies extends Model
{
    use HasFactory;

    Protected $primaryKey='ic_id';

    protected $fillable=[
        'ic_id',
        'name',
        'email',
    ];
    public $timestamps = false;
    public function phones()
    {
        return $this->hasMany(InsuranceCompaniesPhone::class,'ic_id','ic_id');
    }

    public function patients()
    {
        return $this->belongsToMany(Patient::class,'insurance_companies_patients','ic_id','p_id');
    }
}
