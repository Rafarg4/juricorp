<?php

namespace App\Repositories;

use App\Models\Expediente_detalle;
use App\Repositories\BaseRepository;

/**
 * Class Expediente_detalleRepository
 * @package App\Repositories
 * @version September 25, 2022, 12:27 am UTC
*/

class Expediente_detalleRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_cliente',
        'id_expediente'
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
        return Expediente_detalle::class;
    }
}
