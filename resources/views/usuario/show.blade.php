@extends('layouts.app')

@section('template_title')
    {{ $usuario->name ?? "{{ __('Show') Usuario" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Usuario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('usuarios.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Rol:</strong>
                            {{ $usuario->id_rol }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Usuario:</strong>
                            {{ $usuario->nombre_usuario }}
                        </div>
                        <div class="form-group">
                            <strong>Clave Acceso:</strong>
                            {{ $usuario->clave_acceso }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $usuario->estado }}
                        </div>
                        <div class="form-group">
                            <strong>Token Recuperacion:</strong>
                            {{ $usuario->token_recuperacion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
