<fieldset>
    <div class="form-group">
        {!! Form::label('first_name', 'First Name', ['class' => 'control-label col-sm-2']) !!}
        <div class="col-sm-10">
            {!! Form::text('first_name', null, ['class' => 'form-control']) !!}
            <!-- <span class="help-block">A block of help text that breaks onto a new line.</span> -->
        </div>
    </div>
</fieldset>

<fieldset>
    <div class="form-group">
        {!! Form::label('last_name', 'Last Name', ['class' => 'control-label col-sm-2']) !!}
        <div class="col-sm-10">
            {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
            <!-- <span class="help-block">A block of help text that breaks onto a new line.</span> -->
        </div>
    </div>
</fieldset>

<fieldset>
    <div class="form-group">
        {!! Form::label('email', 'Email', ['class' => 'control-label col-sm-2']) !!}
        <div class="col-sm-10">
            {!! Form::email('email', null, ['class' => 'form-control']) !!}
            <!-- <span class="help-block">A block of help text that breaks onto a new line.</span> -->
        </div>
    </div>
</fieldset>

<fieldset>
    <div class="form-group">
        {!! Form::label('cell_phone', 'Cell Phone', ['class' => 'control-label col-sm-2']) !!}
        <div class="col-sm-10">
            {!! Form::text('cell_phone', null, ['class' => 'form-control cell-phone']) !!}
            <!-- <span class="help-block">A block of help text that breaks onto a new line.</span> -->
        </div>
    </div>
</fieldset>

<fieldset>
	<legend>Password Update</legend>
</fieldset>

<fieldset>
    <div class="form-group">
        {!! Form::label('current_password', 'Current Password', ['class' => 'control-label col-sm-2']) !!}
        <div class="col-sm-10">
            {!! Form::password('current_password', ['class' => 'form-control']) !!}
            <span class="help-block">Enter in your current password.</span>
        </div>
    </div>
</fieldset>

<fieldset>
    <div class="form-group">
        {!! Form::label('new_password', 'New Password', ['class' => 'control-label col-sm-2']) !!}
        <div class="col-sm-10">
            {!! Form::password('new_password', ['class' => 'form-control']) !!}
            <span class="help-block">Enter in a new password. Must be at least 8 characters in length.</span>
        </div>
    </div>
</fieldset>

<fieldset>
    <div class="form-group">
        {!! Form::label('new_password_confirmation', 'Confirm New Password', ['class' => 'control-label col-sm-2']) !!}
        <div class="col-sm-10">
            {!! Form::password('new_password_confirmation', ['class' => 'form-control']) !!}
            <span class="help-block">Retype your new password.</span>
        </div>
    </div>
</fieldset>

<fieldset>
	<div class="form-group">
		<div class="col-sm-10 col-sm-offset-2" style="margin-top: 20px;">
			{!! Form::submit( $title, ['class' => 'btn btn-fill btn-info pull-right']) !!}
		</div>
	</div>
</fieldset>


