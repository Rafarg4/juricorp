<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Circunscripcion
 * @package App\Models
 * @version September 23, 2022, 2:37 am UTC
 *
 * @property string $nombre
 * @property string $departamento
 */
class Circunscripcion extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'circunscripcions';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre',
        'departamento'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nombre' => 'string',
        'departamento' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'departamento' => 'required'
    ];

    
}
