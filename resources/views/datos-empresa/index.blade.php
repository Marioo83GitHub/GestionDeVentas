@extends('layouts.app')

@section('template_title')
    Datos Empresa
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Datos Empresa') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('datos-empresas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Nombre Empresa</th>
										<th>Logo</th>
										<th>Direccion</th>
										<th>Telefono</th>
										<th>Correo</th>
										<th>Descripcion</th>
										<th>Rtn</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($datosEmpresas as $datosEmpresa)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $datosEmpresa->nombre_empresa }}</td>
											<td>{{ $datosEmpresa->logo }}</td>
											<td>{{ $datosEmpresa->direccion }}</td>
											<td>{{ $datosEmpresa->telefono }}</td>
											<td>{{ $datosEmpresa->correo }}</td>
											<td>{{ $datosEmpresa->descripcion }}</td>
											<td>{{ $datosEmpresa->rtn }}</td>

                                            <td>
                                                <form action="{{ route('datos-empresas.destroy',$datosEmpresa->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('datos-empresas.show',$datosEmpresa->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('datos-empresas.edit',$datosEmpresa->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $datosEmpresas->links() !!}
            </div>
        </div>
    </div>
@endsection
