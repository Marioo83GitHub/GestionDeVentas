<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Despido
 *
 * @property $id
 * @property $id_contrato
 * @property $id_motivo_despido
 * @property $fecha
 * @property $observaciones
 * @property $created_at
 * @property $updated_at
 *
 * @property Contrato $contrato
 * @property MotivosDespido $motivosDespido
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Despido extends Model
{

    static $rules = [
		'id_contrato' => 'required',
		'id_motivo_despido' => 'required',
		'fecha' => 'required',
    ];

    protected $perPage = 20;
    protected $fillable = ['id_contrato','id_motivo_despido','fecha','observaciones'];

    public function contrato()
    {
        return $this->hasOne('App\Models\Contrato', 'id', 'id_contrato');
    }

    public function motivosDespido()
    {
        return $this->hasOne('App\Models\MotivosDespido', 'id', 'id_motivo_despido');
    }
}
