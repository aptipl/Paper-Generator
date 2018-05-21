@extends('main')

@section('title', 'All Stream')

@section('content')
    <div class="page-content-wrapper">
        <div class="row" id="tables-widgetz">
            <div class="col-md-12">
                <!--Panel-->
                <div class="panel panel-default" id="table1">
                    <div class="panel-heading">
                        <div class="panel-title">Stream<small>Stream List</small></div>
                    </div>
                    <div class="panel-body">
                         @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                <table class="table table-condensed table-striped ">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Status</th>
                                        <th>Created Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody class="nicescrolled">
                                    @if(count($streams) == 0)
                                    <tr>
                                        <td colspan="5" class="text-center">No record!</td>
                                    </tr>
                                    @else
                                        @foreach($streams as $stream)
                                        <tr>
                                            <td>{{ $loop->iteration + $i }}</td>
                                            <td>{{ $stream->name }}</td>
                                            <td>{{ $stream->status }}</td>
                                            <td>{{ $stream->created_at }}</td>
                                            <td style="cursor: pointer">
                                                <button type="button" class="btn btn-info">
                                                <a class="fa fa-pencil text-white" href="{{ route('stream.edit',$stream->id) }}"></a>
                                                </button>
                                                {!! Form::open(['method' => 'DELETE','route' => ['stream.destroy', $stream->id],'style'=>'display:inline']) !!}
                                                {!! Form::button('<i class="fa fa-trash"></i>', [ 'type' => 'submit', 'class' => 'btn btn-danger']) !!}
                                                {!! Form::close() !!}
                                            </td>
                                        </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                            {!! $streams->render() !!}      
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection