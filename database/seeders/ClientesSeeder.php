<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientesSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('paises')->insert([
            ['pais' => 'Honduras'],
            ['pais' => 'Mexico'],
            ['pais' => 'El Salvador'],
            ['pais' => 'Guatemala'],
            ['pais' => 'Nicaragua'],
        ]);

        // Insertar datos en la tabla Departamentos
        DB::table('departamentos')->insert([
            ['id_pais' => 1, 'departamento' => 'Francisco Morazán'],
            ['id_pais' => 2, 'departamento' => 'Ciudad de Mexico'],
            ['id_pais' => 3, 'departamento' => 'Puebla'],
            ['id_pais' => 4, 'departamento' => 'Mangalón'],
            ['id_pais' => 5, 'departamento' => 'Costa del Sol'],
        ]);

        // Insertar datos en la tabla Municipios
        DB::table('municipios')->insert([
            ['id_departamento' => 1, 'municipio' => 'Tegucigalpa'],
            ['id_departamento' => 2, 'municipio' => 'CD MX'],
            ['id_departamento' => 3, 'municipio' => 'San Salvador'],
            ['id_departamento' => 4, 'municipio' => 'Guatemala'],
            ['id_departamento' => 5, 'municipio' => 'Managua'],
        ]);

        // Insertar datos en la tabla Ciudades
        DB::table('ciudades')->insert([
            ['id_municipio' => 1, 'ciudad' => 'Tegucigalpa'],
            ['id_municipio' => 2, 'ciudad' => 'CD MX'],
            ['id_municipio' => 3, 'ciudad' => 'San Salvador'],
            ['id_municipio' => 4, 'ciudad' => 'Guatemala'],
            ['id_municipio' => 5, 'ciudad' => 'Managua'],
        ]);

        DB::table('empresas')->insert([
            ['nombre_empresa' => 'Repostría Arturo', 'direccion' => 'Barrio Cabañas costado sur de la escuela', 'rtn' => 60119],
            ['nombre_empresa' => 'Panadería Bonilla', 'direccion' => 'Barrio La Cruz una cuadra al oeste del puente', 'rtn' => 60165],
            ['nombre_empresa' => 'Postres Y Mas', 'direccion' => 'Barrio Tamarindo atras de bancatlan', 'rtn' => 60567],
            ['nombre_empresa' => 'Pastelería Buen Sabor', 'direccion' => 'Barrio Cabañas al lado de la plaza', 'rtn' => 68165],
            ['nombre_empresa' => 'Panes el Buen Gusto', 'direccion' => 'Barrio Cabañas costado norte del kinder', 'rtn' => 60366],
        ]);

        DB::table('clientes')->insert([
            ['id_ciudad' => 1, 'id_empresa' => 1, 'primer_nombre' => 'Juan', 'primer_apellido' => 'Gonzales', 'num_reg_exonerado' => '1920', 'num_reg_sag' => '0283'],
            ['id_ciudad' => 2, 'id_empresa' => 2, 'primer_nombre' => 'Jose', 'primer_apellido' => 'Ruiz', 'num_reg_exonerado' => '1930', 'num_reg_sag' => '8263'],
            ['id_ciudad' => 3, 'id_empresa' => 3, 'primer_nombre' => 'Antonio', 'primer_apellido' => 'Almendarez', 'num_reg_exonerado' => '9263', 'num_reg_sag' => '9722'],
            ['id_ciudad' => 4, 'id_empresa' => 4, 'primer_nombre' => 'Carlos', 'primer_apellido' => 'Grillas', 'num_reg_exonerado' => '6454', 'num_reg_sag' => '0153'],
            ['id_ciudad' => 1, 'id_empresa' => 5, 'primer_nombre' => 'Andres', 'primer_apellido' => 'Galo', 'num_reg_exonerado' => '6830', 'num_reg_sag' => '0173'],
        ]);

        DB::table('tipos_telefonos')->insert([
            ['tipo_telefono' => 'Fijo'],
            ['tipo_telefono' => 'Celular'],
        ]);

        DB::table('telefonos_clientes')->insert([
            ['id_tipo_telefono' => 1, 'id_cliente' => 1, 'telefono' => '27809353'],
            ['id_tipo_telefono' => 1, 'id_cliente' => 2, 'telefono' => '27805342'],
            ['id_tipo_telefono' => 1, 'id_cliente' => 3, 'telefono' => '27809976'],
            ['id_tipo_telefono' => 2, 'id_cliente' => 4, 'telefono' => '98654321'],
            ['id_tipo_telefono' => 2, 'id_cliente' => 5, 'telefono' => '34527281'],
        ]);
    }
}
