@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">MuestrasSuelo {{ $muestrassuelo->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('administrar/muestras-suelo/' . $muestrassuelo->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit MuestrasSuelo"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['administrar/muestrassuelo', $muestrassuelo->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete MuestrasSuelo',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $muestrassuelo->id }}</td>
                                    </tr>
                                    <tr><th> Metodo Muestreo </th><td> {{ $muestrassuelo->metodo_muestreo }} </td></tr><tr><th> Color </th><td> {{ $muestrassuelo->color }} </td></tr><tr><th> Textura </th><td> {{ $muestrassuelo->textura }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection