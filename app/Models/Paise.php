<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Paise
 *
 * @property $id
 * @property $pais
 * @property $created_at
 * @property $updated_at
 *
 * @property Departamento[] $departamentos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Pais extends Model
{

    static $rules = [
		'pais' => 'required',
    ];

    protected $perPage = 20;
    protected $fillable = ['pais'];

    public function departamentos()
    {
        return $this->hasMany('App\Models\Departamento', 'id_pais', 'id');
    }
}
