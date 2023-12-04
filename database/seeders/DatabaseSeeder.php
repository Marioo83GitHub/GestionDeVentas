<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Seguridad Seeder
        $this->call(SeguridadSeeder::class);

        // Configuracion Seeder
        $this->call(ConfiguracionSeeder::class);

        // Empleados Seeder
        $this->call(EmpleadosSeeder::class);

        // Clientes Seeder
        $this->call(ClientesSeeder::class);

        // Productos Seeder
        $this->call(ProductosSeeder::class);

        // Cotizaciones Seeder
        $this->call(CotizacionesSeeder::class);

        // Movimientos Seeder
        $this->call(MovimientosSeeder::class);

        // Facturacion Seeder
        $this->call(FacturacionSeeder::class);












    }
}
