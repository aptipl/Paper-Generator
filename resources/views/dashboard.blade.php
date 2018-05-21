@extends('main', [
    'title' => 'Dashboard',
    'page' => 'Dashboard'
])

@section('content')
    <div class="page-content-wrapper">
        <div class="row" id="tables-widgetz">
            <div class="col-md-12 text-center">
                <h1>Welcome {{ Auth::user()->name }}</h1>
            </div>
        </div>
        <ul class="row margin-bottom-0">
            <li class="col-md-4 col-sm-6 col-xs-6">
                <div class="text-center panel panel-filled panel-success">
                    <div class="panel-body">
                        <h5 class="margin-top-0 text-uppercase">Total Paper</h5>
                        <span class="margin-top-5px text-xl">{{ $paperCount }}</span>
                    </div>
                </div>
            </li>
            <li class="col-md-4 col-sm-6 col-xs-6">
                <div class="text-center panel panel-filled panel-success">
                    <div class="panel-body">
                        <h5 class="margin-top-0 text-uppercase">Total Question</h5>
                        <span class="margin-top-5px text-xl">{{ $questionCount }}</span>
                    </div>
                </div>
            </li>
            <li class="col-md-4 col-sm-6 col-xs-6">
                <div class="text-center panel panel-filled panel-success">
                    <div class="panel-body">
                        <h5 class="margin-top-0 text-uppercase">Total Subject</h5>
                        <span class="margin-top-5px text-xl">{{ $subjectCount }}</span>
                    </div>
                </div>
            </li>
        </ul>
    </div>
@endsection