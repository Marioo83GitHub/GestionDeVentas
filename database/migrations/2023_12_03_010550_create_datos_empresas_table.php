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
        Schema::create('datos_empresas', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->id();
            // nombre, logo, direccion, telefono, correo, descripcion, rtn.
            $table->string('nombre_empresa', 50)->unique();
            $table->string('logo', 100)->nullable();
            $table->string('direccion', 100);
            $table->string('telefono', 15);
            $table->string('correo', 100)->unique();
            $table->string('descripcion', 255)->nullable();
            $table->string('rtn', 15)->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datos_empresas');
    }
};
