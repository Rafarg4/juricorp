<?php

namespace App\Repositories;

use App\Models\Pago_expediente;
use App\Repositories\BaseRepository;

/**
 * Class Pago_expedienteRepository
 * @package App\Repositories
 * @version October 3, 2022, 1:37 am UTC
*/

class Pago_expedienteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'concepto',
        'monto',
        'fecha',
        'expediente_id',
        'archivo'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Pago_expediente::class;
    }
}
