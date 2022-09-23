<?php

namespace App\Repositories;

use App\Models\Juzgado;
use App\Repositories\BaseRepository;

/**
 * Class JuzgadoRepository
 * @package App\Repositories
 * @version September 23, 2022, 2:36 am UTC
*/

class JuzgadoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'juez',
        'secretario'
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
        return Juzgado::class;
    }
}
