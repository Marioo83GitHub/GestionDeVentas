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
        Schema::create('unidades_de_medidas', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->id();
            $table->string('unidad_de_medida', 20)->unique();
            $table->string('abreviacion', 6)->unique();
            $table->integer('cantidad')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('unidades_de_medidas');
    }
};
