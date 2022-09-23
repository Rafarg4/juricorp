<?php

namespace App\Repositories;

use App\Models\Gasto_expediente;
use App\Repositories\BaseRepository;

/**
 * Class Gasto_expedienteRepository
 * @package App\Repositories
 * @version September 23, 2022, 3:53 am UTC
*/

class Gasto_expedienteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'concepto',
        'monto',
        'fecha',
        'id_expediente',
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
        return Gasto_expediente::class;
    }
}
