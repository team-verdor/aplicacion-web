@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Instrucciones</div>
                    <div class="panel-body">

                        <a href="{{ url('/administrar/instrucciones/create') }}" class="btn btn-primary btn-xs" title="Add New Instruccione"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>ID</th><th> Controladores Id </th><th> Actuadores Id </th><th> Emision </th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($instrucciones as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->controladores_id }}</td><td>{{ $item->actuadores_id }}</td><td>{{ $item->emision }}</td>
                                        <td>
                                            <a href="{{ url('/administrar/instrucciones/' . $item->id) }}" class="btn btn-success btn-xs" title="View Instruccione"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                                            <a href="{{ url('/administrar/instrucciones/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Instruccione"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/administrar/instrucciones', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Instruccione" />', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete Instruccione',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $instrucciones->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection