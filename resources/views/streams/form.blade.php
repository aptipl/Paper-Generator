<!-- Text input-->
<div class="form-group has-feedback">
    <label class="col-md-3 control-label" for="name">Name</label>
    <div class="col-md-9">
        {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control', 'required' => '')) !!}
    </div>
</div>
<div class="form-group">
    <div class="col-md-9 col-md-offset-3">
        <button type="submit" class="btn btn-lg btn-primary">Submit</button>
    </div>
</div>
