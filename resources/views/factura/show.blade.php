@extends('layouts.app')

@section('template_title')
    {{ $factura->name ?? "{{ __('Show') Factura" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Factura</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('facturas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Empleado:</strong>
                            {{ $factura->id_empleado }}
                        </div>
                        <div class="form-group">
                            <strong>Id Dato Empresa:</strong>
                            {{ $factura->id_dato_empresa }}
                        </div>
                        <div class="form-group">
                            <strong>Id Metodo Pago:</strong>
                            {{ $factura->id_metodo_pago }}
                        </div>
                        <div class="form-group">
                            <strong>Id Forma Entrega:</strong>
                            {{ $factura->id_forma_entrega }}
                        </div>
                        <div class="form-group">
                            <strong>Id Cliente:</strong>
                            {{ $factura->id_cliente }}
                        </div>
                        <div class="form-group">
                            <strong>Numero Factura:</strong>
                            {{ $factura->numero_factura }}
                        </div>
                        <div class="form-group">
                            <strong>Numero Oc Exenta:</strong>
                            {{ $factura->numero_oc_exenta }}
                        </div>
                        <div class="form-group">
                            <strong>Serie:</strong>
                            {{ $factura->serie }}
                        </div>
                        <div class="form-group">
                            <strong>Cambio:</strong>
                            {{ $factura->cambio }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Emision:</strong>
                            {{ $factura->fecha_emision }}
                        </div>
                        <div class="form-group">
                            <strong>Limite Fecha Emision:</strong>
                            {{ $factura->limite_fecha_emision }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Vencimiento:</strong>
                            {{ $factura->fecha_vencimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Subtotal Neto:</strong>
                            {{ $factura->subtotal_neto }}
                        </div>
                        <div class="form-group">
                            <strong>Subtotal:</strong>
                            {{ $factura->subtotal }}
                        </div>
                        <div class="form-group">
                            <strong>Impuesto15:</strong>
                            {{ $factura->impuesto15 }}
                        </div>
                        <div class="form-group">
                            <strong>Impuesto18:</strong>
                            {{ $factura->impuesto18 }}
                        </div>
                        <div class="form-group">
                            <strong>Importe15:</strong>
                            {{ $factura->importe15 }}
                        </div>
                        <div class="form-group">
                            <strong>Importe18:</strong>
                            {{ $factura->importe18 }}
                        </div>
                        <div class="form-group">
                            <strong>Descuento:</strong>
                            {{ $factura->descuento }}
                        </div>
                        <div class="form-group">
                            <strong>Total:</strong>
                            {{ $factura->total }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
