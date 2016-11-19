@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Parcelas</div>
                    <div class="panel-body">

                        <a href="{{ url('/administrar/parcelas/create') }}" class="btn btn-primary btn-xs" title="Add New Parcela"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>ID</th><th> Superficie </th><th> Direccion </th><th> Latitud </th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($parcelas as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->superficie }}</td><td>{{ $item->direccion }}</td><td>{{ $item->latitud }}</td>
                                        <td>
                                            <a href="{{ url('/administrar/parcelas/' . $item->id) }}" class="btn btn-success btn-xs" title="View Parcela"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                                            <a href="{{ url('/administrar/parcelas/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Parcela"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/administrar/parcelas', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Parcela" />', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete Parcela',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $parcelas->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection