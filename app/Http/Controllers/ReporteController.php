<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expediente;
use DB;
class ReporteController extends Controller
{
    public function index () {
     
     $reporte=DB::select("select * from 
(SELECT expedientes.id,numero,anho, caratula,estado,juzgados.nombrejuz,circunscripcions.nombrecir, GROUP_CONCAT(DISTINCT clientes.nombre) as cliente_nombre from expedientes JOIN cliente_expediente on cliente_expediente.expediente_id = expedientes.id join clientes on cliente_expediente.cliente_id = clientes.id join juzgados on juzgados.id = expedientes.id_juzgado join circunscripcions on circunscripcions.id = expedientes.id_circunscripcion where expedientes.deleted_at IS NULL group by expedientes.id, expedientes.numero,expedientes.anho,expedientes.caratula,expedientes.estado,juzgados.nombrejuz,circunscripcions.nombrecir) as t join gasto_expedientes on gasto_expedientes.id_expediente = t.id 
UNION
select * from 
(SELECT expedientes.id,numero,anho, caratula,estado,juzgados.nombrejuz,circunscripcions.nombrecir, GROUP_CONCAT(DISTINCT clientes.nombre) as cliente_nombre from expedientes JOIN cliente_expediente on cliente_expediente.expediente_id = expedientes.id join clientes on cliente_expediente.cliente_id = clientes.id join juzgados on juzgados.id = expedientes.id_juzgado join circunscripcions on circunscripcions.id = expedientes.id_circunscripcion where expedientes.deleted_at IS NULL  group by expedientes.id, expedientes.numero,expedientes.anho,expedientes.caratula,expedientes.estado,juzgados.nombrejuz,circunscripcions.nombrecir) as f join pago_expedientes on pago_expedientes.id_expediente = f.id  
ORDER BY `caratula` ASC");
        return view('reportes.index')->with('reporte', $reporte);


    }
}

