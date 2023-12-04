<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 *
 * @property $id
 * @property $id_tipo_impuesto
 * @property $id_unidad_de_medida
 * @property $id_categoria
 * @property $id_proveedor
 * @property $nombre_producto
 * @property $codigo
 * @property $descripcion
 * @property $precio_unitario
 * @property $cantidad_en_stock
 * @property $imagen
 * @property $fecha_ingreso
 * @property $fecha_vencimiento
 * @property $stock_minimo
 * @property $created_at
 * @property $updated_at
 *
 * @property Categoria $categoria
 * @property Compra[] $compras
 * @property DetallesCotizacione[] $detallesCotizaciones
 * @property DetallesFactura[] $detallesFacturas
 * @property HistorialPrecio[] $historialPrecios
 * @property MarcasProducto[] $marcasProductos
 * @property Movimiento[] $movimientos
 * @property Proveedore $proveedore
 * @property TiposImpuesto $tiposImpuesto
 * @property UnidadesDeMedida $unidadesDeMedida
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Producto extends Model
{

    static $rules = [
		'id_tipo_impuesto' => 'required',
		'id_unidad_de_medida' => 'required',
		'id_categoria' => 'required',
		'id_proveedor' => 'required',
		'nombre_producto' => 'required',
		'codigo' => 'required',
		'precio_unitario' => 'required',
		'cantidad_en_stock' => 'required',
		'imagen' => 'required',
		'fecha_ingreso' => 'required',
		'fecha_vencimiento' => 'required',
		'stock_minimo' => 'required',
    ];

    protected $perPage = 20;
    protected $fillable = ['id_tipo_impuesto','id_unidad_de_medida','id_categoria','id_proveedor','nombre_producto','codigo',
    'descripcion','precio_unitario','cantidad_en_stock','imagen','fecha_ingreso','fecha_vencimiento','stock_minimo'];

    public function categoria()
    {
        return $this->hasOne('App\Models\Categoria', 'id', 'id_categoria');
    }

    public function compras()
    {
        return $this->hasMany('App\Models\Compra', 'id_producto', 'id');
    }

    public function detallesCotizaciones()
    {
        return $this->hasMany('App\Models\DetallesCotizacione', 'id_producto', 'id');
    }

    public function detallesFacturas()
    {
        return $this->hasMany('App\Models\DetallesFactura', 'id_producto', 'id');
    }

    public function historialPrecios()
    {
        return $this->hasMany('App\Models\HistorialPrecio', 'id_producto', 'id');
    }

    public function marcasProductos()
    {
        return $this->hasMany('App\Models\MarcasProducto', 'id_producto', 'id');
    }

    public function movimientos()
    {
        return $this->hasMany('App\Models\Movimiento', 'id_producto', 'id');
    }

    public function proveedore()
    {
        return $this->hasOne('App\Models\Proveedore', 'id', 'id_proveedor');
    }

    public function tiposImpuesto()
    {
        return $this->hasOne('App\Models\TiposImpuesto', 'id', 'id_tipo_impuesto');
    }

    public function unidadesDeMedida()
    {
        return $this->hasOne('App\Models\UnidadesDeMedida', 'id', 'id_unidad_de_medida');
    }
}
