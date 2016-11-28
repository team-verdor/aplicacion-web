@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Controladores</div>
                    <div class="panel-body">

                        <a href="{{ url('/administrar/controladores/create') }}" class="btn btn-primary btn-xs" title="Add New Controladore"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>ID</th><th> Serie </th><th> Estado </th><th> Fabricantes Id </th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($controladores as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->serie }}</td><td>{{ $item->estado }}</td><td>{{ $item->fabricantes_id }}</td>
                                        <td>
                                            <a href="{{ url('/administrar/controladores/' . $item->id) }}" class="btn btn-success btn-xs" title="View Controladore"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                                            <a href="{{ url('/administrar/controladores/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Controladore"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/administrar/controladores', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Controladore" />', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete Controladore',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $controladores->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection