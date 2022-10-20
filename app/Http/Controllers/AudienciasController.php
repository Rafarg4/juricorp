<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAudienciasRequest;
use App\Http\Requests\UpdateAudienciasRequest;
use App\Repositories\AudienciasRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\Audiencias;
use App\Models\Expediente;
use Flash;
use Response;

class AudienciasController extends AppBaseController
{
    /** @var AudienciasRepository $audienciasRepository*/
    private $audienciasRepository;

    public function __construct(AudienciasRepository $audienciasRepo)
    {
        $this->audienciasRepository = $audienciasRepo;
    }

    /**
     * Display a listing of the Audiencias.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
  {

            $audiencias = Audiencias::all();
            $events = array();
            $expedientes = Expediente::where('deleted_at',null)->pluck('numero','id');
        foreach($audiencias as $audiencia) {
            $events[] = [
                'id' => $audiencia->id,
                'title' => "\n".$audiencia->descripcion_audiencia."\n".$audiencia->id_expediente,
                'start' => $audiencia->inicio_audiencia,
                'id_expediente' => $audiencia->id_expediente
            ];
        }
            
            
        
        return view('audiencias.index', ['events' => $events ,'expediente'=>$expedientes]);
    }

    public function mostrar(Request $request){
       $audiencias = Audiencias::all();
            $events = array();
        foreach($audiencias as $audiencia) {
            $events[] = [
                'id' => $audiencia->id,
                'title' => $audiencia->descripcion_audiencia,
                'start' => $audiencia->inicio_audiencia,
                'id_expediente' => $audiencia->id_expediente
            ];
        }
        return response()->json($events);

}
    public function store(Request $request)
    {
        

        $audiencia = Audiencias::create($request->all());

         return response()->json([
            'id' => $audiencia->id,
            'inicio_audiencia' => $audiencia->inicio_audiencia,
            'id_expediente' => $audiencia->id_expediente,
            'descripcion_audiencia' => $audiencia->descripcion_audiencia
        ]);
     
    }

   

        
 public function update(Request $request ,$id)
    {
        $audiencia = Audiencias::find($id);
        if(! $audiencia) {
            return response()->json([
                'error' => 'Unable to locate the event'
            ], 404);
        }
        $audiencia->update([
            'inicio_audiencia' => $request->inicio_audiencia,
            'id_expediente' => $request->id_expediente,
            'descripcion_audiencia' => $request->descripcion_audiencia
        ]);
        return response()->json('Event updated');
    }
    public function destroy($id)
    {
        $audiencia = Audiencias::find($id);
        if(! $audiencia) {
            return response()->json([
                'error' => 'Unable to locate the event'
            ], 404);
        }
        $audiencia->delete();
        return $id;
    }
}


   