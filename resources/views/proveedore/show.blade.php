@extends('layouts.app')

@section('template_title')
    {{ $proveedore->name ?? "{{ __('Show') Proveedore" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Proveedore</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('proveedores.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Ciudad:</strong>
                            {{ $proveedore->id_ciudad }}
                        </div>
                        <div class="form-group">
                            <strong>Id Contacto:</strong>
                            {{ $proveedore->id_contacto }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Empresa:</strong>
                            {{ $proveedore->nombre_empresa }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $proveedore->direccion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
