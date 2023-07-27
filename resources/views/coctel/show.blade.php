@extends('layouts.app')

@section('template_title')
    {{ $coctel->name ?? "{{ __('Show') Coctel" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Coctel</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('coctels.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $coctel->Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Adicional Id:</strong>
                            {{ $coctel->adicional_id }}
                        </div>
                        <div class="form-group">
                            <strong>Valor:</strong>
                            {{ $coctel->Valor }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
