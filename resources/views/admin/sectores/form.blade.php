<div class="form-group {{ $errors->has('parcelas_id') ? 'has-error' : ''}}">
    {!! Form::label('parcelas_id', 'Parcelas Id', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('parcelas_id', null, ['class' => 'form-control']) !!}
        {!! $errors->first('parcelas_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('tipos_sectores_id') ? 'has-error' : ''}}">
    {!! Form::label('tipos_sectores_id', 'Tipos Sectores Id', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('tipos_sectores_id', null, ['class' => 'form-control']) !!}
        {!! $errors->first('tipos_sectores_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('figuras_geograficas_id') ? 'has-error' : ''}}">
    {!! Form::label('figuras_geograficas_id', 'Figuras Geograficas Id', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('figuras_geograficas_id', null, ['class' => 'form-control']) !!}
        {!! $errors->first('figuras_geograficas_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>