@extends('main', [
    'title' => 'Paper Print',
    'page' => 'paper'
])

@section('content')
    <div class="page-content-wrapper">
        <div class="row" id="tables-widgetz">
            <div class="col-md-12">
                <!--Panel-->
                <div class="panel panel-default" id="table1">
                    <div class="panel-heading">
                        <div class="panel-title">Paper<small>Paper Print</small></div>
                    </div>
                    
                    <div class="panel-body" id="printDiv">
                        
                        <h3 class="text-center margin-top-0">{{ $paper->for }}</h3>
                        <h4 class="text-center margin-top-0">{{ $paper->header }}</h4>
                        
                        <div class="col-md-12">
                            <h5>
                                Subject Code: {{ $subject->code }} <span style="float: right">Subject Name: {{ $subject->name }} </span> <br>
                            Date Time: {{ $paper->date_time }} <span style="float: right">Total Mark: {{ $paper->total_marks }} </span>
                            </h5>
                        </div>
                        
                        <div class="col-md-12 text-left">
                            <h5>
                                Instructions:<br>
                                {!! $paper->instructions !!}
                            </h5>
                        </div>
                        <div class="col-md-12 border-top">
                            @foreach($questions as $question)
                                <div class="col-md-12">
                                    <h5>Q. {{ $loop->iteration}} : {{ $question->question }} <span style="float: right">{{ $question->marks }}</span></h5>
                                </div>
                                @if($question->type)
                                    <div class="col-md-12 text-left">
                                        <h5 class="margin-0">
                                            {{ '(a) '.$question->answer1 }}<br>
                                            {{ '(b) '.$question->answer2 }}<br>
                                            {{ '(c) '.$question->answer3 }}<br>
                                            {{ '(d) '.$question->answer4 }}
                                        </h5>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    
                    </div>
                    
                    <div class="panel-footer center">
                        <button type="button" class="btn btn-info col-md-offset-5 center" onclick="printDiv();">Print</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<script type="text/javascript">
    function printDiv(){
        var printContents = $("#printDiv").html();
        var originalContents = $("body").html();
        $("body").html(printContents);
        window.print();
        $("body").html(originalContents);
    }
</script>