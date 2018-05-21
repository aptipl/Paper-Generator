@extends('main', [
    'title' => 'All Paper',
    'page' => 'paper'
])

@section('content')
    <div class="page-content-wrapper">
        <div class="row" id="tables-widgetz">
            <div class="col-md-12">
                <!--Panel-->
                <div class="panel panel-default" id="table1">
                    <div class="panel-heading">
                        <div class="panel-title">Paper<small>Paper List</small></div>
                    </div>
                    <div class="panel-body">
                         @if ($message = session('success'))
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
                                        <th>Header</th>
                                        <th>Subject</th>
                                        <th>Total Mark</th>
                                        <th>Created Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody class="nicescrolled">
                                    @if(count($papers) == 0)
                                    <tr>
                                        <td colspan="6" class="text-center">No record!</td>
                                    </tr>
                                    @else
                                        @foreach($papers as $paper)
                                            <tr>
                                                <td>{{ $loop->iteration + $i }}</td>
                                                <td>{{ $paper->header }}</td>
                                                <td>{{ $paper->subject->name }}</td>
                                                <td>{{ $paper->total_marks }}</td>
                                                <td>{{ $paper->created_at }}</td>
                                                <td style="cursor: pointer">
                                                    {!! Form::open(['method' => 'DELETE','route' => ['paper.destroy', $paper->id],'style' => 'display:inline']) !!}
                                                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit','class' => 'btn btn-danger']) !!}
                                                    {!! Form::close() !!}
                                                    <button type="button" class="btn btn-success">
                                                        <a class="fa fa-file-pdf-o text-white" href="{{ url("/paper/print/{$paper->id}") }}"></a>
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach                                        
                                    @endif
                                </tbody>
                            </table>
                            {!! $papers->render() !!}
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection