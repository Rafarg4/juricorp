<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Audiencias;
use App\Repositories\AudienciasRepository;
class Consulta_audiencaController extends Controller
{
    public function consulta(Request $request){


        $audiencias = Audiencias::where('deleted_at',null)->get();
        

        return view('audiencias.consulta',compact('audiencias'));
    }
}
