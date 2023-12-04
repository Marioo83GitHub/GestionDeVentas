<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Marca
 *
 * @property $id
 * @property $nombre_marca
 * @property $descripcion
 * @property $created_at
 * @property $updated_at
 *
 * @property MarcasProducto[] $marcasProductos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */


class Marca extends Model
{
    static $rules = [
		'nombre_marca' => 'required',
    ];

    protected $perPage = 20;
    protected $fillable = ['nombre_marca','descripcion'];

    public function marcasProductos()
    {
        return $this->hasMany('App\Models\MarcasProducto', 'id_marca', 'id');
    }
}


