<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConfiguracionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insertar datos en la tabla Idiomas
        DB::table('idiomas')->insert([
            ['idioma' => 'Español'],
            ['idioma' => 'Inglés'],
        ]);

        // Insertar datos en la tabla Monedas
        DB::table('monedas')->insert([
            ['moneda' => 'dls.'],
            ['moneda' => 'Lps.'],
        ]);

        // Insertar datos en la tabla FormatosFechas
        DB::table('formatos_fechas')->insert([
            ['formato_fecha' => '01-01-2023'],
        ]);

        // Insertar datos en la tabla Impuestos
        DB::table('impuestos')->insert([
            ['porcentaje' => 0.15],
            ['porcentaje' => 0.18],
        ]);

        // Insertar datos en la tabla Importes
        DB::table('importes')->insert([
            ['porcentaje' => 0.15],
            ['porcentaje' => 0.18],
        ]);

        DB::table('configuraciones')->insert([
            'id_formato_fecha' => 1,
            'id_idioma' => 1,
            'id_importe' => 1,
            'id_impuesto' => 1,
            'id_moneda' => 2,
            'id_usuario' => 1,
        ]);
    }
}
