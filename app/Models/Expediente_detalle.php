<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Expediente_detalle
 * @package App\Models
 * @version September 25, 2022, 12:27 am UTC
 *
 * @property integer $id_cliente
 * @property integer $id_expediente
 */
class Expediente_detalle extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'expediente_detalles';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'id_cliente',
        'id_expediente'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_cliente' => 'integer',
        'id_expediente' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_cliente' => 'required',
        'id_expediente' => 'required'
    ];

    
}
