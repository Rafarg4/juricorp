<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Audiencias
 * @package App\Models
 * @version October 16, 2022, 11:11 pm UTC
 *
 * 
 * @property date $inicio_audiencia
 * @property integer $id_juzgado
 * @property string $descripcion_audiencia
 */
class Audiencias extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'audiencias';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'inicio_audiencia',
        'id_expediente',
        'descripcion_audiencia'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'inicio_audiencia' => 'string',
        'id_expediente' => 'integer',
        'descripcion_audiencia' => 'string'
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
