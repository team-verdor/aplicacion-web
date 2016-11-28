@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Cultivos</div>
                    <div class="panel-body">

                        <a href="{{ url('/administrar/cultivos/create') }}" class="btn btn-primary btn-xs" title="Add New Cultivo"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>ID</th><th> Fecha Siembra </th><th> Fecha Cosecha </th><th> Sectores Id </th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($cultivos as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->fecha_siembra }}</td><td>{{ $item->fecha_cosecha }}</td><td>{{ $item->sectores_id }}</td>
                                        <td>
                                            <a href="{{ url('/administrar/cultivos/' . $item->id) }}" class="btn btn-success btn-xs" title="View Cultivo"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                                            <a href="{{ url('/administrar/cultivos/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Cultivo"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/administrar/cultivos', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Cultivo" />', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete Cultivo',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $cultivos->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection