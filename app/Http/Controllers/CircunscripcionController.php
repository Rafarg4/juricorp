<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCircunscripcionRequest;
use App\Http\Requests\UpdateCircunscripcionRequest;
use App\Repositories\CircunscripcionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class CircunscripcionController extends AppBaseController
{
    /** @var CircunscripcionRepository $circunscripcionRepository*/
    private $circunscripcionRepository;

    public function __construct(CircunscripcionRepository $circunscripcionRepo)
    {
        $this->circunscripcionRepository = $circunscripcionRepo;
    }

    /**
     * Display a listing of the Circunscripcion.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $circunscripcions = $this->circunscripcionRepository->all();

        return view('circunscripcions.index')
            ->with('circunscripcions', $circunscripcions);
    }

    /**
     * Show the form for creating a new Circunscripcion.
     *
     * @return Response
     */
    public function create()
    {
        return view('circunscripcions.create');
    }

    /**
     * Store a newly created Circunscripcion in storage.
     *
     * @param CreateCircunscripcionRequest $request
     *
     * @return Response
     */
    public function store(CreateCircunscripcionRequest $request)
    {
        $input = $request->all();

        $circunscripcion = $this->circunscripcionRepository->create($input);

        Flash::success('Circunscripcion saved successfully.');

        return redirect(route('circunscripcions.index'));
    }

    /**
     * Display the specified Circunscripcion.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $circunscripcion = $this->circunscripcionRepository->find($id);

        if (empty($circunscripcion)) {
            Flash::error('Circunscripcion not found');

            return redirect(route('circunscripcions.index'));
        }

        return view('circunscripcions.show')->with('circunscripcion', $circunscripcion);
    }

    /**
     * Show the form for editing the specified Circunscripcion.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $circunscripcion = $this->circunscripcionRepository->find($id);

        if (empty($circunscripcion)) {
            Flash::error('Circunscripcion not found');

            return redirect(route('circunscripcions.index'));
        }

        return view('circunscripcions.edit')->with('circunscripcion', $circunscripcion);
    }

    /**
     * Update the specified Circunscripcion in storage.
     *
     * @param int $id
     * @param UpdateCircunscripcionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCircunscripcionRequest $request)
    {
        $circunscripcion = $this->circunscripcionRepository->find($id);

        if (empty($circunscripcion)) {
            Flash::error('Circunscripcion not found');

            return redirect(route('circunscripcions.index'));
        }

        $circunscripcion = $this->circunscripcionRepository->update($request->all(), $id);

        Flash::success('Circunscripcion updated successfully.');

        return redirect(route('circunscripcions.index'));
    }

    /**
     * Remove the specified Circunscripcion from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $circunscripcion = $this->circunscripcionRepository->find($id);

        if (empty($circunscripcion)) {
            Flash::error('Circunscripcion not found');

            return redirect(route('circunscripcions.index'));
        }

        $this->circunscripcionRepository->delete($id);

        Flash::success('Circunscripcion deleted successfully.');

        return redirect(route('circunscripcions.index'));
    }
}
