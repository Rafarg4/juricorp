<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Gasto_expediente;
use App\Models\Pago_expediente;
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
     $egreso = Gasto_expediente::sum('monto_gasto');


      $ingreso = Pago_expediente::select(
              DB::raw("MONTHNAME(created_at) as mes"),
              DB::raw("SUM(monto) as monto"),
        )->groupBy('mes')->get();
        
    
  
    	return view('graficos.index',compact('activo','paralizado','finalizado','ingreso','egreso'));
    }

}
