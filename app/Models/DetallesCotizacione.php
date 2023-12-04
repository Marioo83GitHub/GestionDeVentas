<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DetallesCotizacione
 *
 * @property $id
 * @property $id_cotizacion
 * @property $id_producto
 * @property $cantidad
 * @property $subtotal
 * @property $created_at
 * @property $updated_at
 *
 * @property Cotizacione $cotizacione
 * @property Producto $producto
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */

class DetallesCotizacione extends Model
{
    static $rules = [
		'id_cotizacion' => 'required',
		'id_producto' => 'required',
		'cantidad' => 'required',
		'subtotal' => 'required',
    ];

    protected $perPage = 20;
    protected $fillable = ['id_cotizacion','id_producto','cantidad','subtotal'];

    public function cotizacione()
    {
        return $this->hasOne('App\Models\Cotizacione', 'id', 'id_cotizacion');
    }

    public function producto()
    {
        return $this->hasOne('App\Models\Producto', 'id', 'id_producto');
    }
}
