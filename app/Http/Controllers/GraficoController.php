<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class GraficoController extends Controller
{
    public function grafico (){
    $activo= DB::table('expedientes')
    ->where('estado','finalizado')
    ->count();
     $finalizado= DB::table('expedientes')
    ->where('estado','activo')
    ->count();
     $paralizado= DB::table('expedientes')
    ->where('estado','paralizado')
    ->count();

    	return view('graficos.index',compact('activo','paralizado','finalizado'));
    }
}
