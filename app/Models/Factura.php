<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Factura
 *
 * @property $id
 * @property $id_empleado
 * @property $id_dato_empresa
 * @property $id_metodo_pago
 * @property $id_forma_entrega
 * @property $id_cliente
 * @property $numero_factura
 * @property $numero_oc_exenta
 * @property $serie
 * @property $cambio
 * @property $fecha_emision
 * @property $limite_fecha_emision
 * @property $fecha_vencimiento
 * @property $subtotal_neto
 * @property $subtotal
 * @property $impuesto15
 * @property $impuesto18
 * @property $importe15
 * @property $importe18
 * @property $descuento
 * @property $total
 * @property $created_at
 * @property $updated_at
 *
 * @property Cliente $cliente
 * @property DatosEmpresa $datosEmpresa
 * @property DetallesFactura[] $detallesFacturas
 * @property Empleado $empleado
 * @property FormasEntrega $formasEntrega
 * @property MetodosPago $metodosPago
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */

class Factura extends Model
{

    static $rules = [
        'id_empleado' => 'required',
        'id_dato_empresa' => 'required',
        'id_metodo_pago' => 'required',
        'id_forma_entrega' => 'required',
        'id_cliente' => 'required',
        'numero_factura' => 'required',
        'numero_oc_exenta' => 'required',
        'serie' => 'required',
        'cambio' => 'required',
        'fecha_emision' => 'required',
        'limite_fecha_emision' => 'required',
        'fecha_vencimiento' => 'required',
        'subtotal_neto' => 'required',
        'subtotal' => 'required',
        'impuesto15' => 'required',
        'impuesto18' => 'required',
        'importe15' => 'required',
        'importe18' => 'required',
        'descuento' => 'required',
        'total' => 'required',
    ];

    protected $perPage = 20;
    protected $fillable = ['id_empleado', 'id_dato_empresa', 'id_metodo_pago', 'id_forma_entrega', 'id_cliente',
        'numero_factura', 'numero_oc_exenta', 'serie', 'cambio', 'fecha_emision', 'limite_fecha_emision', 'fecha_vencimiento',
        'subtotal_neto', 'subtotal', 'impuesto15', 'impuesto18', 'importe15', 'importe18', 'descuento', 'total'];

    public function cliente()
    {
        return $this->hasOne('App\Models\Cliente', 'id', 'id_cliente');
    }

    public function datosEmpresa()
    {
        return $this->hasOne('App\Models\DatosEmpresa', 'id', 'id_dato_empresa');
    }

    public function detallesFacturas()
    {
        return $this->hasMany('App\Models\DetallesFactura', 'id_factura', 'id');
    }

    public function empleado()
    {
        return $this->hasOne('App\Models\Empleado', 'id', 'id_empleado');
    }

    public function formasEntrega()
    {
        return $this->hasOne('App\Models\FormasEntrega', 'id', 'id_forma_entrega');
    }

    public function metodosPago()
    {
        return $this->hasOne('App\Models\MetodosPago', 'id', 'id_metodo_pago');
    }
}
