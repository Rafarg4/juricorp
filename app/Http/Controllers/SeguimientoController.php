<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSeguimientoRequest;
use App\Http\Requests\UpdateSeguimientoRequest;
use App\Repositories\SeguimientoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\Expediente;

class SeguimientoController extends AppBaseController
{
    /** @var SeguimientoRepository $seguimientoRepository*/
    private $seguimientoRepository;

    public function __construct(SeguimientoRepository $seguimientoRepo)
    {
        $this->seguimientoRepository = $seguimientoRepo;
    }

    /**
     * Display a listing of the Seguimiento.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $seguimientos = $this->seguimientoRepository->all();

        return view('seguimientos.index')
            ->with('seguimientos', $seguimientos);
    }

    /**
     * Show the form for creating a new Seguimiento.
     *
     * @return Response
     */
    public function create()
    {
        $expediente=Expediente::pluck('numero','id');
        return view('seguimientos.create',compact('expediente'));
    }

    /**
     * Store a newly created Seguimiento in storage.
     *
     * @param CreateSeguimientoRequest $request
     *
     * @return Response
     */
    public function store(CreateSeguimientoRequest $request)
    {
        $input = $request->all();
        if($request->hasFile('escrito')){
            $input['escrito']=$request->file('escrito')->store('uploads','public');   
        }
        if($request->hasFile('escrito_actualizado')){
            $input['escrito_actualizado']=$request->file('escrito_actualizado')->store('uploads','public');   
        }
        $seguimiento = $this->seguimientoRepository->create($input);

        Flash::success('Seguimiento saved successfully.');

        return redirect(route('seguimientos.index'));
    }

    /**
     * Display the specified Seguimiento.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $seguimiento = $this->seguimientoRepository->find($id);

        if (empty($seguimiento)) {
            Flash::error('Seguimiento not found');

            return redirect(route('seguimientos.index'));
        }

        return view('seguimientos.show')->with('seguimiento', $seguimiento);
    }

    /**
     * Show the form for editing the specified Seguimiento.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $seguimiento = $this->seguimientoRepository->find($id);

        if (empty($seguimiento)) {
            Flash::error('Seguimiento not found');

            return redirect(route('seguimientos.index'));
        }

        return view('seguimientos.edit')->with('seguimiento', $seguimiento);
    }

    /**
     * Update the specified Seguimiento in storage.
     *
     * @param int $id
     * @param UpdateSeguimientoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSeguimientoRequest $request)
    {
        $seguimiento = $this->seguimientoRepository->find($id);

        if (empty($seguimiento)) {
            Flash::error('Seguimiento not found');

            return redirect(route('seguimientos.index'));
        }

        $seguimiento = $this->seguimientoRepository->update($request->all(), $id);

        Flash::success('Seguimiento updated successfully.');

        return redirect(route('seguimientos.index'));
    }

    /**
     * Remove the specified Seguimiento from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $seguimiento = $this->seguimientoRepository->find($id);

        if (empty($seguimiento)) {
            Flash::error('Seguimiento not found');

            return redirect(route('seguimientos.index'));
        }

        $this->seguimientoRepository->delete($id);

        Flash::success('Seguimiento deleted successfully.');

        return redirect(route('seguimientos.index'));
    }
}
