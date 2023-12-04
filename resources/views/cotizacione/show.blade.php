@extends('layouts.app')

@section('template_title')
    {{ $cotizacione->name ?? "{{ __('Show') Cotizacione" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Cotizacione</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cotizaciones.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Estado Cotizacion:</strong>
                            {{ $cotizacione->id_estado_cotizacion }}
                        </div>
                        <div class="form-group">
                            <strong>Id Empleado:</strong>
                            {{ $cotizacione->id_empleado }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $cotizacione->fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Meses Vigencia:</strong>
                            {{ $cotizacione->meses_vigencia }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
