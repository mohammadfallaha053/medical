<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    Protected $primaryKey='c_id';

    protected $fillable=[
        'c_id',
        'category_name'
    ];
    public $timestamps = false;


    public function analyses()
    {
        return $this->hasMany(Analyse::class,'c_id','c_id');
    }
}
