<?php

namespace App\Repositories;

use App\Models\Seguimiento;
use App\Repositories\BaseRepository;

/**
 * Class SeguimientoRepository
 * @package App\Repositories
 * @version February 14, 2023, 8:46 pm -03
*/

class SeguimientoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'fecha',
        'curso_actividad_expediente',
        'escrito',
        'proximo_paso',
        'escrito_actualizado',
        'preparado_por',
        'controlado_por',
        'supervision_text'
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
        return Seguimiento::class;
    }
}
