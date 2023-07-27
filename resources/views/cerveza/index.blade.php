@extends('layouts.app')

@section('template_title')
    Cerveza
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cerveza') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('cervezas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Nombre</th>
										<th>Valor Compra</th>
										<th>Valor Venta</th>
										<th>Cantidad</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cervezas as $cerveza)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $cerveza->Nombre }}</td>
											<td>{{ $cerveza->Valor_compra }}</td>
											<td>{{ $cerveza->Valor_venta }}</td>
											<td>{{ $cerveza->Cantidad }}</td>

                                            <td>
                                                <form action="{{ route('cervezas.destroy',$cerveza->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('cervezas.show',$cerveza->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('cervezas.edit',$cerveza->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $cervezas->links() !!}
            </div>
        </div>
    </div>
@endsection
