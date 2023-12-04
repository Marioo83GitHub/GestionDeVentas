<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Departamento
 *
 * @property $id
 * @property $id_pais
 * @property $departamento
 * @property $created_at
 * @property $updated_at
 *
 * @property Municipio[] $municipios
 * @property Paise $paise
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Departamento extends Model
{
    static $rules = [
		'id_pais' => 'required',
		'departamento' => 'required',
    ];

    protected $perPage = 20;
    protected $fillable = ['id_pais','departamento'];

    public function municipios()
    {
        return $this->hasMany('App\Models\Municipio', 'id_departamento', 'id');
    }

    public function paise()
    {
        return $this->hasOne('App\Models\Paise', 'id', 'id_pais');
    }
}
