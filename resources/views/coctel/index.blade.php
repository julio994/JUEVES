@extends('layouts.app')

@section('template_title')
    Coctel
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Coctel') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('coctels.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Adicional Id</th>
										<th>Valor</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($coctels as $coctel)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $coctel->Nombre }}</td>
											<td>{{ $coctel->adicional_id }}</td>
											<td>{{ $coctel->Valor }}</td>

                                            <td>
                                                <form action="{{ route('coctels.destroy',$coctel->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('coctels.show',$coctel->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('coctels.edit',$coctel->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $coctels->links() !!}
            </div>
        </div>
    </div>
@endsection
