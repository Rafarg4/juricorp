<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateExpedienteRequest;
use App\Http\Requests\UpdateExpedienteRequest;
use App\Repositories\ExpedienteRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\Circunscripcion;
use App\Models\Juzgado;
use App\Models\Expediente;
use App\Models\Cliente;
use App\Models\Gasto_expediente;
use App\Models\Pago_expediente;

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
          $circunscripcions = Circunscripcion::pluck('nombre','id');
          $juzgados = Juzgado::pluck('nombre','id');
          $clientes = Cliente::pluck('nombre','id');
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
        Flash::success('Expediente saved successfully.');

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
        $pagoExpedientes = Pago_expediente::where('expediente_id',$id)->get();;

        if (empty($expediente)) {
            Flash::error('Expediente not found');

            return redirect(route('expedientes.index'));
        }

        return view('expedientes.show')->with('expediente', $expediente)->with('gastoExpedientes', $gastoExpedientes)->with('pagoExpedientes', $pagoExpedientes);
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
        $circunscripcions = Circunscripcion::pluck('nombre','id');
        $juzgados = Juzgado::pluck('nombre','id');
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
            Flash::error('Expediente not found');

            return redirect(route('expedientes.index'));
        }

        $this->expedienteRepository->delete($id);

        Flash::success('Expediente deleted successfully.');

        return redirect(route('expedientes.index'));
    }

}
