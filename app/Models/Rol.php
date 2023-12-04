<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Role
 *
 * @property $id
 * @property $rol
 * @property $created_at
 * @property $updated_at
 *
 * @property RolesPermiso[] $rolesPermisos
 * @property Usuario[] $usuarios
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */


class Role extends Model
{
    protected $table = 'roles';

    static $rules = [
		'rol' => 'required',
    ];

    protected $perPage = 20;
    protected $fillable = ['rol'];

    public function rolesPermisos()
    {
        return $this->hasMany('App\Models\RolesPermiso', 'id_rol', 'id');
    }

    public function usuarios()
    {
        return $this->hasMany('App\Models\Usuario', 'id_rol', 'id');
    }
}
