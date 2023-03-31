<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use OwenIt\Auditing\Contracts\Auditable;

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
class Pago_expediente extends Model implements Auditable
{
    use SoftDeletes;
 use \OwenIt\Auditing\Auditable;
    use HasFactory;

    public $table = 'pago_expedientes';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'concepto',
        'monto',
        'fecha',
        'id_expediente',
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
        'id_expediente' => 'integer',
        'archivo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
       
    ];
public function expediente (){
        return $this-> belongsTo('App\Models\Expediente','id_expediente');
    }
    
}
