@extends('layouts.app')

@section('template_title')
    {{ $municipio->name ?? "{{ __('Show') Municipio" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Municipio</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('municipios.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Departamento:</strong>
                            {{ $municipio->id_departamento }}
                        </div>
                        <div class="form-group">
                            <strong>Municipio:</strong>
                            {{ $municipio->municipio }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
