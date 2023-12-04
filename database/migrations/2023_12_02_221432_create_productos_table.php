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
        Schema::create('productos', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->id()->unsigned();

            $table->foreignId('id_tipo_impuesto')->constrained('tipos_impuestos');
            $table->foreignId('id_unidad_de_medida')->constrained('unidades_de_medidas');
            $table->foreignId('id_categoria')->constrained('categorias');
            $table->foreignId('id_proveedor')->constrained('proveedores');
            $table->string('nombre_producto', 30);
            $table->string('codigo', 15);
            $table->string('descripcion', 255)->nullable();
            $table->decimal('precio_unitario', 10, 2);
            $table->integer('cantidad_en_stock')->unsigned();
            $table->string('imagen', 100);
            $table->date('fecha_ingreso');
            $table->date('fecha_vencimiento');
            $table->unsignedInteger('stock_minimo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
