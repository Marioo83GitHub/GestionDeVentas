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
        Schema::create('facturas', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->id();
            $table->foreignId('id_empleado')->constrained('empleados');
            $table->foreignId('id_dato_empresa')->constrained('datos_empresas');
            $table->foreignId('id_metodo_pago')->constrained('metodos_pagos');
            $table->foreignId('id_forma_entrega')->constrained('formas_entregas');
            $table->foreignId('id_cliente')->constrained('clientes');
            $table->string('numero_factura', 11)->unique();
            $table->string('numero_oc_exenta', 11)->unique();
            $table->string('serie', 15)->unique();
            $table->decimal('cambio', 10, 2);
            $table->date('fecha_emision');
            $table->date('limite_fecha_emision');
            $table->date('fecha_vencimiento');
            $table->decimal('subtotal_neto', 8, 2);
            $table->decimal('subtotal', 8, 2);
            $table->decimal('impuesto15', 8, 2);
            $table->decimal('impuesto18', 8, 2);
            $table->decimal('importe15', 8, 2);
            $table->decimal('importe18', 8, 2);
            $table->decimal('descuento', 8, 2);
            $table->decimal('total', 8, 2);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facturas');
    }
};
