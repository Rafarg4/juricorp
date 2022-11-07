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
        'nombrejuz',
        'juez',
        'secretario',
        'ujier',
        'id_circunscripcion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nombrejuz' => 'string',
        'juez' => 'string',
        'secretario' => 'string',
        'ujier' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombrejuz' => 'required',
        'juez' => 'required',
        'secretario' => 'required',
        'ujier' => 'required'
    ];

     public function expediente (){
     return $this->belongsToMany(Expediente::class,'circunscripcion_juzgados','id','id');

    }
     public function cir (){
     return $this-> belongsTo('App\Models\Circunscripcion','id_circunscripcion');

    }
}
