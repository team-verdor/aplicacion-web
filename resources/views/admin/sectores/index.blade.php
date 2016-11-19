@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Sectores</div>
                    <div class="panel-body">

                        <a href="{{ url('/administrar/sectores/create') }}" class="btn btn-primary btn-xs" title="Add New Sectore"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>ID</th><th> Parcelas Id </th><th> Tipos Sectores Id </th><th> Figuras Geograficas Id </th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($sectores as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->parcelas_id }}</td><td>{{ $item->tipos_sectores_id }}</td><td>{{ $item->figuras_geograficas_id }}</td>
                                        <td>
                                            <a href="{{ url('/administrar/sectores/' . $item->id) }}" class="btn btn-success btn-xs" title="View Sectore"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                                            <a href="{{ url('/administrar/sectores/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Sectore"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/administrar/sectores', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Sectore" />', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete Sectore',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $sectores->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection