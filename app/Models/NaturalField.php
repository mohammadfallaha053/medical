<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NaturalField extends Model
{
    use HasFactory;
    Protected $primaryKey='nf_id';

    protected $fillable=[
        'nf_id',
        'a_id',
        'max',
        'min',
    ];
    public $timestamps = false;


    public function analyses()
    {
        return $this->hasMany(Analyse::class,'a_id','a_id');
    }

}
