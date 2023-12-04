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
        Schema::create('movimientos', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->id();
            $table->foreignId('id_producto')->constrained('productos');
            $table->foreignId('id_motivo')->constrained('motivos');
            $table->foreignId('id_tipo_movimiento')->constrained('tipos_movimientos');
            $table->date('fecha');
            $table->integer('cantidad');
            $table->string('observaciones', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movimientos');
    }
};
