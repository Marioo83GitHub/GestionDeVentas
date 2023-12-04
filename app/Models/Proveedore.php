<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Proveedore
 *
 * @property $id
 * @property $id_ciudad
 * @property $id_contacto
 * @property $nombre_empresa
 * @property $direccion
 * @property $created_at
 * @property $updated_at
 *
 * @property Ciudade $ciudade
 * @property Contacto $contacto
 * @property Producto[] $productos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */


class Proveedore extends Model
{

    static $rules = [
		'id_ciudad' => 'required',
		'id_contacto' => 'required',
		'nombre_empresa' => 'required',
		'direccion' => 'required',
    ];

    protected $perPage = 20;
    protected $fillable = ['id_ciudad','id_contacto','nombre_empresa','direccion'];

    public function ciudade()
    {
        return $this->hasOne('App\Models\Ciudade', 'id', 'id_ciudad');
    }

    public function contacto()
    {
        return $this->hasOne('App\Models\Contacto', 'id', 'id_contacto');
    }

    public function productos()
    {
        return $this->hasMany('App\Models\Producto', 'id_proveedor', 'id');
    }
}
