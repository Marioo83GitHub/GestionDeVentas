<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FacturacionSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('formas_entregas')->insert([
            ['forma_entrega' => 'En Tienda'],
            ['forma_entrega' => 'A Domicilio'],
        ]);

        // Insertar datos en la tabla MetodosPagos
        DB::table('metodos_pagos')->insert([
            ['metodo_pago' => 'Efectivo'],
            ['metodo_pago' => 'Tarjeta'],
            ['metodo_pago' => 'Transferencia'],
        ]);

        DB::table('datos_empresas')->insert([
            [
                'nombre_empresa' => 'Bodega Linda',
                'logo' => 'Logo',
                'direccion' => 'Barrio Cabañas',
                'telefono' => '27820000',
                'correo' => 'blinda@gmail.com',
                'descripcion' => 'Venta de Productos para Repostería y Panadería',
                'rtn' => '019282',
            ],
        ]);

        // Insertar datos en la tabla Facturas
        DB::table('facturas')->insert([
            [
                'id_empleado' => 2,
                'id_dato_empresa' => 1,
                'id_metodo_pago' => 1,
                'id_forma_entrega' => 1,
                'id_cliente' => 3,
                'numero_factura' => '001',
                'numero_oc_exenta' => '000000001',
                'serie' => '000-000-00-001',
                'cambio' => 18.20,
                'fecha_emision' => '2023-12-02',
                'limite_fecha_emision' => '2023-12-18',
                'fecha_vencimiento' => '2023-01-01',
                'subtotal_neto' => 150.40,
                'subtotal' => 150.40,
                'impuesto15' => 0.00,
                'impuesto18' => 0.00,
                'importe15' => 0.00,
                'importe18' => 0.00,
                'descuento' => 0.00,
                'total' => 150.40,
            ],
        ]);

        DB::table('detalles_facturas')->insert([
            [
                'id_factura' => 1,
                'id_producto' => 1,
                'subtotal' => 150.40,
                'cantidad' => 1,
            ],
        ]);
    }
}
