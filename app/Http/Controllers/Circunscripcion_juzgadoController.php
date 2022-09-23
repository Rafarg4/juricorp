<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCircunscripcion_juzgadoRequest;
use App\Http\Requests\UpdateCircunscripcion_juzgadoRequest;
use App\Repositories\Circunscripcion_juzgadoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Circunscripcion_juzgadoController extends AppBaseController
{
    /** @var Circunscripcion_juzgadoRepository $circunscripcionJuzgadoRepository*/
    private $circunscripcionJuzgadoRepository;

    public function __construct(Circunscripcion_juzgadoRepository $circunscripcionJuzgadoRepo)
    {
        $this->circunscripcionJuzgadoRepository = $circunscripcionJuzgadoRepo;
    }

    /**
     * Display a listing of the Circunscripcion_juzgado.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $circunscripcionJuzgados = $this->circunscripcionJuzgadoRepository->all();

        return view('circunscripcion_juzgados.index')
            ->with('circunscripcionJuzgados', $circunscripcionJuzgados);
    }

    /**
     * Show the form for creating a new Circunscripcion_juzgado.
     *
     * @return Response
     */
    public function create()
    {
        return view('circunscripcion_juzgados.create');
    }

    /**
     * Store a newly created Circunscripcion_juzgado in storage.
     *
     * @param CreateCircunscripcion_juzgadoRequest $request
     *
     * @return Response
     */
    public function store(CreateCircunscripcion_juzgadoRequest $request)
    {
        $input = $request->all();

        $circunscripcionJuzgado = $this->circunscripcionJuzgadoRepository->create($input);

        Flash::success('Circunscripcion Juzgado saved successfully.');

        return redirect(route('circunscripcionJuzgados.index'));
    }

    /**
     * Display the specified Circunscripcion_juzgado.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $circunscripcionJuzgado = $this->circunscripcionJuzgadoRepository->find($id);

        if (empty($circunscripcionJuzgado)) {
            Flash::error('Circunscripcion Juzgado not found');

            return redirect(route('circunscripcionJuzgados.index'));
        }

        return view('circunscripcion_juzgados.show')->with('circunscripcionJuzgado', $circunscripcionJuzgado);
    }

    /**
     * Show the form for editing the specified Circunscripcion_juzgado.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $circunscripcionJuzgado = $this->circunscripcionJuzgadoRepository->find($id);

        if (empty($circunscripcionJuzgado)) {
            Flash::error('Circunscripcion Juzgado not found');

            return redirect(route('circunscripcionJuzgados.index'));
        }

        return view('circunscripcion_juzgados.edit')->with('circunscripcionJuzgado', $circunscripcionJuzgado);
    }

    /**
     * Update the specified Circunscripcion_juzgado in storage.
     *
     * @param int $id
     * @param UpdateCircunscripcion_juzgadoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCircunscripcion_juzgadoRequest $request)
    {
        $circunscripcionJuzgado = $this->circunscripcionJuzgadoRepository->find($id);

        if (empty($circunscripcionJuzgado)) {
            Flash::error('Circunscripcion Juzgado not found');

            return redirect(route('circunscripcionJuzgados.index'));
        }

        $circunscripcionJuzgado = $this->circunscripcionJuzgadoRepository->update($request->all(), $id);

        Flash::success('Circunscripcion Juzgado updated successfully.');

        return redirect(route('circunscripcionJuzgados.index'));
    }

    /**
     * Remove the specified Circunscripcion_juzgado from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $circunscripcionJuzgado = $this->circunscripcionJuzgadoRepository->find($id);

        if (empty($circunscripcionJuzgado)) {
            Flash::error('Circunscripcion Juzgado not found');

            return redirect(route('circunscripcionJuzgados.index'));
        }

        $this->circunscripcionJuzgadoRepository->delete($id);

        Flash::success('Circunscripcion Juzgado deleted successfully.');

        return redirect(route('circunscripcionJuzgados.index'));
    }
}
