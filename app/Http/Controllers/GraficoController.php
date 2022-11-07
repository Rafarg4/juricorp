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

     $ingreso = Pago_expediente::select(
              DB::raw('MONTH(fecha) as mes'),
              DB::raw('SUM(monto) as f'),
        )
      ->where('pago_expedientes.deleted_at',null)
      ->groupBy('mes')->get();
     $egreso = Gasto_expediente::select(
              DB::raw('MONTH(fecha_gasto) as mes'),
              DB::raw('SUM(monto_gasto) as monto'),
        )
      ->where('gasto_expedientes.deleted_at',null)
      ->groupBy('mes')->get();
        
     
      $mes = [1,2,3,4,5,6,7,8,9,10,11,12];
      $ingreso_var = [0,0,0,0,0,0,0,0,0,0,0,0];
      $egreso_var=[0,0,0,0,0,0,0,0,0,0,0,0];  
      

           

       foreach ($egreso as $s) {
            $egreso_var[$s->mes-1] = $s->monto;
           }     
           
      foreach ($ingreso as $t) {
            
            $ingreso_var[$t->mes-1] = $t->f;
             

      }
    
  
    	return view('graficos.index')->with('activo',$activo)->with('paralizado',$paralizado)->with('finalizado',$finalizado)->with('egreso_var',$egreso_var)->with('ingreso_var',$ingreso_var);
    }

}
