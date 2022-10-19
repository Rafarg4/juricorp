<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAudienciasRequest;
use App\Http\Requests\UpdateAudienciasRequest;
use App\Repositories\AudienciasRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\Audiencias;
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
        foreach($audiencias as $audiencia) {
            $events[] = [
                'id' => $audiencia->id,
                'title' => $audiencia->descripcion_audiencia,
                'start' => $audiencia->inicio_audiencia,
                'end' => $audiencia->fin_audiencia
            ];
        }
            
            
        
        return view('audiencias.index', ['events' => $events]);
    }

    public function store(Request $request)
    {
        

        $audiencia = Audiencias::create($request->all());
         return response()->json([
            'id' => $audiencia->id,
            'inicio_audiencia' => $audiencia->inicio_audiencia,
            'fin_audiencia' => $audiencia->fin_audiencia,
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
            'fin_audiencia' => $request->fin_audiencia,
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


   