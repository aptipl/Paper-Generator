<!-- Text input-->
<div class="form-group has-feedback">
    <label class="col-md-3 control-label" for="name">Subject</label>
    <div class="col-md-9">
        {!! Form::select('subject_id', $subjects, null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group has-feedback">
    <label class="col-md-3 control-label" for="name">Total Marks</label>
    <div class="col-md-9">
        {!! Form::text('total_marks', null, array('placeholder' => 'Total Marks','class' => 'form-control', 'required' => '')) !!}
    </div>
</div>
<div class="form-group has-feedback">
    <label class="col-md-3 control-label" for="name">For College / University / Classes</label>
    <div class="col-md-9">
        {!! Form::text('for', null, array('placeholder' => 'For College / University / Classes','class' => 'form-control', 'required' => '')) !!}
    </div>
</div>
<div class="form-group has-feedback">
    <label class="col-md-3 control-label" for="name">Paper Header Text</label>
    <div class="col-md-9">
        {!! Form::text('header', null, array('placeholder' => 'Paper Header Text Like BE IT SEM-1','class' => 'form-control', 'required' => '')) !!}
    </div>
</div>
<div class="form-group has-feedback">
    <label class="col-md-3 control-label" for="name">Date And Time</label>
    <div class="col-md-9">
        {!! Form::text('date_time', null, array('placeholder' => 'Date And Time Like 20/06/2018 10:30 AM to 01:00 PM','class' => 'form-control', 'required' => '')) !!}
    </div>
</div>
<div class="form-group has-feedback">
    <label class="col-md-3 control-label" for="name">Instructions</label>
    <div class="col-md-9">
        {!! Form::text('instructions', null, array('placeholder' => 'Instructions','class' => 'form-control')) !!}
    </div>
</div>
<div class="form-group">
    <div class="col-md-9 col-md-offset-3">
        <button type="submit" class="btn btn-lg btn-primary">Submit</button>
    </div>
</div>
