<fieldset>
    <div class="form-group">
        {!! Form::label('title', 'Title *', ['class' => 'control-label col-sm-2']) !!}
        <div class="col-sm-10">
            {!! Form::text('title', null, ['class' => 'form-control']) !!}
            <!-- <span class="help-block">Create a short blurb that expresses your mood or overall belief / motto / mission statement.</span> -->
            @if($errors->has('title'))
                <span class="text-danger">{!! $errors->first('title') !!}</span>
            @endif
        </div>
    </div>
</fieldset>

<fieldset>
    <div class="form-group">
        {!! Form::label('date_time', 'Date and Time *', ['class' => 'control-label col-sm-2']) !!}
        <div class="col-sm-10">
            @if(is_active('events.edit'))
            {!! Form::text('date_time', $event->date_time->format('m/d/Y g:i A'), ['class' => 'form-control datetimepicker']) !!}
            @else
            {!! Form::text('date_time', null, ['class' => 'form-control datetimepicker']) !!}
            @endif
            <span class="help-block">Date and time of the event.</span>
            @if($errors->has('date_time'))
                <span class="text-danger">{!! $errors->first('date_time') !!}</span>
            @endif
        </div>
    </div>
</fieldset>

<fieldset>
    <div class="form-group">
        {!! Form::label('building_title', 'Building', ['class' => 'control-label col-sm-2']) !!}
        <div class="col-sm-10">
            {!! Form::text('building_title', null, ['class' => 'form-control']) !!}
            <span class="help-block">Building the event will be held.</span>
            @if($errors->has('building_title'))
                <span class="text-danger">{!! $errors->first('building_title') !!}</span>
            @endif
        </div>
        
    </div>
</fieldset>

<fieldset>
    <div class="form-group">
        {!! Form::label('description', 'Description *', ['class' => 'control-label col-sm-2']) !!}
        <div class="col-sm-10">
            {!! Form::textarea('description', null, ['class' => 'form-control datetimepicker']) !!}
            @if($errors->has('description'))
                <span class="text-danger">{!! $errors->first('description') !!}</span>
            @endif
        </div>
        
    </div>
</fieldset>

@if(is_active('events.edit'))
<fieldset>
    <div class="form-group">
        {!! Form::label('viewable', 'Viewable', ['class' => 'control-label col-sm-2']) !!}
        <div class="col-sm-10">
            {!! Form::select('viewable', [1 => 'Yes', 2 => 'No'] ,null, ['class' => 'form-control']) !!}
            <span class="help-block">Determine if this event can be viewed.</span>
            @if($errors->has('viewable'))
                <span class="text-danger">{!! $errors->first('viewable') !!}</span>
            @endif
        </div>
        
    </div>
</fieldset>
@endif

<fieldset>
    <div class="form-group">
        {!! Form::label('image', 'Image *', ['class' => 'control-label col-sm-2']) !!}
        <div class="col-sm-10">
            {!! Form::file('image', ['class' => 'form-control file', 'data-show-preview' => 'false', 'data-show-upload' => 'false']) !!}
            @if($errors->has('image'))
                <span class="text-danger">{!! $errors->first('image') !!}</span>
            @endif
        </div>
        
    </div>
</fieldset>

<h4 style="margin-bottom:-20px;">Address</h4>
<hr>

<fieldset>
    <div class="form-group">
        {!! Form::label('street', 'Street *', ['class' => 'control-label col-sm-2']) !!}
        <div class="col-sm-10">
            {!! Form::text('street', null, ['class' => 'form-control datetimepicker']) !!}
            @if($errors->has('street'))
                <span class="text-danger">{!! $errors->first('street') !!}</span>
            @endif
        </div>
        
    </div>
</fieldset>

<fieldset>
    <div class="form-group">
        {!! Form::label('city', 'City *', ['class' => 'control-label col-sm-2']) !!}
        <div class="col-sm-10">
            {!! Form::text('city', null, ['class' => 'form-control datetimepicker']) !!}
            @if($errors->has('city'))
                <span class="text-danger">{!! $errors->first('city') !!}</span>
            @endif
        </div>
        
    </div>
</fieldset>

<fieldset>
    <div class="form-group">
        {!! Form::label('state', 'State *', ['class' => 'control-label col-sm-2']) !!}
        <div class="col-sm-10">
            {!! Form::text('state', null, ['class' => 'form-control datetimepicker']) !!}
            @if($errors->has('state'))
                <span class="text-danger">{!! $errors->first('state') !!}</span>
            @endif
        </div>
        
    </div>
</fieldset>

<fieldset>
    <div class="form-group">
        {!! Form::label('postal', 'Postal', ['class' => 'control-label col-sm-2']) !!}
        <div class="col-sm-10">
            {!! Form::text('postal', null, ['class' => 'form-control datetimepicker']) !!}
            @if($errors->has('postal'))
                <span class="text-danger">{!! $errors->first('postal') !!}</span>
            @endif
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