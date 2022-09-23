<?php

namespace App\Repositories;

use App\Models\Expediente;
use App\Repositories\BaseRepository;

/**
 * Class ExpedienteRepository
 * @package App\Repositories
 * @version September 23, 2022, 3:29 am UTC
*/

class ExpedienteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'numero',
        'anho',
        'caratula',
        'id_circunscripcion',
        'id_juzgado'
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
        return Expediente::class;
    }
}
