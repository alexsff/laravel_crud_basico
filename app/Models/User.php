<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // public function endereco()
    // {
    //     return $this->hasOne(Address::class, 'id_usuario'); //Relação One to One (Um para Um)

    // }
    public function enderecos()
    {
        return $this->hasMany(Address::class, 'id_usuario'); //Relação One to Many (Um para Vários)
    }

    public function regras()
    {
        return $this->belongsToMany(Regra::class, 'regra_users','id_usuario','id_regra'); // Relação Many to Many (Vários para Vários)
    }
}
