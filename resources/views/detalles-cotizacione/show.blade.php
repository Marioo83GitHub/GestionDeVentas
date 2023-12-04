@extends('layouts.app')

@section('template_title')
    {{ $detallesCotizacione->name ?? "{{ __('Show') Detalles Cotizacione" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Detalles Cotizacione</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('detalles-cotizaciones.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Cotizacion:</strong>
                            {{ $detallesCotizacione->id_cotizacion }}
                        </div>
                        <div class="form-group">
                            <strong>Id Producto:</strong>
                            {{ $detallesCotizacione->id_producto }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $detallesCotizacione->cantidad }}
                        </div>
                        <div class="form-group">
                            <strong>Subtotal:</strong>
                            {{ $detallesCotizacione->subtotal }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
