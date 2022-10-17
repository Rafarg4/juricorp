<?php

namespace App\Repositories;

use App\Models\Audiencias;
use App\Repositories\BaseRepository;

/**
 * Class AudienciasRepository
 * @package App\Repositories
 * @version October 16, 2022, 11:11 pm UTC
*/

class AudienciasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'expediente_id',
        'inicio_audiencia',
        'find_audiencia',
        'descripcion_audiencia'
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
        return Audiencias::class;
    }
}
