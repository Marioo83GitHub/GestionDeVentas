@extends('layouts.app')

@section('template_title')
    Factura
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Factura') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('facturas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Id Empleado</th>
										<th>Id Dato Empresa</th>
										<th>Id Metodo Pago</th>
										<th>Id Forma Entrega</th>
										<th>Id Cliente</th>
										<th>Numero Factura</th>
										<th>Numero Oc Exenta</th>
										<th>Serie</th>
										<th>Cambio</th>
										<th>Fecha Emision</th>
										<th>Limite Fecha Emision</th>
										<th>Fecha Vencimiento</th>
										<th>Subtotal Neto</th>
										<th>Subtotal</th>
										<th>Impuesto15</th>
										<th>Impuesto18</th>
										<th>Importe15</th>
										<th>Importe18</th>
										<th>Descuento</th>
										<th>Total</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($facturas as $factura)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $factura->id_empleado }}</td>
											<td>{{ $factura->id_dato_empresa }}</td>
											<td>{{ $factura->id_metodo_pago }}</td>
											<td>{{ $factura->id_forma_entrega }}</td>
											<td>{{ $factura->id_cliente }}</td>
											<td>{{ $factura->numero_factura }}</td>
											<td>{{ $factura->numero_oc_exenta }}</td>
											<td>{{ $factura->serie }}</td>
											<td>{{ $factura->cambio }}</td>
											<td>{{ $factura->fecha_emision }}</td>
											<td>{{ $factura->limite_fecha_emision }}</td>
											<td>{{ $factura->fecha_vencimiento }}</td>
											<td>{{ $factura->subtotal_neto }}</td>
											<td>{{ $factura->subtotal }}</td>
											<td>{{ $factura->impuesto15 }}</td>
											<td>{{ $factura->impuesto18 }}</td>
											<td>{{ $factura->importe15 }}</td>
											<td>{{ $factura->importe18 }}</td>
											<td>{{ $factura->descuento }}</td>
											<td>{{ $factura->total }}</td>

                                            <td>
                                                <form action="{{ route('facturas.destroy',$factura->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('facturas.show',$factura->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('facturas.edit',$factura->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $facturas->links() !!}
            </div>
        </div>
    </div>
@endsection
