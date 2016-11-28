<div class="form-group {{ $errors->has('fecha_siembra') ? 'has-error' : ''}}">
    {!! Form::label('fecha_siembra', 'Fecha Siembra', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::date('fecha_siembra', null, ['class' => 'form-control']) !!}
        {!! $errors->first('fecha_siembra', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('fecha_cosecha') ? 'has-error' : ''}}">
    {!! Form::label('fecha_cosecha', 'Fecha Cosecha', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::date('fecha_cosecha', null, ['class' => 'form-control']) !!}
        {!! $errors->first('fecha_cosecha', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('sectores_id') ? 'has-error' : ''}}">
    {!! Form::label('sectores_id', 'Sectores Id', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('sectores_id', null, ['class' => 'form-control']) !!}
        {!! $errors->first('sectores_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('plantas_id') ? 'has-error' : ''}}">
    {!! Form::label('plantas_id', 'Plantas Id', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('plantas_id', null, ['class' => 'form-control']) !!}
        {!! $errors->first('plantas_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>