<?php

namespace App\Repositories;

use App\Models\Circunscripcion_juzgado;
use App\Repositories\BaseRepository;

/**
 * Class Circunscripcion_juzgadoRepository
 * @package App\Repositories
 * @version September 23, 2022, 2:50 am UTC
*/

class Circunscripcion_juzgadoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_juzgado',
        'id_circunscripcion'
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
        return Circunscripcion_juzgado::class;
    }
}
