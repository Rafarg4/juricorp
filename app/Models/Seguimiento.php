<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use OwenIt\Auditing\Contracts\Auditable;

/**
 * Class Seguimiento
 * @package App\Models
 * @version February 14, 2023, 8:46 pm -03
 *
 * @property string $fecha
 * @property string $curso_actividad_expediente
 * @property string $escrito
 * @property string $proximo_paso
 * @property string $escrito_actualizado
 * @property string $preparado_por
 * @property string $controlado_por
 * @property string $supervision_text
 */
class Seguimiento extends Model implements Auditable
{
    use SoftDeletes;
    use \OwenIt\Auditing\Auditable;
    use HasFactory;

    public $table = 'seguimientos';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'fecha',
        'curso_actividad_expediente',
        'escrito',
        'proximo_paso',
        'preparado_por',
        'controlado_por',
        'supervision',
        'id_expediente'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'fecha' => 'string',
        'curso_actividad_expediente' => 'string',
        'escrito' => 'string',
        'proximo_paso' => 'string',
        'escrito_actualizado' => 'string',
        'preparado_por' => 'string',
        'controlado_por' => 'string',
        'supervision' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'fecha' => 'required',
        'curso_actividad_expediente' => 'required',
        'escrito' => 'required',
        'proximo_paso' => 'required',
        'preparado_por' => 'required',
        'controlado_por' => 'required',
        'supervision' => 'required'
    ];

    
}
