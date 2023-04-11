<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateExpedienteRequest;
use App\Http\Requests\UpdateExpedienteRequest;
use App\Repositories\ExpedienteRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use PDF;
use Response;
use App\Models\Circunscripcion;
use App\Models\Juzgado;
use App\Models\Expediente;
use App\Models\Cliente;
use App\Models\Gasto_expediente;
use App\Models\Pago_expediente;
use App\Models\Seguimiento;
use DB;
use Auth;
use App\Models\User;
class ExpedienteController extends AppBaseController
{
    /** @var ExpedienteRepository $expedienteRepository*/
    private $expedienteRepository;

    public function __construct(ExpedienteRepository $expedienteRepo)
    {
        $this->expedienteRepository = $expedienteRepo;
    }

    /**
     * Display a listing of the Expediente.
     *
     * @param Request $request
     *
     * @return Response
     */

    public function cliente()
    {
      if(Auth::user()->hasRole('super_admin')) {
        $expedientes = Expediente::with(['clientes'])->get();
        return view('expedientes.cliente',compact('expedientes'));
        }else{
         $users = User::join('expedientes', 'expedientes.id', '=', 'users.id_expediente')
         ->where('users.id', auth()->user()->id)
         ->get(['users.*', 'expedientes.numero','expedientes.id_circunscripcion','expedientes.id_juzgado','expedientes.anho','expedientes.caratula','expedientes.estado']);
        return view('expedientes.cliente',compact('users'));
           } 
    }
    public function index(Request $request)
    {
        $expedientes = Expediente::with(['clientes'])->get();

        return view('expedientes.index',compact('expedientes'));
            
    }

    /**
     * Show the form for creating a new Expediente.
     *
     * @return Response
     */
    public function create()
    {   
          $circunscripcions = Circunscripcion::pluck('nombrecir','id');
          $juzgados = Juzgado::pluck('nombrejuz','id');
          $clientes = Cliente::pluck('ci','id');
          return view('expedientes.create',compact('circunscripcions','juzgados','clientes'));
    }

    /**
     * Store a newly created Expediente in storage.
     *
     * @param CreateExpedienteRequest $request
     *
     * @return Response
     */
    public function store(CreateExpedienteRequest $request)
    {
        $input = Expediente::create($request->all());
        $input->clientes()->sync($request->input('clientes',[]));
        Flash::success('Expediente guardado correctamente.');

        return redirect(route('expedientes.index'));
    }

    /**
     * Display the specified Expediente.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $expediente = $this->expedienteRepository->find($id);
        $gastoExpedientes = Gasto_expediente::where('id_expediente',$id)->get();
        $pagoExpedientes = Pago_expediente::where('id_expediente',$id)->get();
        $seguimientos = Seguimiento::where('id_expediente',$id)->get();
        $pago_total = Pago_expediente::where('id_expediente',$id)->sum('monto'); 
        $gasto_total = Gasto_expediente::where('id_expediente',$id)->sum('monto_gasto');
        $ingreso = Pago_expediente::select(
              DB::raw('MONTH(fecha) as mes'),
              DB::raw('SUM(monto) as f'),
        )
      ->where('pago_expedientes.deleted_at',null)
      ->where('id_expediente',$id)
      ->groupBy('mes')->get();
     $egreso = Gasto_expediente::select(
              DB::raw('MONTH(fecha_gasto) as mes'),
              DB::raw('SUM(monto_gasto) as monto'),
        )
      ->where('gasto_expedientes.deleted_at',null)
      ->where('id_expediente',$id)
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
        if (empty($expediente)) {
            Flash::error('Expediente no encontrado');

            return redirect(route('expedientes.index'));
        }
        return view('expedientes.show')->with('expediente', $expediente)->with('gastoExpedientes', $gastoExpedientes)->with('pagoExpedientes', $pagoExpedientes)->with('pago_total', $pago_total)->with('gasto_total', $gasto_total)->with('ingreso_var', $ingreso_var)->with('egreso_var', $egreso_var)->with('seguimientos', $seguimientos);
    }

    /**
     * Show the form for editing the specified Expediente.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $expediente = $this->expedienteRepository->find($id);
        $circunscripcions = Circunscripcion::pluck('nombrecir','id');
        $juzgados = Juzgado::pluck('nombrejuz','id');
        $clientes = Cliente::pluck('nombre','id');
        if (empty($expediente)) {
            Flash::error('Expediente no encontrado');

            return redirect(route('expedientes.index'));
        }

        return view('expedientes.edit', compact('expediente','circunscripcions','juzgados','clientes'));
    }

    /**
     * Update the specified Expediente in storage.
     *
     * @param int $id
     * @param UpdateExpedienteRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateExpedienteRequest $request)
    {
        $expediente = $this->expedienteRepository->find($id);
        $expediente->clientes()->sync($request->input('clientes',[]));
        if (empty($expediente)) {
            Flash::error('Expediente no encontrado');

            return redirect(route('expedientes.index'));
        }

        $expediente = $this->expedienteRepository->update($request->all(), $id);
        $expedientes = Expediente::with(['clientes'])->get();

        Flash::success('Expediente actualizado correctamente.');

        return view('expedientes.index',compact('expediente','expedientes'));
    }

    /**
     * Remove the specified Expediente from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $expediente = $this->expedienteRepository->find($id);

        if (empty($expediente)) {
            Flash::error('Expediente no encontrado');

            return redirect(route('expedientes.index'));
        }

        $this->expedienteRepository->delete($id);

        Flash::error('Expediente eliminado correctamente.');

        return redirect(route('expedientes.index'));
    }
     
}
