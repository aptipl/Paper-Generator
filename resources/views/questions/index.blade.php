@extends('main', [
    'title' => 'All Question',
    'page' => 'question'
])

@section('content')
    <div class="page-content-wrapper">
        <div class="row" id="tables-widgetz">
            <div class="col-md-12">
                <!--Panel-->
                <div class="panel panel-default" id="table1">
                    <div class="panel-heading">
                        <div class="panel-title">Question<small>Question List</small></div>
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
                                        <th>question</th>
                                        <th>Subject</th>
                                        <th>Marks</th>
                                        <th>Created Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody class="nicescrolled">
                                    @if(count($questions) == 0)
                                    <tr>
                                        <td colspan="6" class="text-center">No record!</td>
                                    </tr>
                                    @else
                                        @foreach($questions as $question)
                                            <tr>
                                                <td>{{ $loop->iteration + $i }}</td>
                                                <td>{{ $question->question }}</td>
                                                <td>{{ $question->subject->name }}</td>
                                                <td>{{ $question->marks }}</td>
                                                <td>{{ $question->created_at }}</td>
                                                <td style="cursor: pointer">
                                                    <button type="button" class="btn btn-info">
                                                    <a class="fa fa-pencil text-white" href="{{ route('question.edit',$question->id) }}"></a>
                                                    </button>
                                                    {!! Form::open(['method' => 'DELETE','route' => ['question.destroy', $question->id],'style'=>'display:inline']) !!}
                                                    {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit','class' => 'btn btn-danger']) !!}
                                                    {!! Form::close() !!}
                                                </td>
                                            </tr>
                                        @endforeach                                        
                                    @endif
                                </tbody>
                            </table>
                            {!! $questions->render() !!}      
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection