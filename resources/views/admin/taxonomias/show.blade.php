@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Taxonomia {{ $taxonomia->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('administrar/taxonomias/' . $taxonomia->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Taxonomia"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['administrar/taxonomias', $taxonomia->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Taxonomia',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $taxonomia->id }}</td>
                                    </tr>
                                    <tr><th> Plantas Id </th><td> {{ $taxonomia->plantas_id }} </td></tr><tr><th> Categorias Taxonomicas Id </th><td> {{ $taxonomia->categorias_taxonomicas_id }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection