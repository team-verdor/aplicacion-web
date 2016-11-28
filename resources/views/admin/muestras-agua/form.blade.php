<div class="form-group {{ $errors->has('ordenes_muestreos_id') ? 'has-error' : ''}}">
    {!! Form::label('ordenes_muestreos_id', 'Ordenes Muestreos Id', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('ordenes_muestreos_id', null, ['class' => 'form-control']) !!}
        {!! $errors->first('ordenes_muestreos_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>