@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Sectore {{ $sectore->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('administrar/sectores/' . $sectore->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Sectore"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['administrar/sectores', $sectore->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Sectore',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $sectore->id }}</td>
                                    </tr>
                                    <tr><th> Parcelas Id </th><td> {{ $sectore->parcelas_id }} </td></tr><tr><th> Tipos Sectores Id </th><td> {{ $sectore->tipos_sectores_id }} </td></tr><tr><th> Figuras Geograficas Id </th><td> {{ $sectore->figuras_geograficas_id }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection