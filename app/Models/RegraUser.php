<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegraUser extends Model
{
    protected $fillable = ['id_usuario','id_regra'];
    //use HasFactory;
}
