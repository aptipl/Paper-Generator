@extends('main')

@section('title', 'Stream Edit')

@section('content')
    <div class="page-content-wrapper">
        <div class="row" id="tables-widgetz">
            <div class="col-md-12">
                <!--Panel-->
                <div class="panel panel-default" id="table1">
                    <div class="panel-heading">
                        <div class="panel-title">Stream<small>Stream Edit</small></div>
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
                            {!! Form::model($stream, ['method' => 'PATCH','route' => ['stream.update', $stream->id],'class'=>'form-horizontal','data-parsley-validate' => '']) !!}
                                @include('streams.form')
                           {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection