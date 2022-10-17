<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAudienciasRequest;
use App\Http\Requests\UpdateAudienciasRequest;
use App\Repositories\AudienciasRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
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
        if($request->ajax()) {  
            $data = Audiencia::whereDate('inicio_audiencia', '>=', $request->start)
                ->whereDate('fin_audiencia',   '<=', $request->end)
                ->get(['id', 'descripcion_audiencia', 'inicio_audiencia', 'fin_audiencia']);
            return response()->json($data);
        
    }
        return view('audiencias.index');
    }

   

     public function audiencia(Request $request)
    {
 
        switch ($request->type) {
           case 'create':
              $event = Audiencia::create([
                  'inicio_audiencia' => $request->inicio_audiencia,
                  'fin_audiencia' => $request->fin_audiencia,
                  'descripcion_audiencia' => $request->descripcion_audiencia,
                  'id_expediente' => $request->id_expediente,
              ]);
 
              return response()->json($event);
             break;
  
           case 'edit':
              $event = Audiencia::find($request->id)->update([
                  'inicio_audiencia' => $request->inicio_audiencia,
                  'fin_audiencia' => $request->fin_audiencia,
                  'descripcion_audiencia' => $request->descripcion_audiencia,
                  'id_expediente' => $request->id_expediente,
              ]);
 
              return response()->json($event);
             break;
  
           case 'delete':
              $event = Audiencia::find($request->id)->delete();
  
              return response()->json($event);
             break;
             
           default:
             # ...
             break;
        }
    }
   public function show($id)
    {
      
    }

}
