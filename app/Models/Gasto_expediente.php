<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Gasto_expediente
 * @package App\Models
 * @version September 23, 2022, 3:52 am UTC
 *
 * @property string $concepto
 * @property string $monto
 * @property string $fecha
 * @property integer $id_expediente
 * @property string $archivo
 */
class Gasto_expediente extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'gasto_expedientes';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'concepto_gasto',
        'monto_gasto',
        'fecha_gasto',
        'id_expediente',
        'archivo_gasto'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'concepto_gasto' => 'string',
        'monto_gasto' => 'string',
        'fecha_gasto' => 'string',
        'id_expediente' => 'integer',
        'archivo_gasto' => 'string'
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
