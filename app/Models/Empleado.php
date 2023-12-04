<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Empleado
 *
 * @property $id
 * @property $id_usuario
 * @property $id_estado_civil
 * @property $primer_nombre
 * @property $primer_apellido
 * @property $sexo
 * @property $direccion
 * @property $numero_seguro_social
 * @property $telefono
 * @property $correo
 * @property $fecha_nacimiento
 * @property $created_at
 * @property $updated_at
 *
 * @property Contrato[] $contratos
 * @property Cotizacione[] $cotizaciones
 * @property EstadosCivile $estadosCivile
 * @property Factura[] $facturas
 * @property Usuario $usuario
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Empleado extends Model
{
    static $rules = [
		'id_usuario' => 'required',
		'id_estado_civil' => 'required',
		'primer_nombre' => 'required',
		'primer_apellido' => 'required',
		'sexo' => 'required',
		'direccion' => 'required',
		'numero_seguro_social' => 'required',
		'telefono' => 'required',
		'correo' => 'required',
		'fecha_nacimiento' => 'required',
    ];

    protected $perPage = 20;
    protected $fillable = ['id_usuario','id_estado_civil','primer_nombre','primer_apellido','sexo','direccion','numero_seguro_social','telefono','correo','fecha_nacimiento'];

    public function contratos()
    {
        return $this->hasMany('App\Models\Contrato', 'id_empleado', 'id');
    }

    public function cotizaciones()
    {
        return $this->hasMany('App\Models\Cotizacione', 'id_empleado', 'id');
    }

    public function estadosCivile()
    {
        return $this->hasOne('App\Models\EstadosCivile', 'id', 'id_estado_civil');
    }

    public function facturas()
    {
        return $this->hasMany('App\Models\Factura', 'id_empleado', 'id');
    }

    public function usuario()
    {
        return $this->hasOne('App\Models\Usuario', 'id', 'id_usuario');
    }
}

