@extends('main', [
    'title' => 'Question Edit',
    'page' => 'question'
])

@section('content')
    <div class="page-content-wrapper">
        <div class="row" id="tables-widgetz">
            <div class="col-md-12">
                <!--Panel-->
                <div class="panel panel-default" id="table1">
                    <div class="panel-heading">
                        <div class="panel-title">Question<small>Question Edit</small></div>
                    </div>
                    <div class="panel-body">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="row">
                            {!! Form::model($question, ['method' => 'PATCH','route' => ['question.update', $question->id],'class'=>'form-horizontal','data-parsley-validate' => '']) !!}
                                @include('questions.form')
                           {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection