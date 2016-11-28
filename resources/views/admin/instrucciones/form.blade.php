<div class="form-group {{ $errors->has('controladores_id') ? 'has-error' : ''}}">
    {!! Form::label('controladores_id', 'Controladores Id', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('controladores_id', null, ['class' => 'form-control']) !!}
        {!! $errors->first('controladores_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('actuadores_id') ? 'has-error' : ''}}">
    {!! Form::label('actuadores_id', 'Actuadores Id', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('actuadores_id', null, ['class' => 'form-control']) !!}
        {!! $errors->first('actuadores_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('emision') ? 'has-error' : ''}}">
    {!! Form::label('emision', 'Emision', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::date('emision', null, ['class' => 'form-control']) !!}
        {!! $errors->first('emision', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>