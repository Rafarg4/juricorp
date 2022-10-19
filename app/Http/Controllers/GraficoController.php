<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class GraficoController extends Controller
{
    public function grafico (){
    $activo= DB::table('expedientes')
    ->where('estado','Activo')
    ->where('expedientes.deleted_at',null)
    ->count();
     $finalizado= DB::table('expedientes')
    ->where('estado','Finalizado')
    ->where('expedientes.deleted_at',null)
    ->count();
     $paralizado= DB::table('expedientes')
    ->where('estado','Paralizado')
    ->where('expedientes.deleted_at',null)
    ->count();

    	return view('graficos.index',compact('activo','paralizado','finalizado'));
    }
}
