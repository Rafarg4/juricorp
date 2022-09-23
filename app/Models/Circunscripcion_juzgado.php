<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Circunscripcion_juzgado
 * @package App\Models
 * @version September 23, 2022, 2:50 am UTC
 *
 * @property integer $id_juzgado
 * @property integer $id_circunscripcion
 */
class Circunscripcion_juzgado extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'circunscripcion_juzgados';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'id_juzgado',
        'id_circunscripcion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_juzgado' => 'integer',
        'id_circunscripcion' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_juzgado' => 'required',
        'id_circunscripcion' => 'required'
    ];

    
}
