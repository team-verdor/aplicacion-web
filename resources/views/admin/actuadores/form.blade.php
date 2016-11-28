<div class="form-group {{ $errors->has('nombre') ? 'has-error' : ''}}">
    {!! Form::label('nombre', 'Nombre', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
        {!! $errors->first('nombre', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('modelo') ? 'has-error' : ''}}">
    {!! Form::label('modelo', 'Modelo', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('modelo', null, ['class' => 'form-control']) !!}
        {!! $errors->first('modelo', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('fabricantes_id') ? 'has-error' : ''}}">
    {!! Form::label('fabricantes_id', 'Fabricantes Id', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('fabricantes_id', null, ['class' => 'form-control']) !!}
        {!! $errors->first('fabricantes_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>