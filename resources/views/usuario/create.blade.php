@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Usuario
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Usuario</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('usuarios.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="id_rol">Rol</label>
                                <select class="form-control" id="id_rol" name="id_rol">
                                    @foreach($roles as $rol)
                                        <option value="{{ $rol->id }}">{{ $rol->rol }}</option>
                                    @endforeach
                                </select>
                            </div>

                            @include('usuario.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
