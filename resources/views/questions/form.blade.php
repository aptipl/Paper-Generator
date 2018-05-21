<!-- Text input-->
<div class="form-group has-feedback">
    <label class="col-md-3 control-label" for="name">Subject</label>
    <div class="col-md-9">
        {!! Form::select('subject_id', $subjects, null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group has-feedback">
    <label class="col-md-3 control-label" for="question">Question</label>
    <div class="col-md-9">
        {!! Form::text('question', null, array('placeholder' => 'Question','class' => 'form-control', 'required' => '')) !!}
    </div>
</div>
<div class="form-group">
    <label class="col-md-3 control-label" for="type">Question Type</label>
    <div class="col-md-9  ui-sortable">
        <div class="radio-styled radio-inline">
            {!! Form::radio('type', 0, true, array('id' => 'type-Normal')) !!}
            <label for="type-Normal">Normal</label>
        </div>
        <div class="radio-styled radio-inline">
            {!! Form::radio('type', 1, false, array('id' => 'type-MCQ')) !!} 
            <label for="type-MCQ">MCQ</label>
        </div>
    </div>
</div>
<div class="form-group hidden MCQanswers">
    <label class="col-md-3 control-label" for="type">Answers 1 :</label>
    <div class="col-md-9">
        {!! Form::text('answer1', null, array('placeholder' => 'Answer 1','class' => 'form-control answers')) !!}
    </div>
</div>
<div class="form-group hidden MCQanswers">
    <label class="col-md-3 control-label" for="type">Answers 2 :</label>
    <div class="col-md-9">
        {!! Form::text('answer2', null, array('placeholder' => 'Answer 2','class' => 'form-control answers')) !!}
    </div>
</div>
<div class="form-group hidden MCQanswers">
    <label class="col-md-3 control-label" for="type">Answers 3 :</label>
    <div class="col-md-9">
        {!! Form::text('answer3', null, array('placeholder' => 'Answer 3','class' => 'form-control answers')) !!}
    </div>
</div>
<div class="form-group hidden MCQanswers">
    <label class="col-md-3 control-label" for="type">Answers 4 :</label>
    <div class="col-md-9">
        {!! Form::text('answer4', null, array('placeholder' => 'Answer 4','class' => 'form-control answers')) !!}
    </div>
</div>
<div class="form-group has-feedback">
    <label class="col-md-3 control-label" for="question">Marks</label>
    <div class="col-md-9">
        {!! Form::number('marks', null, array('placeholder' => 'Marks','class' => 'form-control', 'required ' => '')) !!}
    </div>
</div>
<div class="form-group">
    <label class="col-md-3 control-label" for="type">Question Level</label>
    <div class="col-md-9  ui-sortable">
        <div class="radio-styled radio-inline">
            {!! Form::radio('level', 0, false, array('id' => 'level-Low')) !!}
            <label for="level-Low">Low</label>
        </div>
        <div class="radio-styled radio-inline">
            {!! Form::radio('level', 1, true, array('id' => 'level-Medium')) !!} 
            <label for="level-Medium">Medium</label>
        </div>
        <div class="radio-styled radio-inline">
            {!! Form::radio('level', 2, false, array('id' => 'level-High')) !!}
            <label for="level-High">High</label>
        </div>
    </div>
</div>
<div class="form-group">
    <div class="col-md-9 col-md-offset-3">
        <button type="submit" class="btn btn-lg btn-primary">Submit</button>
    </div>
</div>
<script type="text/javascript">
$('input[type=radio][name=type]').change(function() {
    if($("input[name='type']:checked"). val() == 1){
        $(".MCQanswers").removeClass('hidden');
        $(".answers").attr('required','');
    }else{
        $(".MCQanswers").addClass('hidden');
        $(".answers").removeAttr('required');
    }
});
</script>
