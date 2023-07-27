<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('Nombre', $cerveza->Nombre, ['class' => 'form-control' . ($errors->has('Nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('Nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Valor_compra') }}
            {{ Form::text('Valor_compra', $cerveza->Valor_compra, ['class' => 'form-control' . ($errors->has('Valor_compra') ? ' is-invalid' : ''), 'placeholder' => 'Valor Compra']) }}
            {!! $errors->first('Valor_compra', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Valor_venta') }}
            {{ Form::text('Valor_venta', $cerveza->Valor_venta, ['class' => 'form-control' . ($errors->has('Valor_venta') ? ' is-invalid' : ''), 'placeholder' => 'Valor Venta']) }}
            {!! $errors->first('Valor_venta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Cantidad') }}
            {{ Form::text('Cantidad', $cerveza->Cantidad, ['class' => 'form-control' . ($errors->has('Cantidad') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad']) }}
            {!! $errors->first('Cantidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>