<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Movimiento
 *
 * @property $id
 * @property $id_producto
 * @property $id_motivo
 * @property $id_tipo_movimiento
 * @property $fecha
 * @property $cantidad
 * @property $observaciones
 * @property $created_at
 * @property $updated_at
 *
 * @property Motivo $motivo
 * @property Producto $producto
 * @property TiposMovimiento $tiposMovimiento
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Movimiento extends Model
{

    static $rules = [
		'id_producto' => 'required',
		'id_motivo' => 'required',
		'id_tipo_movimiento' => 'required',
		'fecha' => 'required',
		'cantidad' => 'required',
    ];

    protected $perPage = 20;
    protected $fillable = ['id_producto','id_motivo','id_tipo_movimiento','fecha','cantidad','observaciones'];

    public function motivo()
    {
        return $this->hasOne('App\Models\Motivo', 'id', 'id_motivo');
    }

    public function producto()
    {
        return $this->hasOne('App\Models\Producto', 'id', 'id_producto');
    }

    public function tiposMovimiento()
    {
        return $this->hasOne('App\Models\TiposMovimiento', 'id', 'id_tipo_movimiento');
    }
}
