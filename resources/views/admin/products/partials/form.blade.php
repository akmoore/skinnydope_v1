<fieldset>
    <div class="form-group">
        {!! Form::label('name', 'Product\'s Name', ['class' => 'control-label col-sm-2']) !!}
        <div class="col-sm-10">
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
            <!-- <span class="help-block">A block of help text that breaks onto a new line.</span> -->
        </div>
    </div>
</fieldset>

<fieldset>
    <div class="form-group">
        {!! Form::label('width', 'Width', ['class' => 'control-label col-sm-2']) !!}
        <div class="col-sm-10">
            {!! Form::text('width', null, ['class' => 'form-control']) !!}
            <!-- <span class="help-block">A block of help text that breaks onto a new line.</span> -->
        </div>
    </div>
</fieldset>

<fieldset>
    <div class="form-group">
        {!! Form::label('height', 'Height', ['class' => 'control-label col-sm-2']) !!}
        <div class="col-sm-10">
            {!! Form::text('height', null, ['class' => 'form-control']) !!}
            <!-- <span class="help-block">A block of help text that breaks onto a new line.</span> -->
        </div>
    </div>
</fieldset>

<fieldset>
    <div class="form-group">
        {!! Form::label('depth', 'Depth', ['class' => 'control-label col-sm-2']) !!}
        <div class="col-sm-10">
            {!! Form::text('depth', null, ['class' => 'form-control']) !!}
            <!-- <span class="help-block">A block of help text that breaks onto a new line.</span> -->
        </div>
    </div>
</fieldset>

<fieldset>
    <div class="form-group">
        {!! Form::label('price', 'Price', ['class' => 'control-label col-sm-2']) !!}
        <div class="col-sm-10">
        	<div class="input-group">
                <span class="input-group-addon">$</span>
                {!! Form::text('price', null, ['class' => 'form-control']) !!}
            </div>
            <!-- <span class="help-block">A block of help text that breaks onto a new line.</span> -->
        </div>
    </div>
</fieldset>

<fieldset>
    <div class="form-group">
        {!! Form::label('quantity', 'Quantity', ['class' => 'control-label col-sm-2']) !!}
        <div class="col-sm-10">
            {!! Form::text('quantity', null, ['class' => 'form-control']) !!}
            <!-- <span class="help-block">A block of help text that breaks onto a new line.</span> -->
        </div>
    </div>
</fieldset>

<fieldset>
    <div class="form-group">
        {!! Form::label('year', 'Year', ['class' => 'control-label col-sm-2']) !!}
        <div class="col-sm-10">
            {!! Form::text('year', null, ['class' => 'form-control']) !!}
            <!-- <span class="help-block">A block of help text that breaks onto a new line.</span> -->
        </div>
    </div>
</fieldset>

@if(Route::current()->getName() == 'products.edit')
    <fieldset>
        <div class="form-group">
            {!! Form::label('active', 'Active', ['class' => 'control-label col-sm-2']) !!}
            <div class="col-sm-10">
                {!! Form::select('active', [1 => 'Yes', 0 => 'No'], null, ['class' => 'form-control']) !!}
                <span class="help-block">Select whether or not you want visitors to see this product.</span>
            </div>
        </div>
    </fieldset>
@endif

<fieldset>
    <div class="form-group">
        <!-- <label class="col-sm-2 control-label">Checkboxes and radios</label> -->
        {!! Form::label('type', 'Type', ['class' => 'control-label col-sm-2']) !!}
        <div class="col-sm-10">
            <label class="radio">
                <input type="radio" data-toggle="radio" name="type" value="illustration" checked="">Illustration
            </label>

            <label class="radio">
                <input type="radio" data-toggle="radio" name="type" value="painting">Painting
            </label>
        </div>
    </div>
</fieldset>

<fieldset>
    <div class="form-group">
        {!! Form::label('description', 'Description', ['class' => 'control-label col-sm-2']) !!}
        <div class="col-sm-10">
        	{!! Form::textarea('description', null, ['class' => 'form-control']) !!}
            <!-- <span class="help-block">A block of help text that breaks onto a new line.</span> -->
        </div>
    </div>
</fieldset>

<fieldset>
    <div class="form-group">
        {!! Form::label('image', 'Image', ['class' => 'control-label col-sm-2']) !!}
        <div class="col-sm-10">
            {!! Form::file('image', ['class' => 'form-control file']) !!}
            @if(Route::current()->getName() == 'products.edit')
                <span class="help-block">Adding an image here will replace the current image for this product.</span>
            @endif
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