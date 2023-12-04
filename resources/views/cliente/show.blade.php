@extends('layouts.app')

@section('template_title')
    {{ $cliente->name ?? "{{ __('Show') Cliente" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Cliente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('clientes.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Ciudad:</strong>
                            {{ $cliente->id_ciudad }}
                        </div>
                        <div class="form-group">
                            <strong>Id Empresa:</strong>
                            {{ $cliente->id_empresa }}
                        </div>
                        <div class="form-group">
                            <strong>Primer Nombre:</strong>
                            {{ $cliente->primer_nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Primer Apellido:</strong>
                            {{ $cliente->primer_apellido }}
                        </div>
                        <div class="form-group">
                            <strong>Num Reg Exonerado:</strong>
                            {{ $cliente->num_reg_exonerado }}
                        </div>
                        <div class="form-group">
                            <strong>Num Reg Sag:</strong>
                            {{ $cliente->num_reg_sag }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
