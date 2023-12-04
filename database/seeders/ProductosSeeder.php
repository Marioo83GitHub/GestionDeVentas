<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('contactos')->insert([
            ['primer_nombre' => 'Mario', 'primer_apellido' => 'Carbajal', 'correo' => 'mcarbajal@unah.hn'],
            ['primer_nombre' => 'Fernando', 'primer_apellido' => 'Gonzales', 'correo' => 'fgonzales@gmail.hn'],
            ['primer_nombre' => 'Luis', 'primer_apellido' => 'Cruz', 'correo' => 'lcruz@outlook.hn'],
        ]);

        DB::table('proveedores')->insert([
            ['id_ciudad' => 4, 'id_contacto' => 1, 'nombre_empresa' => 'Indalcen', 'direccion' => 'Barrio Guamilito'],
            ['id_ciudad' => 4, 'id_contacto' => 2, 'nombre_empresa' => 'HonduPalma', 'direccion' => 'Barrio La Ceiba'],
            ['id_ciudad' => 3, 'id_contacto' => 3, 'nombre_empresa' => 'Plasticos HN', 'direccion' => 'Barrio La Pradera'],
        ]);

        // Insertar datos en la tabla Categorias
        DB::table('categorias')->insert([
            ['categoria' => 'Cartones'],
            ['categoria' => 'Comestibles'],
            ['categoria' => 'Harinas'],
            ['categoria' => 'Dulces'],
            ['categoria' => 'Plasticos'],
        ]);

        // Insertar datos en la tabla UnidadesDeMedida
        DB::table('unidades_de_medidas')->insert([
            ['unidad_de_medida' => 'Gramo', 'abreviacion' => 'gr', 'cantidad' => 1],
            ['unidad_de_medida' => 'Libra', 'abreviacion' => 'lb', 'cantidad' => 1],
            ['unidad_de_medida' => 'Kilogramo', 'abreviacion' => 'kg', 'cantidad' => 1],
            ['unidad_de_medida' => 'Quintal', 'abreviacion' => 'Q', 'cantidad' => 1],
            ['unidad_de_medida' => 'Arroba', 'abreviacion' => '@', 'cantidad' => 1],
        ]);

        // Insertar datos en la tabla TiposImpuestos
        DB::table('tipos_impuestos')->insert([
            ['tipo_impuesto' => 'Gravado', 'abreviacion' => 'G'],
            ['tipo_impuesto' => 'Excento', 'abreviacion' => 'E'],
        ]);

        // ...

        // Insertar datos en la tabla Marcas
        DB::table('marcas')->insert([
            ['nombre_marca' => 'Panadero', 'descripcion' => 'Harina fuerte'],
            ['nombre_marca' => 'Fermipan', 'descripcion' => 'Levadura Brown'],
            ['nombre_marca' => 'OR', 'descripcion' => 'Caja mediana'],
            ['nombre_marca' => 'Interpack', 'descripcion' => 'Caja fuerte'],
            ['nombre_marca' => 'Golden', 'descripcion' => 'Harina Suave'],
        ]);

        // Insertar datos en la tabla Productos
        DB::table('productos')->insert([
            [
                'id_tipo_impuesto' => 1,
                'id_unidad_de_medida' => 4,
                'id_categoria' => 1,
                'id_proveedor' => 1,
                'nombre_producto' => 'Harina Panadero',
                'codigo' => '91827239',
                'descripcion' => 'Harina especial para pan',
                'precio_unitario' => 1050.00,
                'cantidad_en_stock' => 30,
                'imagen' => '',
                'fecha_ingreso' => '2023-12-03',
                'fecha_vencimiento' => '2024-03-03',
                'stock_minimo' => 5,
            ],
            [
                'id_tipo_impuesto' => 1,
                'id_unidad_de_medida' => 4,
                'id_categoria' => 1,
                'id_proveedor' => 1,
                'nombre_producto' => 'Harina Gloden',
                'codigo' => '9283636',
                'descripcion' => 'Harina especial para pasteles',
                'precio_unitario' => 1200.00,
                'cantidad_en_stock' => 30,
                'imagen' => '',
                'fecha_ingreso' => '2023-12-03',
                'fecha_vencimiento' => '2024-03-03',
                'stock_minimo' => 5,
            ],
            [
                'id_tipo_impuesto' => 1,
                'id_unidad_de_medida' => 4,
                'id_categoria' => 1,
                'id_proveedor' => 1,
                'nombre_producto' => 'Harina Cumbre',
                'codigo' => '6353728',
                'descripcion' => 'Harina especial para galletas',
                'precio_unitario' => 990.00,
                'cantidad_en_stock' => 30,
                'imagen' => '',
                'fecha_ingreso' => '2023-12-03',
                'fecha_vencimiento' => '2024-03-03',
                'stock_minimo' => 5,
            ],
        ]);


    }
}
