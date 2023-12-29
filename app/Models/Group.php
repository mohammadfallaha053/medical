<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;
    Protected $primaryKey='g_id';
    protected $fillable=[
        'g_id',
        'group_name'
    ];
    public $timestamps = false;

    public function analyses()
    {
        return $this->hasMany(Analyse::class,'g_id','g_id');
    }
}
