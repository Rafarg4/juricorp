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
     $egreso = Gasto_expediente::select(
              DB::raw("MONTH(fecha_gasto) as mes"),
              DB::raw("SUM(monto_gasto) as monto"),
        )->groupBy('mes')->get();
        


      $ingreso = Pago_expediente::select(
              DB::raw("MONTH(fecha) as mes"),
              DB::raw("SUM(monto) as monto"),
        )->groupBy('mes')->get();
        

      $mes = [1,2,3,4,5,6,7,8,9,10,11,12];
      $ingresovar = [];
      $egresovar=[];  
      foreach ($ingreso as $s) {
           foreach($mes as $m){
              if($m == $s->mes){
                $ingreso_var[$m] = $s->monto;


           } else  {
                $ingreso_var[$m] = 0;

           }
      }
           }

       foreach ($egreso as $s) {
           foreach($mes as $m){
              if($m == $s->mes){
                $egreso_var[$m] = $s->monto;


           } else  {
                $egreso_var[$m] = 0;

           }
      }
           }     


    
  
    	return view('graficos.index')->with('activo',$activo)->with('paralizado',$paralizado)->with('finalizado',$finalizado)->with('egreso_var',$egreso_var)->with('ingreso_var',$ingreso_var);
    }

}
