<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Pago_expediente
 * @package App\Models
 * @version October 3, 2022, 1:37 am UTC
 *
 * @property string $concepto
 * @property string $monto
 * @property string $fecha
 * @property integer $expediente_id
 */
class Pago_expediente extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'pago_expedientes';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'concepto',
        'monto',
        'fecha',
        'expediente_id',
        'archivo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'concepto' => 'string',
        'monto' => 'string',
        'fecha' => 'string',
        'expediente_id' => 'integer',
        'archivo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'concepto' => 'required',
        'monto' => 'required',
        'fecha' => 'required',
        'expediente_id' => 'required',
        'archivo' => 'required'
    ];

    
}
