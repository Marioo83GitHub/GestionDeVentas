<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EstadosCivile
 *
 * @property $id
 * @property $estado_civil
 * @property $created_at
 * @property $updated_at
 *
 * @property Empleado[] $empleados
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */


class EstadosCivile extends Model
{

    static $rules = [
		'estado_civil' => 'required',
    ];

    protected $perPage = 20;

    protected $fillable = ['estado_civil'];

    public function empleados()
    {
        return $this->hasMany('App\Models\Empleado', 'id_estado_civil', 'id');
    }


}
