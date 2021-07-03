<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PagamentoLojista extends Model
{
    protected $table = 'pagamento_lojista';
    protected $primaryKey = 'CODIGO';
    public $timestamps = false;
    
}