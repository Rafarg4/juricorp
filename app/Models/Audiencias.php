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
 * @property date $fin_audiencia
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
        'fin_audiencia',
        'descripcion_audiencia'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'inicio_audiencia' => 'string',
        'fin_audiencia' => 'string',
        'descripcion_audiencia' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'inicio_audiencia' => 'required',
        'fin_audiencia' => 'required',
        'descripcion_audiencia' => 'required'
    ];

    
}
