<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SeguridadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            ['rol' => 'Admin'],
            ['rol' => 'Cajero'],
            ['rol' => 'Repartidor'],
        ]);

        // PermisosSeeder
        DB::table('permisos')->insert([
            ['permiso' => 'Administrar Usuarios'],
            ['permiso' => 'Realizar Ventas'],
            ['permiso' => 'Gestionar Entregas'],
        ]);

        // RolesPermisosSeeder
        DB::table('roles_permisos')->insert([
            ['id_rol' => 1, 'id_permiso' => 1],
            ['id_rol' => 1, 'id_permiso' => 2],
            ['id_rol' => 1, 'id_permiso' => 3],
            ['id_rol' => 2, 'id_permiso' => 2],
            ['id_rol' => 3, 'id_permiso' => 3],
        ]);

        DB::table('usuarios')->insert([
            ['id_rol' => 2, 'nombre_usuario' => 'marioo83', 'clave_acceso' => Hash::make('12345'), 'estado' => 1],
            ['id_rol' => 1, 'nombre_usuario' => 'jfarrivillaga', 'clave_acceso' => Hash::make('54321'), 'estado' => 1],
            ['id_rol' => 3, 'nombre_usuario' => 'armando21', 'clave_acceso' => Hash::make('123456789'), 'estado' => 0],
            ['id_rol' => 2, 'nombre_usuario' => 'laurita', 'clave_acceso' => Hash::make('laurita_pass'), 'estado' => 1],
            ['id_rol' => 1, 'nombre_usuario' => 'pedrito', 'clave_acceso' => Hash::make('pedrito_pass'), 'estado' => 1],
            ['id_rol' => 3, 'nombre_usuario' => 'anitaaa', 'clave_acceso' => Hash::make('anita_pass'), 'estado' => 0],
        ]);
    }
}
