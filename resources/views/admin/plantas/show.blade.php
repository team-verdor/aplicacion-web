@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Planta {{ $planta->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('administrar/plantas/' . $planta->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Planta"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['administrar/plantas', $planta->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Planta',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $planta->id }}</td>
                                    </tr>
                                    <tr><th> Nombre Comun </th><td> {{ $planta->nombre_comun }} </td></tr><tr><th> Nombre Cientifico </th><td> {{ $planta->nombre_cientifico }} </td></tr><tr><th> Tipo Plantas Id </th><td> {{ $planta->tipo_plantas_id }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection