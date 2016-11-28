<div class="form-group {{ $errors->has('plantas_id') ? 'has-error' : ''}}">
    {!! Form::label('plantas_id', 'Plantas Id', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('plantas_id', null, ['class' => 'form-control']) !!}
        {!! $errors->first('plantas_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('categorias_taxonomicas_id') ? 'has-error' : ''}}">
    {!! Form::label('categorias_taxonomicas_id', 'Categorias Taxonomicas Id', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('categorias_taxonomicas_id', null, ['class' => 'form-control']) !!}
        {!! $errors->first('categorias_taxonomicas_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>