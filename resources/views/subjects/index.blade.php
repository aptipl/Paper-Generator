@extends('main', [
    'title' => 'All Subjects',
    'page' => 'subject'
])

@section('content')
    <div class="page-content-wrapper">
        <div class="row" id="tables-widgetz">
            <div class="col-md-12">
                <!--Panel-->
                <div class="panel panel-default" id="table1">
                    <div class="panel-heading">
                        <div class="panel-title">Subject<small>Subject List</small></div>
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
                                                <th>Code</th>
                                                <th>Status</th>
                                                <th>Created Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class="nicescrolled">
                                            @if(count($subjects) == 0)
                                                <tr>
                                                    <td colspan="6" class="text-center">No record!</td>
                                                </tr>
                                            @else
                                                @foreach($subjects as $subject)
                                                    <tr>
                                                        <td>{{ $loop->iteration + $i }}</td>
                                                        <td>{{ $subject->name }}</td>
                                                        <td>{{ $subject->code }}</td>
                                                        <td>{{ $subject->status }}</td>
                                                        <td>{{ $subject->created_at }}</td>
                                                        <td style="cursor: pointer">
                                                            <button type="button" class="btn btn-info">
                                                                <a class="fa fa-pencil text-white" href="{{ route('subject.edit',$subject->id) }}"></a>
                                                            </button>
                                                            @if($subject->status == "Active")
                                                            <button type="button" class="btn btn-warning">
                                                                <a class="fa fa-times text-white" href="{{ url("/subject/inActive/{$subject->id}") }}"></a>
                                                            </button>
                                                            @else($subject->status == "Active")
                                                            <button type="button" class="btn btn-success">
                                                                <a class="fa fa-check text-white" href="{{ url("/subject/active/{$subject->id}") }}"></a>
                                                            </button>
                                                            @endif
                                                            {!! Form::open(['method' => 'DELETE','route' => ['subject.destroy', $subject->id],'style'=>'display:inline']) !!}
                                                            {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit','class' => 'btn btn-danger']) !!}
                                                            {!! Form::close() !!}
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endif
                                        </tbody>
                                    </table>
                                    {!! $subjects->render() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
