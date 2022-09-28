<?php

namespace App\Repositories;

use App\Models\Pago_expedinte;
use App\Repositories\BaseRepository;

/**
 * Class Pago_expedinteRepository
 * @package App\Repositories
 * @version September 25, 2022, 12:26 am UTC
*/

class Pago_expedinteRepository extends BaseRepository
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
        return Pago_expedinte::class;
    }
}
