@extends('layouts.app')

@section('template_title')
    Detalles Factura
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Detalles Factura') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('detalles-facturas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Id Factura</th>
										<th>Id Producto</th>
										<th>Subtotal</th>
										<th>Cantidad</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($detallesFacturas as $detallesFactura)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $detallesFactura->id_factura }}</td>
											<td>{{ $detallesFactura->id_producto }}</td>
											<td>{{ $detallesFactura->subtotal }}</td>
											<td>{{ $detallesFactura->cantidad }}</td>

                                            <td>
                                                <form action="{{ route('detalles-facturas.destroy',$detallesFactura->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('detalles-facturas.show',$detallesFactura->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('detalles-facturas.edit',$detallesFactura->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $detallesFacturas->links() !!}
            </div>
        </div>
    </div>
@endsection
