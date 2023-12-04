@extends('layouts.app')

@section('template_title')
    Cotizacione
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cotizacione') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('cotizaciones.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Id Estado Cotizacion</th>
										<th>Id Empleado</th>
										<th>Fecha</th>
										<th>Meses Vigencia</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cotizaciones as $cotizacione)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $cotizacione->id_estado_cotizacion }}</td>
											<td>{{ $cotizacione->id_empleado }}</td>
											<td>{{ $cotizacione->fecha }}</td>
											<td>{{ $cotizacione->meses_vigencia }}</td>

                                            <td>
                                                <form action="{{ route('cotizaciones.destroy',$cotizacione->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('cotizaciones.show',$cotizacione->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('cotizaciones.edit',$cotizacione->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $cotizaciones->links() !!}
            </div>
        </div>
    </div>
@endsection
