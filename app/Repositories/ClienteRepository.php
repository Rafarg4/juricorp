<?php

namespace App\Repositories;

use App\Models\Cliente;
use App\Repositories\BaseRepository;

/**
 * Class ClienteRepository
 * @package App\Repositories
 * @version September 23, 2022, 3:16 am UTC
*/

class ClienteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'apellido',
        'ci',
        'fecha_nacimiento',
        'nacionalidad',
        'distrito_origen',
        'domicilio_particular',
        'numero_casa',
        'barrio',
        'ciudad',
        'numero_telefono',
        'email',
        'rede_social',
        'nombre_apellido_coyuge',
        'ci_coyuge',
        'empresa_otro',
        'direccion',
        'numero_casa',
        'telefono_fijo',
        'telefono_laboral',
        'email_laboral'
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
        return Cliente::class;
    }
}
