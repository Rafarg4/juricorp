<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateGasto_expedienteRequest;
use App\Http\Requests\UpdateGasto_expedienteRequest;
use App\Repositories\Gasto_expedienteRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\Expediente;
class Gasto_expedienteController extends AppBaseController
{
    /** @var Gasto_expedienteRepository $gastoExpedienteRepository*/
    private $gastoExpedienteRepository;

    public function __construct(Gasto_expedienteRepository $gastoExpedienteRepo)
    {
        $this->gastoExpedienteRepository = $gastoExpedienteRepo;
    }

    /**
     * Display a listing of the Gasto_expediente.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $gastoExpedientes = $this->gastoExpedienteRepository->all();

        return view('gasto_expedientes.index')
            ->with('gastoExpedientes', $gastoExpedientes);
    }

    /**
     * Show the form for creating a new Gasto_expediente.
     *
     * @return Response
     */
    public function create()
    {
          $expediente = Expediente::pluck('numero','id');
          return view('gasto_expedientes.create',compact('expediente'));
    }

    /**
     * Store a newly created Gasto_expediente in storage.
     *
     * @param CreateGasto_expedienteRequest $request
     *
     * @return Response
     */
    public function store(CreateGasto_expedienteRequest $request)
    {
         $input = $request->all();
        if($request->hasFile('archivo_gasto')){
            $input['archivo_gasto']=$request->file('archivo_gasto')->store('uploads','public');   
        }

        $gastoExpediente = $this->gastoExpedienteRepository->create($input);

        Flash::success('Gasto Expediente saved successfully.');

       
    }

    /**
     * Display the specified Gasto_expediente.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $gastoExpediente = $this->gastoExpedienteRepository->find($id);

        if (empty($gastoExpediente)) {
            Flash::error('Gasto Expediente not found');

            return redirect(route('gastoExpedientes.index'));
        }

        return view('gasto_expedientes.show')->with('gastoExpediente', $gastoExpediente);
    }

public function archivo(Request $request)
    {
        
        $gastoExpediente = $this->gastoExpedienteRepository->find($request->id);
        return response()->json(['archivo' => $gastoExpediente->archivo_gasto], 201);        
    }

    /**
     * Show the form for editing the specified Gasto_expediente.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $gastoExpediente = $this->gastoExpedienteRepository->find($id);

        if (empty($gastoExpediente)) {
            Flash::error('Gasto Expediente not found');

            return redirect(route('gastoExpedientes.index'));
        }

        return view('gasto_expedientes.edit')->with('gastoExpediente', $gastoExpediente);
    }

    /**
     * Update the specified Gasto_expediente in storage.
     *
     * @param int $id
     * @param UpdateGasto_expedienteRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateGasto_expedienteRequest $request)
    {
        $gastoExpediente = $this->gastoExpedienteRepository->find($id);

        if (empty($gastoExpediente)) {
            Flash::error('Gasto Expediente not found');

            return redirect(route('gastoExpedientes.index'));
        }

        $gastoExpediente = $this->gastoExpedienteRepository->update($request->all(), $id);

        Flash::success('Gasto Expediente updated successfully.');

        return redirect(route('gastoExpedientes.index'));
    }

    /**
     * Remove the specified Gasto_expediente from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id,Request $request)
    {
        $gastoExpediente = $this->gastoExpedienteRepository->find($id);

        if (empty($gastoExpediente)) {
            Flash::error('Gasto Expediente not found');

            return redirect(route('gastoExpedientes.index'));
        }

        $this->gastoExpedienteRepository->delete($id);

        Flash::success('Gasto Expediente deleted successfully.');

        return redirect(route('expedientes.show',$request->id_expediente));
    }
}
