<?php

namespace App\Repositories;

use App\Models\Circunscripcion;
use App\Repositories\BaseRepository;

/**
 * Class CircunscripcionRepository
 * @package App\Repositories
 * @version September 23, 2022, 2:37 am UTC
*/

class CircunscripcionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'departamento'
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
        return Circunscripcion::class;
    }
}
