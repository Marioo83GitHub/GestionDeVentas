<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->id();
            $table->foreignId('id_ciudad')->constrained('ciudades');
            $table->foreignId('id_empresa')->constrained('empresas');
            $table->string('primer_nombre', 20);
            $table->string('primer_apellido', 20);
            $table->string('num_reg_exonerado', 20)->unique();
            $table->string('num_reg_sag', 20)->unique();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
