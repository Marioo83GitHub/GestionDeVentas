<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Permiso
 *
 * @property $id
 * @property $permiso
 * @property $created_at
 * @property $updated_at
 *
 * @property RolesPermiso[] $rolesPermisos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Permiso extends Model
{

    static $rules = [
		'permiso' => 'required',
    ];

    protected $perPage = 20;
    protected $fillable = ['permiso'];

    public function rolesPermisos()
    {
        return $this->hasMany('App\Models\RolesPermiso', 'id_permiso', 'id');
    }
}

