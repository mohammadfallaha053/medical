<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Analyse extends Model
{
    use HasFactory;

    Protected $primaryKey='a_id';

    protected $fillable=[
        'a_id',
        'g_id',
        'c_id',
        'name',
        'n_units',
    ];
    public $timestamps = false;

    public function category()
    {
        return $this->hasOne(Category::class,'c_id','c_id');
    }

    public function group(){
        return $this->hasOne(Group::class,'g_id','g_id');
    }

}
