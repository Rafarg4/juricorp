<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expediente;
use DB;
class ReporteController extends Controller
{
    public function index () {
     
     $reporte1=DB::table('expedientes')
        ->join('gasto_expedientes','gasto_expedientes.id_expediente','=', 'expedientes.id')
        ->join('juzgados','juzgados.id','=', 'expedientes.id_juzgado')
        ->join('circunscripcions','circunscripcions.id','=', 'expedientes.id_circunscripcion')
        ->select('expedientes.id','gasto_expedientes.id','gasto_expedientes.concepto_gasto','gasto_expedientes.monto_gasto','gasto_expedientes.fecha_gasto','expedientes.numero','expedientes.anho','expedientes.caratula','expedientes.estado','juzgados.nombrejuz','circunscripcions.nombrecir') 
         ->where('expedientes.deleted_at',null);      

    $reporte=DB::table('expedientes')
        ->join('pago_expedientes','pago_expedientes.id_expediente','=', 'expedientes.id')
        ->join('juzgados','juzgados.id','=', 'expedientes.id_juzgado')
        ->join('circunscripcions','circunscripcions.id','=', 'expedientes.id_circunscripcion')
        ->select('expedientes.id','pago_expedientes.id','pago_expedientes.concepto','pago_expedientes.monto','pago_expedientes.fecha','expedientes.numero','expedientes.anho','expedientes.caratula','expedientes.estado','juzgados.nombrejuz','circunscripcions.nombrecir')
        ->union($reporte1)
        ->where('expedientes.deleted_at',null)
        ->get();
        return view('reportes.index') ->with('reporte', $reporte);


    }
}

