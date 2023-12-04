<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Categoria
 *
 * @property $id
 * @property $categoria
 * @property $created_at
 * @property $updated_at
 *
 * @property Producto[] $productos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */

class Categoria extends Model
{

    static $rules = [
		'categoria' => 'required',
    ];

    protected $perPage = 20;

    protected $fillable = ['categoria'];

    public function productos()
    {
        return $this->hasMany('App\Models\Producto', 'id_categoria', 'id');
    }
}
