@extends('layouts.app')

@section('template_title')
    Detalles Cotizaciones
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Detalles Cotizacione') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('detalles-cotizaciones.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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

										<th>Id Cotizacion</th>
										<th>Id Producto</th>
										<th>Cantidad</th>
										<th>Subtotal</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($detallesCotizaciones as $detallesCotizacione)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $detallesCotizacione->id_cotizacion }}</td>
											<td>{{ $detallesCotizacione->id_producto }}</td>
											<td>{{ $detallesCotizacione->cantidad }}</td>
											<td>{{ $detallesCotizacione->subtotal }}</td>

                                            <td>
                                                <form action="{{ route('detalles-cotizaciones.destroy',$detallesCotizacione->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('detalles-cotizaciones.show',$detallesCotizacione->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('detalles-cotizaciones.edit',$detallesCotizacione->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $detallesCotizaciones->links() !!}
            </div>
        </div>
    </div>
@endsection
