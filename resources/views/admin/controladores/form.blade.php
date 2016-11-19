<div class="form-group {{ $errors->has('serie') ? 'has-error' : ''}}">
    {!! Form::label('serie', 'Serie', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('serie', null, ['class' => 'form-control']) !!}
        {!! $errors->first('serie', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('estado') ? 'has-error' : ''}}">
    {!! Form::label('estado', 'Estado', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('estado', null, ['class' => 'form-control']) !!}
        {!! $errors->first('estado', '<p class="help-block">:message</p>') !!}
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