<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateJuzgadoRequest;
use App\Http\Requests\UpdateJuzgadoRequest;
use App\Repositories\JuzgadoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\Circunscripcion;
class JuzgadoController extends AppBaseController
{
    /** @var JuzgadoRepository $juzgadoRepository*/
    private $juzgadoRepository;

    public function __construct(JuzgadoRepository $juzgadoRepo)
    {
        $this->juzgadoRepository = $juzgadoRepo;
    }

    /**
     * Display a listing of the Juzgado.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $juzgados = $this->juzgadoRepository->all();



        if ($request->input('Content-Type') == 'json') {
              response()->json($juzgados);
        
        } else {

        return view('juzgados.index')
            ->with('juzgados', $juzgados);

            }
    }

    public function crear(Request $request)
        {
            $input = $request->all();

            $juzgados = $this->juzgadoRepository->create($input);
        }
    /**
     * Show the form for creating a new Juzgado.
     *
     * @return Response
     */
    public function create()
    {
         $circunscripcions = Circunscripcion::pluck('nombre','id');
          return view('juzgados.create',compact('circunscripcions'));
    }

    /**
     * Store a newly created Juzgado in storage.
     *
     * @param CreateJuzgadoRequest $request
     *
     * @return Response
     */
    public function store(CreateJuzgadoRequest $request)
    {
        $input = $request->all();

        $juzgado = $this->juzgadoRepository->create($input);

        Flash::success('Juzgado creado correctamente.');

        return redirect(route('juzgados.index'));
    }

    /**
     * Display the specified Juzgado.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $juzgado = $this->juzgadoRepository->find($id);

        if (empty($juzgado)) {
            Flash::error('Juzgado no encontrado');

            return redirect(route('juzgados.index'));
        }

        return view('juzgados.show')->with('juzgado', $juzgado);
    }

    /**
     * Show the form for editing the specified Juzgado.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $juzgado = $this->juzgadoRepository->find($id);
        $circunscripcions = Circunscripcion::pluck('nombre','id');


        if (empty($juzgado)) {
            Flash::error('Juzgado no encontrado');

            return redirect(route('juzgados.index'));
        }

        return view('juzgados.edit',compact('juzgado','circunscripcions'));
    }

    /**
     * Update the specified Juzgado in storage.
     *
     * @param int $id
     * @param UpdateJuzgadoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateJuzgadoRequest $request)
    {
        $juzgado = $this->juzgadoRepository->find($id);

        if (empty($juzgado)) {
            Flash::error('Juzgado no encontrado');

            return redirect(route('juzgados.index'));
        }

        $juzgado = $this->juzgadoRepository->update($request->all(), $id);

        Flash::success('Juzgado actualizado correctamente.');

        return redirect(route('juzgados.index'));
    }

    /**
     * Remove the specified Juzgado from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $juzgado = $this->juzgadoRepository->find($id);

        if (empty($juzgado)) {
            Flash::error('Juzgado no encontrado');

            return redirect(route('juzgados.index'));
        }

        $this->juzgadoRepository->delete($id);

        Flash::error('Juzgado eliminado correctamente.');

        return redirect(route('juzgados.index'));
    }
}
