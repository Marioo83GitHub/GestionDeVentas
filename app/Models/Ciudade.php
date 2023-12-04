<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ciudade
 *
 * @property $id
 * @property $id_municipio
 * @property $ciudad
 * @property $created_at
 * @property $updated_at
 *
 * @property Cliente[] $clientes
 * @property Municipio $municipio
 * @property Proveedore[] $proveedores
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Ciudad extends Model
{
    static $rules = [
		'id_municipio' => 'required',
		'ciudad' => 'required',
    ];

    protected $perPage = 20;
    protected $fillable = ['id_municipio','ciudad'];

    public function clientes()
    {
        return $this->hasMany('App\Models\Cliente', 'id_ciudad', 'id');
    }

    public function municipio()
    {
        return $this->hasOne('App\Models\Municipio', 'id', 'id_municipio');
    }

    public function proveedores()
    {
        return $this->hasMany('App\Models\Proveedore', 'id_ciudad', 'id');
    }
}
