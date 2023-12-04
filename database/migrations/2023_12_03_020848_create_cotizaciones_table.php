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
        Schema::create('cotizaciones', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->id();
            $table->foreignId('id_estado_cotizacion')->constrained('estados_cotizaciones');
            $table->foreignId('id_empleado')->constrained('empleados');
            $table->date('fecha');
            $table->smallInteger('meses_vigencia');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cotizaciones');
    }
};
