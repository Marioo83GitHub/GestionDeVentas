<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DetallesFactura
 *
 * @property $id
 * @property $id_factura
 * @property $id_producto
 * @property $subtotal
 * @property $cantidad
 * @property $created_at
 * @property $updated_at
 *
 * @property Factura $factura
 * @property Producto $producto
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class DetallesFactura extends Model
{
    static $rules = [
		'id_factura' => 'required',
		'id_producto' => 'required',
		'subtotal' => 'required',
		'cantidad' => 'required',
    ];

    protected $perPage = 20;
    protected $fillable = ['id_factura','id_producto','subtotal','cantidad'];

    public function factura()
    {
        return $this->hasOne('App\Models\Factura', 'id', 'id_factura');
    }

    public function producto()
    {
        return $this->hasOne('App\Models\Producto', 'id', 'id_producto');
    }
}

