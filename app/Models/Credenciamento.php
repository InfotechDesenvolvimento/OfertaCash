<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Credenciamento extends Model
{
    protected $table = 'credenciamento';
    
    protected $primaryKey = 'CODIGO';

    public $timestamps = false;
}