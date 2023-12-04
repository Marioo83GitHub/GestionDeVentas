<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmpleadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('estados_civiles')->insert([
            ['estado_civil' => 'Casado'],
            ['estado_civil' => 'Soltero']

        ]);

        DB::table('jornadas')->insert([
            ['hora_entrada' => '09:00:00', 'hora_salida' => '17:00:00', 'nombre' => 'Diurna'],
            ['hora_entrada' => '13:00:00', 'hora_salida' => '21:00:00', 'nombre' => 'Vespertina'],
            ['hora_entrada' => '22:00:00', 'hora_salida' => '06:00:00', 'nombre' => 'Nocturna'],
        ]);

        DB::table('empleados')->insert([
            ['id_estado_civil' => 1, 'id_usuario' => 1, 'primer_nombre' => 'Juan', 'primer_apellido' => 'Pérez', 'fecha_nacimiento' => '1990-05-15', 'correo' => 'juan.perez@email.com', 'telefono' => '123456789', 'direccion' => 'Calle A, Ciudad X', 'sexo' => 1, 'numero_seguro_social' => 123456789],
            ['id_estado_civil' => 2, 'id_usuario' => 2, 'primer_nombre' => 'María', 'primer_apellido' => 'Gómez', 'fecha_nacimiento' => '1985-08-20', 'correo' => 'maria.gomez@email.com', 'telefono' => '987654321', 'direccion' => 'Calle B, Ciudad Y', 'sexo' => 0, 'numero_seguro_social' => 987654321],
            ['id_estado_civil' => 1, 'id_usuario' => 3, 'primer_nombre' => 'Carlos', 'primer_apellido' => 'Ramírez', 'fecha_nacimiento' => '1992-03-10', 'correo' => 'carlos.ramirez@email.com', 'telefono' => '555555555', 'direccion' => 'Calle C, Ciudad Z', 'sexo' => 1, 'numero_seguro_social' => 555555555],
            ['id_estado_civil' => 2, 'id_usuario' => 4, 'primer_nombre' => 'Laura', 'primer_apellido' => 'Hernández', 'fecha_nacimiento' => '1988-11-25', 'correo' => 'laura.hernandez@email.com', 'telefono' => '111222333', 'direccion' => 'Calle D, Ciudad W', 'sexo' => 0, 'numero_seguro_social' => 111223333],
            ['id_estado_civil' => 1, 'id_usuario' => 5, 'primer_nombre' => 'Pedro', 'primer_apellido' => 'Sánchez', 'fecha_nacimiento' => '1995-07-02', 'correo' => 'pedro.sanchez@email.com', 'telefono' => '999888777', 'direccion' => 'Calle E, Ciudad V', 'sexo' => 1, 'numero_seguro_social' => 999887777],
            ['id_estado_civil' => 2, 'id_usuario' => 6, 'primer_nombre' => 'Ana', 'primer_apellido' => 'López', 'fecha_nacimiento' => '1987-12-18', 'correo' => 'ana.lopez@email.com', 'telefono' => '444333222', 'direccion' => 'Calle F, Ciudad U', 'sexo' => 0, 'numero_seguro_social' => 444332222],
        ]);

        DB::table('contratos')->insert([
            ['id_empleado' => 1, 'fecha_contrato' => '2023-01-10', 'tipo_contrato' => 'Tiempo Completo', 'salario' => 50000, 'id_jornada' => 1, 'descripcion' => 'Contrato para puesto de desarrollo', 'estado' => 1],
            ['id_empleado' => 2, 'fecha_contrato' => '2023-02-15', 'tipo_contrato' => 'Medio Tiempo', 'salario' => 30000, 'id_jornada' => 2, 'descripcion' => 'Contrato para atención al cliente', 'estado' => 1],
            ['id_empleado' => 3, 'fecha_contrato' => '2023-03-20', 'tipo_contrato' => 'Tiempo Completo', 'salario' => 60000, 'id_jornada' => 3, 'descripcion' => 'Contrato para repartidor', 'estado' => 0],
            ['id_empleado' => 4, 'fecha_contrato' => '2023-04-25', 'tipo_contrato' => 'Tiempo Completo', 'salario' => 55000, 'id_jornada' => 1, 'descripcion' => 'Contrato para analista de datos', 'estado' => 2],
            ['id_empleado' => 5, 'fecha_contrato' => '2023-05-30', 'tipo_contrato' => 'Tiempo Completo', 'salario' => 52000, 'id_jornada' => 2, 'descripcion' => 'Contrato para cajero', 'estado' => 1],
            ['id_empleado' => 6, 'fecha_contrato' => '2023-06-05', 'tipo_contrato' => 'Medio Tiempo', 'salario' => 32000, 'id_jornada' => 3, 'descripcion' => 'Contrato para asistente administrativo', 'estado' => 1],
        ]);

        // Inserción en la tabla 'motivos_despidos'
        DB::table('motivos_despidos')->insert([
            ['motivo_despido' => 'Reducción de personal'],
            ['motivo_despido' => 'Desempeño laboral insatisfactorio'],
            ['motivo_despido' => 'Robo'],
            ['motivo_despido' => 'Violación de políticas de la empresa'],
            ['motivo_despido' => 'Finalización de contrato temporal'],
        ]);

        // Inserción en la tabla 'despidos'
        DB::table('despidos')->insert([
            ['id_contrato' => 2, 'id_motivo_despido' => 2, 'fecha' => '2023-07-15', 'observaciones' => 'Despido debido a desempeño laboral insatisfactorio'],
            ['id_contrato' => 3, 'id_motivo_despido' => 1, 'fecha' => '2023-08-20', 'observaciones' => 'Despido debido a reducción de personal'],
            ['id_contrato' => 5, 'id_motivo_despido' => 3, 'fecha' => '2023-09-25', 'observaciones' => 'Despido debido a violación de políticas de la empresa'],
        ]);
    }
}
