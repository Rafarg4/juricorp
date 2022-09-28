<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePago_expedinteRequest;
use App\Http\Requests\UpdatePago_expedinteRequest;
use App\Repositories\Pago_expedinteRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Pago_expedinteController extends AppBaseController
{
    /** @var Pago_expedinteRepository $pagoExpedinteRepository*/
    private $pagoExpedinteRepository;

    public function __construct(Pago_expedinteRepository $pagoExpedinteRepo)
    {
        $this->pagoExpedinteRepository = $pagoExpedinteRepo;
    }

    /**
     * Display a listing of the Pago_expedinte.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $pagoExpedintes = $this->pagoExpedinteRepository->all();

        return view('pago_expedintes.index')
            ->with('pagoExpedintes', $pagoExpedintes);
    }

    /**
     * Show the form for creating a new Pago_expedinte.
     *
     * @return Response
     */
    public function create()
    {
        return view('pago_expedintes.create');
    }

    /**
     * Store a newly created Pago_expedinte in storage.
     *
     * @param CreatePago_expedinteRequest $request
     *
     * @return Response
     */
    public function store(CreatePago_expedinteRequest $request)
    {
        $input = $request->all();

        $pagoExpedinte = $this->pagoExpedinteRepository->create($input);

        Flash::success('Pago Expedinte saved successfully.');

        return redirect(route('pagoExpedintes.index'));
    }

    /**
     * Display the specified Pago_expedinte.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $pagoExpedinte = $this->pagoExpedinteRepository->find($id);

        if (empty($pagoExpedinte)) {
            Flash::error('Pago Expedinte not found');

            return redirect(route('pagoExpedintes.index'));
        }

        return view('pago_expedintes.show')->with('pagoExpedinte', $pagoExpedinte);
    }

    /**
     * Show the form for editing the specified Pago_expedinte.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $pagoExpedinte = $this->pagoExpedinteRepository->find($id);

        if (empty($pagoExpedinte)) {
            Flash::error('Pago Expedinte not found');

            return redirect(route('pagoExpedintes.index'));
        }

        return view('pago_expedintes.edit')->with('pagoExpedinte', $pagoExpedinte);
    }

    /**
     * Update the specified Pago_expedinte in storage.
     *
     * @param int $id
     * @param UpdatePago_expedinteRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePago_expedinteRequest $request)
    {
        $pagoExpedinte = $this->pagoExpedinteRepository->find($id);

        if (empty($pagoExpedinte)) {
            Flash::error('Pago Expedinte not found');

            return redirect(route('pagoExpedintes.index'));
        }

        $pagoExpedinte = $this->pagoExpedinteRepository->update($request->all(), $id);

        Flash::success('Pago Expedinte updated successfully.');

        return redirect(route('pagoExpedintes.index'));
    }

    /**
     * Remove the specified Pago_expedinte from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $pagoExpedinte = $this->pagoExpedinteRepository->find($id);

        if (empty($pagoExpedinte)) {
            Flash::error('Pago Expedinte not found');

            return redirect(route('pagoExpedintes.index'));
        }

        $this->pagoExpedinteRepository->delete($id);

        Flash::success('Pago Expedinte deleted successfully.');

        return redirect(route('pagoExpedintes.index'));
    }
}
