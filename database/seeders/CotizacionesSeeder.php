<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CotizacionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Inserción en la tabla 'estados_cotizaciones'
        DB::table('estados_cotizaciones')->insert([
            ['estado_cotizacion' => 'Pendiente'],
            ['estado_cotizacion' => 'Aprobada'],
            ['estado_cotizacion' => 'Rechazada'],
        ]);

        // Inserción en la tabla 'cotizaciones'
        DB::table('cotizaciones')->insert([
            ['id_empleado' => 1, 'id_estado_cotizacion' => 1, 'fecha' => '2023-07-01', 'meses_vigencia' => 12],
            ['id_empleado' => 2, 'id_estado_cotizacion' => 1, 'fecha' => '2023-07-02', 'meses_vigencia' => 6],
            ['id_empleado' => 3, 'id_estado_cotizacion' => 2, 'fecha' => '2023-07-03', 'meses_vigencia' => 9],
            ['id_empleado' => 4, 'id_estado_cotizacion' => 3, 'fecha' => '2023-07-04', 'meses_vigencia' => 12],
            ['id_empleado' => 5, 'id_estado_cotizacion' => 1, 'fecha' => '2023-07-05', 'meses_vigencia' => 6],
        ]);

        DB::table('detalles_cotizaciones')->insert([
            ['id_cotizacion' => 1, 'id_producto' => 1, 'cantidad' => 5, 'subtotal' => 150.00],
            ['id_cotizacion' => 1, 'id_producto' => 2, 'cantidad' => 3, 'subtotal' => 90.00],
            ['id_cotizacion' => 2, 'id_producto' => 3, 'cantidad' => 2, 'subtotal' => 80.00],
            ['id_cotizacion' => 3, 'id_producto' => 1, 'cantidad' => 4, 'subtotal' => 120.00],
            ['id_cotizacion' => 3, 'id_producto' => 2, 'cantidad' => 2, 'subtotal' => 60.00],
            ['id_cotizacion' => 4, 'id_producto' => 3, 'cantidad' => 3, 'subtotal' => 75.00],
            ['id_cotizacion' => 5, 'id_producto' => 1, 'cantidad' => 2, 'subtotal' => 60.00],
            ['id_cotizacion' => 5, 'id_producto' => 2, 'cantidad' => 5, 'subtotal' => 125.00],
        ]);
    }
}
