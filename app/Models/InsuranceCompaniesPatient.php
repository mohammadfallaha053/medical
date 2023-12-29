<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InsuranceCompaniesPatient extends Model
{
    use HasFactory;
    Protected $primaryKey='icp_id';
    protected $fillable=[
        'icp_id',
        'ic_id',
        'p_id',
        'register_date',
        'status'
    ];
    public $timestamps = false;

}
