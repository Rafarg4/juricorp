<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ExpedienteRepository;
use App\Models\Gasto_expediente;
use App\Models\Pago_expediente;
use PDF;
class PdfController extends Controller
{
	 /** @var ExpedienteRepository $expedienteRepository*/
    private $expedienteRepository;

    public function __construct(ExpedienteRepository $expedienteRepo)
    {
        $this->expedienteRepository = $expedienteRepo;
    }
  public function show($id){
      $expediente = $this->expedienteRepository->find($id);
        $gastoExpedientes = Gasto_expediente::where('id_expediente',$id)->get();
        $pagoExpedientes = Pago_expediente::where('id_expediente',$id)->get();;
        $pago_total = Pago_expediente::where('id_expediente',$id)->sum('monto'); 
        $gasto_total = Gasto_expediente::where('id_expediente',$id)->sum('monto_gasto');
          $pdf = PDF::loadView('expedientes.pdf', compact('expediente','gastoExpedientes','pagoExpedientes','pago_total','gasto_total'));
              return $pdf->download('Detalle-expediente.pdf');
    }    //
}
