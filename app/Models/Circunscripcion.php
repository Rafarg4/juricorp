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
 * @property string $nombre-cir
 * @property string $departamento
 */
class Circunscripcion extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'circunscripcions';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombrecir',
        'departamento'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nombrecir' => 'string',
        'departamento' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];
    public function expediente (){
     return $this->belongsToMany(Expediente::class,'circunscripcion_juzgados','id','id');

    }
     public function juz (){
        return $this-> hasMany('App\Models\Juzgado');
    }
}
