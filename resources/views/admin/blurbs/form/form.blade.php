<fieldset>
    <div class="form-group">
        {!! Form::label('blurb', 'Blurb', ['class' => 'control-label col-sm-2']) !!}
        <div class="col-sm-10">
            {!! Form::textarea('blurb', null, ['class' => 'form-control']) !!}
            <span class="help-block">Create a short blurb that expresses your mood or overall belief / motto / mission statement.</span>
            @if($errors->has('blurb'))
                <span class="text-danger">{!! $errors->first('blurb') !!}</span>
            @endif
        </div>
    </div>
</fieldset>

@if(is_active('blurbs.edit'))
<fieldset>
    <div class="form-group">
        {!! Form::label('viewable', 'Viewable', ['class' => 'control-label col-sm-2']) !!}
        <div class="col-sm-10">
            {!! Form::select('viewable', [1 => 'Yes', 2 => 'No'] ,null, ['class' => 'form-control']) !!}
            <span class="help-block">Determine if this blurb can be viewed.</span>
            @if($errors->has('viewable'))
                <span class="text-danger">{!! $errors->first('viewable') !!}</span>
            @endif
        </div>
    </div>
</fieldset>
@endif

<fieldset>
	<div class="form-group">
		<div class="col-sm-10 col-sm-offset-2" style="margin-top: 20px;">
			{!! Form::submit($title, ['class' => 'btn btn-fill btn-info pull-right']) !!}
		</div>
	</div>
</fieldset>