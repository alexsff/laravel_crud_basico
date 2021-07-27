<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = ['logradouro','numero','bairro','cidade','estado','id_usuario'];
    //use HasFactory;
}
