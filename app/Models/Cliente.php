<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cliente
 *
 * @property $id
 * @property $id_ciudad
 * @property $id_empresa
 * @property $primer_nombre
 * @property $primer_apellido
 * @property $num_reg_exonerado
 * @property $num_reg_sag
 * @property $created_at
 * @property $updated_at
 *
 * @property Ciudade $ciudade
 * @property Empresa $empresa
 * @property Factura[] $facturas
 * @property TelefonosCliente[] $telefonosClientes
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cliente extends Model
{

    static $rules = [
		'id_ciudad' => 'required',
		'id_empresa' => 'required',
		'primer_nombre' => 'required',
		'primer_apellido' => 'required',
		'num_reg_exonerado' => 'required',
		'num_reg_sag' => 'required',
    ];

    protected $perPage = 20;
    protected $fillable = ['id_ciudad','id_empresa','primer_nombre','primer_apellido','num_reg_exonerado','num_reg_sag'];

    public function ciudade()
    {
        return $this->hasOne('App\Models\Ciudade', 'id', 'id_ciudad');
    }

    public function empresa()
    {
        return $this->hasOne('App\Models\Empresa', 'id', 'id_empresa');
    }

    public function facturas()
    {
        return $this->hasMany('App\Models\Factura', 'id_cliente', 'id');
    }

    public function telefonosClientes()
    {
        return $this->hasMany('App\Models\TelefonosCliente', 'id_cliente', 'id');
    }
}
