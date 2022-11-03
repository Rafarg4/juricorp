<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Cliente
 * @package App\Models
 * @version September 23, 2022, 3:16 am UTC
 *
 * @property string $nombre
 * @property string $apellido
 * @property string $ci
 * @property string $fecha_nacimiento
 * @property string $nacionalidad
 * @property string $distrito_origen
 * @property string $domicilio_particular
 * @property string $numero_casa
 * @property string $barrio
 * @property string $ciudad
 * @property string $numero_telefono
 * @property string $email
 * @property string $rede_social
 * @property string $nombre_apellido_coyuge
 * @property string $ci_coyuge
 * @property string $empresa_otro
 * @property string $direccion
 * @property string $numero_casa
 * @property string $telefono_fijo
 * @property string $telefono_laboral
 * @property string $email_laboral
 */
class Cliente extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'clientes';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre',
        'apellido',
        'ci',
        'fecha_nacimiento',
        'nacionalidad',
        'distrito_origen',
        'domicilio_particular',
        'numero_casa',
        'barrio',
        'ciudad',
        'numero_telefono',
        'email',
        'rede_social',
        'nombre_apellido_coyuge',
        'ci_coyuge',
        'empresa_otro',
        'direccion',
        'numero_casa_laboral',
        'telefono_fijo',
        'telefono_laboral',
        'email_laboral'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nombre' => 'string',
        'apellido' => 'string',
        'ci' => 'string',
        'fecha_nacimiento' => 'string',
        'nacionalidad' => 'string',
        'distrito_origen' => 'string',
        'domicilio_particular' => 'string',
        'numero_casa' => 'string',
        'barrio' => 'string',
        'ciudad' => 'string',
        'numero_telefono' => 'string',
        'email' => 'string',
        'rede_social' => 'string',
        'nombre_apellido_coyuge' => 'string',
        'ci_coyuge' => 'string',
        'empresa_otro' => 'string',
        'direccion' => 'string',
        'numero_casa' => 'string',
        'telefono_fijo' => 'string',
        'telefono_laboral' => 'string',
        'email_laboral' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];
public function expedientes (){
     return $this->belongsToMany(Expediente::class);

    }
    
}
