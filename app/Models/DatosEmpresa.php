<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DatosEmpresa
 *
 * @property $id
 * @property $nombre_empresa
 * @property $logo
 * @property $direccion
 * @property $telefono
 * @property $correo
 * @property $descripcion
 * @property $rtn
 * @property $created_at
 * @property $updated_at
 *
 * @property Factura[] $facturas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */


class DatosEmpresa extends Model
{
    static $rules = [
		'nombre_empresa' => 'required',
		'direccion' => 'required',
		'telefono' => 'required',
		'correo' => 'required',
		'rtn' => 'required',
    ];

    protected $perPage = 20;
    protected $fillable = ['nombre_empresa','logo','direccion','telefono','correo','descripcion','rtn'];

    public function facturas()
    {
        return $this->hasMany('App\Models\Factura', 'id_dato_empresa', 'id');
    }
}
