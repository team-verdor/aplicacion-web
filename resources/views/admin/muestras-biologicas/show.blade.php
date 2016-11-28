@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">MuestrasBiologica {{ $muestrasbiologica->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('administrar/muestras-biologicas/' . $muestrasbiologica->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit MuestrasBiologica"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['administrar/muestrasbiologicas', $muestrasbiologica->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete MuestrasBiologica',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $muestrasbiologica->id }}</td>
                                    </tr>
                                    <tr><th> Ordenes Muestreos Id </th><td> {{ $muestrasbiologica->ordenes_muestreos_id }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection