<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Motivo
 *
 * @property $id
 * @property $motivo
 * @property $created_at
 * @property $updated_at
 *
 * @property Movimiento[] $movimientos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Motivo extends Model
{

    static $rules = [
		'motivo' => 'required',
    ];

    protected $perPage = 20;

    protected $fillable = ['motivo'];

    public function movimientos()
    {
        return $this->hasMany('App\Models\Movimiento', 'id_motivo', 'id');
    }


}
