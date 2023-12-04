<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cotizacione
 *
 * @property $id
 * @property $id_estado_cotizacion
 * @property $id_empleado
 * @property $fecha
 * @property $meses_vigencia
 * @property $created_at
 * @property $updated_at
 *
 * @property DetallesCotizacione[] $detallesCotizaciones
 * @property Empleado $empleado
 * @property EstadosCotizacione $estadosCotizacione
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */

class Cotizacione extends Model
{
    static $rules = [
		'id_estado_cotizacion' => 'required',
		'id_empleado' => 'required',
		'fecha' => 'required',
		'meses_vigencia' => 'required',
    ];

    protected $perPage = 20;
    protected $fillable = ['id_estado_cotizacion','id_empleado','fecha','meses_vigencia'];

    public function detallesCotizaciones()
    {
        return $this->hasMany('App\Models\DetallesCotizacione', 'id_cotizacion', 'id');
    }

    public function empleado()
    {
        return $this->hasOne('App\Models\Empleado', 'id', 'id_empleado');
    }

    public function estadosCotizacione()
    {
        return $this->hasOne('App\Models\EstadosCotizacione', 'id', 'id_estado_cotizacion');
    }
}
