@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Analisissuelo</div>
                    <div class="panel-body">

                        <a href="{{ url('/administrar/analisis-suelo/create') }}" class="btn btn-primary btn-xs" title="Add New AnalisisSuelo"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>ID</th><th> Muestras Suelo Id </th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($analisissuelo as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->muestras_suelo_id }}</td>
                                        <td>
                                            <a href="{{ url('/administrar/analisis-suelo/' . $item->id) }}" class="btn btn-success btn-xs" title="View AnalisisSuelo"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                                            <a href="{{ url('/administrar/analisis-suelo/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit AnalisisSuelo"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/administrar/analisis-suelo', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete AnalisisSuelo" />', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete AnalisisSuelo',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $analisissuelo->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection