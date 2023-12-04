<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Municipio
 *
 * @property $id
 * @property $id_departamento
 * @property $municipio
 * @property $created_at
 * @property $updated_at
 *
 * @property Ciudade[] $ciudades
 * @property Departamento $departamento
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */


class Municipio extends Model
{

    static $rules = [
		'id_departamento' => 'required',
		'municipio' => 'required',
    ];

    protected $perPage = 20;

    protected $fillable = ['id_departamento','municipio'];

    public function ciudades()
    {
        return $this->hasMany('App\Models\Ciudade', 'id_municipio', 'id');
    }

    public function departamento()
    {
        return $this->hasOne('App\Models\Departamento', 'id', 'id_departamento');
    }
}
