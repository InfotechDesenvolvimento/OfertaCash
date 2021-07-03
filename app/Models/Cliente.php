<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Cliente extends Authenticatable
{
    use Notifiable;

    
    const UPDATED_AT = null;

    protected $fillable = ['USUARIO', 'SENHA'];
    protected $hidden = ['SENHA', 'remember_token'];

    protected $primaryKey = 'codigo';
    protected $table = 'clientes';

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function cidade(){
        return $this->hasOne(Cidade::class, 'codigo', 'cod_cidade');
    }

    public function ramo_atividade(){
        return $this->hasOne(RamoAtividade::class, 'CODIGO', 'COD_RAMO_ATIVIDADE');
    }

}
