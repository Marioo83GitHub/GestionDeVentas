@extends('layouts.app')

@section('template_title')
    {{ $contrato->name ?? "{{ __('Show') Contrato" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Contrato</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('contratos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Empleado:</strong>
                            {{ $contrato->id_empleado }}
                        </div>
                        <div class="form-group">
                            <strong>Id Jornada:</strong>
                            {{ $contrato->id_jornada }}
                        </div>
                        <div class="form-group">
                            <strong>Salario:</strong>
                            {{ $contrato->salario }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $contrato->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo Contrato:</strong>
                            {{ $contrato->tipo_contrato }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $contrato->estado }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Contrato:</strong>
                            {{ $contrato->fecha_contrato }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
