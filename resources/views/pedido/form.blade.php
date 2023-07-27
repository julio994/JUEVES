<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('Nombre', $pedido->Nombre, ['class' => 'form-control' . ($errors->has('Nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('Nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cerveza_id') }}
            {{ Form::text('cerveza_id', $pedido->cerveza_id, ['class' => 'form-control' . ($errors->has('cerveza_id') ? ' is-invalid' : ''), 'placeholder' => 'Cerveza Id']) }}
            {!! $errors->first('cerveza_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('michelada_id') }}
            {{ Form::text('michelada_id', $pedido->michelada_id, ['class' => 'form-control' . ($errors->has('michelada_id') ? ' is-invalid' : ''), 'placeholder' => 'Michelada Id']) }}
            {!! $errors->first('michelada_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('coctel_id') }}
            {{ Form::text('coctel_id', $pedido->coctel_id, ['class' => 'form-control' . ($errors->has('coctel_id') ? ' is-invalid' : ''), 'placeholder' => 'Coctel Id']) }}
            {!! $errors->first('coctel_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('total') }}
            {{ Form::text('total', $pedido->total, ['class' => 'form-control' . ($errors->has('total') ? ' is-invalid' : ''), 'placeholder' => 'Total']) }}
            {!! $errors->first('total', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>