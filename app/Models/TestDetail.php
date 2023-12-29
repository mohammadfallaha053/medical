<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestDetail extends Model
{
    use HasFactory;
    Protected $primaryKey='td_id';

    protected $fillable=[
        'td_id',
        't_id',
        'a_id',
        'result',
    ];
    public $timestamps = false;
}
