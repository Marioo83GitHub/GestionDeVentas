@extends('layouts.app')

@section('template_title')
    {{ $detallesFactura->name ?? "{{ __('Show') Detalles Factura" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Detalles Factura</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('detalles-facturas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Factura:</strong>
                            {{ $detallesFactura->id_factura }}
                        </div>
                        <div class="form-group">
                            <strong>Id Producto:</strong>
                            {{ $detallesFactura->id_producto }}
                        </div>
                        <div class="form-group">
                            <strong>Subtotal:</strong>
                            {{ $detallesFactura->subtotal }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $detallesFactura->cantidad }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
