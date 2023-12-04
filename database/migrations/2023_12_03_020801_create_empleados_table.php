<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

    public function up(): void
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->id();
            $table->foreignId('id_usuario')->constrained('usuarios');
            $table->foreignId('id_estado_civil')->constrained('estados_civiles');
            $table->string('primer_nombre', 20);
            $table->string('primer_apellido', 20);
            $table->string('sexo', 1);
            $table->string('direccion', 100);
            $table->string('numero_seguro_social', 20)->unique();
            $table->string('telefono', 12)->unique();
            $table->string('correo', 100)->unique();
            $table->date('fecha_nacimiento');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleados');
    }
};
