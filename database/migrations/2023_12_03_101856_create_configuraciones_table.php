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
        Schema::create('configuraciones', function (Blueprint $table) {
            $table->id();
            // id usuario, id moneda, id idioma, id formato fecha, id impuesto, id importe
            $table->foreignId('id_usuario')->constrained('usuarios');
            $table->foreignId('id_moneda')->constrained('monedas');
            $table->foreignId('id_idioma')->constrained('idiomas');
            $table->foreignId('id_formato_fecha')->constrained('formatos_fechas');
            $table->foreignId('id_impuesto')->constrained('impuestos');
            $table->foreignId('id_importe')->constrained('importes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('configuraciones');
    }
};
