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
    public $timestamps = false;
    protected $primaryKey = 'CODIGO';
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
        return $this->hasOne(Cidade::class, 'CODIGO', 'COD_CIDADE');
    }

    public function ramo_atividade(){
        return $this->hasOne(RamoAtividade::class, 'CODIGO', 'COD_RAMO_ATIVIDADE');
    }

}
