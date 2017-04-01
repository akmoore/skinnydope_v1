<fieldset>
    <div class="form-group">
        {!! Form::label('title', 'Title', ['class' => 'control-label col-sm-2']) !!}
        <div class="col-sm-10">
            {!! Form::text('title', null, ['class' => 'form-control']) !!}
            <!-- <span class="help-block">Create a short blurb that expresses your mood or overall belief / motto / mission statement.</span> -->
        </div>
    </div>
</fieldset>

<fieldset>
    <div class="form-group">
        {!! Form::label('date_time', 'Date and Time', ['class' => 'control-label col-sm-2']) !!}
        <div class="col-sm-10">
            {!! Form::text('date_time', $event->date_time->format('m/d/Y g:i A'), ['class' => 'form-control datetimepicker']) !!}
            <span class="help-block">Date and time of the event.</span>
        </div>
    </div>
</fieldset>

<fieldset>
    <div class="form-group">
        {!! Form::label('building_title', 'Building', ['class' => 'control-label col-sm-2']) !!}
        <div class="col-sm-10">
            {!! Form::text('building_title', null, ['class' => 'form-control']) !!}
            <span class="help-block">Building the event will be held.</span>
        </div>
    </div>
</fieldset>

<fieldset>
    <div class="form-group">
        {!! Form::label('description', 'Description', ['class' => 'control-label col-sm-2']) !!}
        <div class="col-sm-10">
            {!! Form::textarea('description', null, ['class' => 'form-control datetimepicker']) !!}
        </div>
    </div>
</fieldset>

<fieldset>
    <div class="form-group">
        {!! Form::label('image', 'Image', ['class' => 'control-label col-sm-2']) !!}
        <div class="col-sm-10">
            {!! Form::file('image', ['class' => 'form-control file', 'data-show-preview' => 'false', 'data-show-upload' => 'false']) !!}
        </div>
    </div>
</fieldset>

<h4 style="margin-bottom:-20px;">Address</h4>
<hr>

<fieldset>
    <div class="form-group">
        {!! Form::label('street', 'Street', ['class' => 'control-label col-sm-2']) !!}
        <div class="col-sm-10">
            {!! Form::text('street', null, ['class' => 'form-control datetimepicker']) !!}
        </div>
    </div>
</fieldset>

<fieldset>
    <div class="form-group">
        {!! Form::label('city', 'City', ['class' => 'control-label col-sm-2']) !!}
        <div class="col-sm-10">
            {!! Form::text('city', null, ['class' => 'form-control datetimepicker']) !!}
        </div>
    </div>
</fieldset>

<fieldset>
    <div class="form-group">
        {!! Form::label('state', 'State', ['class' => 'control-label col-sm-2']) !!}
        <div class="col-sm-10">
            {!! Form::text('state', null, ['class' => 'form-control datetimepicker']) !!}
        </div>
    </div>
</fieldset>

<fieldset>
    <div class="form-group">
        {!! Form::label('postal', 'Postal', ['class' => 'control-label col-sm-2']) !!}
        <div class="col-sm-10">
            {!! Form::text('postal', null, ['class' => 'form-control datetimepicker']) !!}
        </div>
    </div>
</fieldset>

<fieldset>
    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2" style="margin-top: 20px;">
            {!! Form::submit($title, ['class' => 'btn btn-fill btn-info pull-right']) !!}
        </div>
    </div>
</fieldset>