@extends('layouts.app')

@section('template_title')
    {{ $departamento->name ?? "{{ __('Show') Departamento" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Departamento</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('departamentos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Pais:</strong>
                            {{ $departamento->id_pais }}
                        </div>
                        <div class="form-group">
                            <strong>Departamento:</strong>
                            {{ $departamento->departamento }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
