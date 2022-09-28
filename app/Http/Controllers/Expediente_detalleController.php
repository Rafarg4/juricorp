<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateExpediente_detalleRequest;
use App\Http\Requests\UpdateExpediente_detalleRequest;
use App\Repositories\Expediente_detalleRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Expediente_detalleController extends AppBaseController
{
    /** @var Expediente_detalleRepository $expedienteDetalleRepository*/
    private $expedienteDetalleRepository;

    public function __construct(Expediente_detalleRepository $expedienteDetalleRepo)
    {
        $this->expedienteDetalleRepository = $expedienteDetalleRepo;
    }

    /**
     * Display a listing of the Expediente_detalle.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $expedienteDetalles = $this->expedienteDetalleRepository->all();

        return view('expediente_detalles.index')
            ->with('expedienteDetalles', $expedienteDetalles);
    }

    /**
     * Show the form for creating a new Expediente_detalle.
     *
     * @return Response
     */
    public function create()
    {
        return view('expediente_detalles.create');
    }

    /**
     * Store a newly created Expediente_detalle in storage.
     *
     * @param CreateExpediente_detalleRequest $request
     *
     * @return Response
     */
    public function store(CreateExpediente_detalleRequest $request)
    {
        $input = $request->all();

        $expedienteDetalle = $this->expedienteDetalleRepository->create($input);

        Flash::success('Expediente Detalle saved successfully.');

        return redirect(route('expedienteDetalles.index'));
    }

    /**
     * Display the specified Expediente_detalle.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $expedienteDetalle = $this->expedienteDetalleRepository->find($id);

        if (empty($expedienteDetalle)) {
            Flash::error('Expediente Detalle not found');

            return redirect(route('expedienteDetalles.index'));
        }

        return view('expediente_detalles.show')->with('expedienteDetalle', $expedienteDetalle);
    }

    /**
     * Show the form for editing the specified Expediente_detalle.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $expedienteDetalle = $this->expedienteDetalleRepository->find($id);

        if (empty($expedienteDetalle)) {
            Flash::error('Expediente Detalle not found');

            return redirect(route('expedienteDetalles.index'));
        }

        return view('expediente_detalles.edit')->with('expedienteDetalle', $expedienteDetalle);
    }

    /**
     * Update the specified Expediente_detalle in storage.
     *
     * @param int $id
     * @param UpdateExpediente_detalleRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateExpediente_detalleRequest $request)
    {
        $expedienteDetalle = $this->expedienteDetalleRepository->find($id);

        if (empty($expedienteDetalle)) {
            Flash::error('Expediente Detalle not found');

            return redirect(route('expedienteDetalles.index'));
        }

        $expedienteDetalle = $this->expedienteDetalleRepository->update($request->all(), $id);

        Flash::success('Expediente Detalle updated successfully.');

        return redirect(route('expedienteDetalles.index'));
    }

    /**
     * Remove the specified Expediente_detalle from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $expedienteDetalle = $this->expedienteDetalleRepository->find($id);

        if (empty($expedienteDetalle)) {
            Flash::error('Expediente Detalle not found');

            return redirect(route('expedienteDetalles.index'));
        }

        $this->expedienteDetalleRepository->delete($id);

        Flash::success('Expediente Detalle deleted successfully.');

        return redirect(route('expedienteDetalles.index'));
    }
}
