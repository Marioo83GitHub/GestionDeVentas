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
        Schema::create('tipos_impuestos', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->id();
            $table->string('tipo_impuesto', 7)->unique();
            $table->char('abreviacion', 1)->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipos_impuestos');
    }
};
