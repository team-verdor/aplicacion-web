@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Mediciones</div>
                    <div class="panel-body">

                        <a href="{{ url('/administrar/mediciones/create') }}" class="btn btn-primary btn-xs" title="Add New Medicione"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>ID</th><th> Emision </th><th> Valor </th><th> Valor Numero </th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($mediciones as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->emision }}</td><td>{{ $item->valor }}</td><td>{{ $item->valor_numero }}</td>
                                        <td>
                                            <a href="{{ url('/administrar/mediciones/' . $item->id) }}" class="btn btn-success btn-xs" title="View Medicione"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                                            <a href="{{ url('/administrar/mediciones/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Medicione"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/administrar/mediciones', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Medicione" />', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete Medicione',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $mediciones->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection