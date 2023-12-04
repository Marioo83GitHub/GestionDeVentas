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
        Schema::create('contratos', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->id();
            $table->foreignId('id_empleado')->constrained('empleados');
            $table->foreignId('id_jornada')->constrained('jornadas');
            $table->decimal('salario', 8, 2);
            $table->string('descripcion', 100)->nullable();
            $table->string('tipo_contrato', 15);
            $table->string('estado', 100);
            $table->date('fecha_contrato');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contratos');
    }
};
