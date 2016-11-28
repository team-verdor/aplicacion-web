@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Taxonomias</div>
                    <div class="panel-body">

                        <a href="{{ url('/administrar/taxonomias/create') }}" class="btn btn-primary btn-xs" title="Add New Taxonomia"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>ID</th><th> Plantas Id </th><th> Categorias Taxonomicas Id </th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($taxonomias as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->plantas_id }}</td><td>{{ $item->categorias_taxonomicas_id }}</td>
                                        <td>
                                            <a href="{{ url('/administrar/taxonomias/' . $item->id) }}" class="btn btn-success btn-xs" title="View Taxonomia"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                                            <a href="{{ url('/administrar/taxonomias/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Taxonomia"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/administrar/taxonomias', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Taxonomia" />', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete Taxonomia',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $taxonomias->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection