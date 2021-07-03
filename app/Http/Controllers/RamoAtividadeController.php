<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RamoAtividade;

class RamoAtividadeController extends Controller
{
    public function getRamos() {
        $ramos = RamoAtividade::all();
        return json_encode($ramos);
    }
}