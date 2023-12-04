@extends('layouts.app')

@section('template_title')
    {{ $producto->name ?? "{{ __('Show') Producto" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Producto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('productos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Tipo Impuesto:</strong>
                            {{ $producto->id_tipo_impuesto }}
                        </div>
                        <div class="form-group">
                            <strong>Id Unidad De Medida:</strong>
                            {{ $producto->id_unidad_de_medida }}
                        </div>
                        <div class="form-group">
                            <strong>Id Categoria:</strong>
                            {{ $producto->id_categoria }}
                        </div>
                        <div class="form-group">
                            <strong>Id Proveedor:</strong>
                            {{ $producto->id_proveedor }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Producto:</strong>
                            {{ $producto->nombre_producto }}
                        </div>
                        <div class="form-group">
                            <strong>Codigo:</strong>
                            {{ $producto->codigo }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $producto->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Precio Unitario:</strong>
                            {{ $producto->precio_unitario }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad En Stock:</strong>
                            {{ $producto->cantidad_en_stock }}
                        </div>
                        <div class="form-group">
                            <strong>Imagen:</strong>
                            {{ $producto->imagen }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Ingreso:</strong>
                            {{ $producto->fecha_ingreso }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Vencimiento:</strong>
                            {{ $producto->fecha_vencimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Stock Minimo:</strong>
                            {{ $producto->stock_minimo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
