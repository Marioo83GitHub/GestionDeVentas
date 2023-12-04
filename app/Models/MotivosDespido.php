<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MotivosDespido
 *
 * @property $id
 * @property $motivo_despido
 * @property $created_at
 * @property $updated_at
 *
 * @property Despido[] $despidos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */

class MotivosDespido extends Model
{

    static $rules = [
		'motivo_despido' => 'required',
    ];

    protected $perPage = 20;

    protected $fillable = ['motivo_despido'];

    public function despidos()
    {
        return $this->hasMany('App\Models\Despido', 'id_motivo_despido', 'id');
    }
}
