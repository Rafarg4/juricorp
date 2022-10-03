<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Juzgado
 * @package App\Models
 * @version September 23, 2022, 2:36 am UTC
 *
 * @property string $nombre
 * @property string $juez
 * @property string $secretario
 */
class Juzgado extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'juzgados';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre',
        'juez',
        'secretario'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nombre' => 'string',
        'juez' => 'string',
        'secretario' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'juez' => 'required',
        'secretario' => 'required'
    ];

     public function expediente (){
     return $this->belongsToMany(Expediente::class,'circunscripcion_juzgados','id','id');

    }
    
}
