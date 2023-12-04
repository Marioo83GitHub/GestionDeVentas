@extends('layouts.app')

@section('template_title')
    {{ $datosEmpresa->name ?? "{{ __('Show') Datos Empresa" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Datos Empresa</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('datos-empresas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre Empresa:</strong>
                            {{ $datosEmpresa->nombre_empresa }}
                        </div>
                        <div class="form-group">
                            <strong>Logo:</strong>
                            {{ $datosEmpresa->logo }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $datosEmpresa->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $datosEmpresa->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Correo:</strong>
                            {{ $datosEmpresa->correo }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $datosEmpresa->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Rtn:</strong>
                            {{ $datosEmpresa->rtn }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
