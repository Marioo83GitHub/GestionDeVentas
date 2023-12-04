<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Contrato
 *
 * @property $id
 * @property $id_empleado
 * @property $id_jornada
 * @property $salario
 * @property $descripcion
 * @property $tipo_contrato
 * @property $estado
 * @property $fecha_contrato
 * @property $created_at
 * @property $updated_at
 *
 * @property Despido[] $despidos
 * @property Empleado $empleado
 * @property Jornada $jornada
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Contrato extends Model
{
    static $rules = [
		'id_empleado' => 'required',
		'id_jornada' => 'required',
		'salario' => 'required',
		'tipo_contrato' => 'required',
		'estado' => 'required',
		'fecha_contrato' => 'required',
    ];

    protected $perPage = 20;
    protected $fillable = ['id_empleado','id_jornada','salario','descripcion','tipo_contrato','estado','fecha_contrato'];

    public function despidos()
    {
        return $this->hasMany('App\Models\Despido', 'id_contrato', 'id');
    }

    public function empleado()
    {
        return $this->hasOne('App\Models\Empleado', 'id', 'id_empleado');
    }

    public function jornada()
    {
        return $this->hasOne('App\Models\Jornada', 'id', 'id_jornada');
    }
}
