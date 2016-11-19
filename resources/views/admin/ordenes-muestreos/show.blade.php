@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">OrdenesMuestreo {{ $ordenesmuestreo->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('administrar/ordenes-muestreos/' . $ordenesmuestreo->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit OrdenesMuestreo"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['administrar/ordenesmuestreos', $ordenesmuestreo->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete OrdenesMuestreo',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $ordenesmuestreo->id }}</td>
                                    </tr>
                                    <tr><th> Fecha Orden </th><td> {{ $ordenesmuestreo->fecha_orden }} </td></tr><tr><th> Motivo </th><td> {{ $ordenesmuestreo->motivo }} </td></tr><tr><th> Comentarios </th><td> {{ $ordenesmuestreo->comentarios }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection