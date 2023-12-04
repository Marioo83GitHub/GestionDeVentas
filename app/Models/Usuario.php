<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Usuario
 *
 * @property $id
 * @property $id_rol
 * @property $nombre_usuario
 * @property $clave_acceso
 * @property $estado
 * @property $token_recuperacion
 * @property $created_at
 * @property $updated_at
 *
 * @property Configuracione[] $configuraciones
 * @property Empleado[] $empleados
 * @property Role $role
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */

class Usuario extends Model
{
    static $rules = [
		'id_rol' => 'required',
		'nombre_usuario' => 'required',
		'clave_acceso' => 'required',
		'estado' => 'required',
    ];
    protected $fillable = ['id_rol','nombre_usuario','clave_acceso','estado','token_recuperacion'];

    public function configuraciones()
    {
        return $this->hasMany('App\Models\Configuracione', 'id_usuario', 'id');
    }

    public function empleados()
    {
        return $this->hasMany('App\Models\Empleado', 'id_usuario', 'id');
    }

    public function role()
    {
        return $this->hasOne('App\Models\Role', 'id', 'id_rol');
    }
}
