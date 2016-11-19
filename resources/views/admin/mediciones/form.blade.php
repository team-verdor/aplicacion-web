<div class="form-group {{ $errors->has('emision') ? 'has-error' : ''}}">
    {!! Form::label('emision', 'Emision', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::date('emision', null, ['class' => 'form-control']) !!}
        {!! $errors->first('emision', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('valor') ? 'has-error' : ''}}">
    {!! Form::label('valor', 'Valor', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('valor', null, ['class' => 'form-control']) !!}
        {!! $errors->first('valor', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('valor_numero') ? 'has-error' : ''}}">
    {!! Form::label('valor_numero', 'Valor Numero', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('valor_numero', null, ['class' => 'form-control']) !!}
        {!! $errors->first('valor_numero', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('exponente') ? 'has-error' : ''}}">
    {!! Form::label('exponente', 'Exponente', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('exponente', null, ['class' => 'form-control']) !!}
        {!! $errors->first('exponente', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('sensores_id') ? 'has-error' : ''}}">
    {!! Form::label('sensores_id', 'Sensores Id', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('sensores_id', null, ['class' => 'form-control']) !!}
        {!! $errors->first('sensores_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('controladores_id') ? 'has-error' : ''}}">
    {!! Form::label('controladores_id', 'Controladores Id', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('controladores_id', null, ['class' => 'form-control']) !!}
        {!! $errors->first('controladores_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>