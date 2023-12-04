<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovimientosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tipos_movimientos')->insert([
            ['tipo_movimiento' => 'Entrada'],
            ['tipo_movimiento' => 'Salida'],
        ]);

        // Insertar datos en la tabla Motivos
        DB::table('motivos')->insert([
            ['motivo' => 'Compra'],
            ['motivo' => 'Venta'],
            ['motivo' => 'Credito'],
            ['motivo' => 'Devolución'],
        ]);

        // Insertar datos en la tabla Movimientos
        DB::table('movimientos')->insert([
            ['id_producto' => 1, 'id_motivo' => 1, 'id_tipo_movimiento' => 1, 'fecha' => '2023-12-03', 'cantidad' => 30, 'observaciones' => ''],
            ['id_producto' => 1, 'id_motivo' => 1, 'id_tipo_movimiento' => 1, 'fecha' => '2023-12-03', 'cantidad' => 5, 'observaciones' => ''],
            ['id_producto' => 1, 'id_motivo' => 1, 'id_tipo_movimiento' => 1, 'fecha' => '2023-12-03', 'cantidad' => 20, 'observaciones' => ''],
        ]);
    }
}
