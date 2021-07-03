<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VendaLojista extends Model
{
    protected $table = 'venda_lojista';
    protected $primaryKey = 'CODIGO';
    public $timestamps = false;

    public function cliente(){
        return $this->hasOne(Cliente::class, 'codigo', 'COD_CLIENTE');
    }
}