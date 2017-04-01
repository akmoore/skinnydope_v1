@extends('layout-dashboard.dashboard')

@section('content')
	
	<div class="row">
	    <div class="col-md-8">
	        <div class="card">
	            <div class="header">
	                <h4 class="title">Blurb #{{$blurb->id}} </h4>
	            </div>
	            <div class="content">
	            	{!! $blurb->blurb !!}
	            	<br>
	            	<br>
	            	<br>

	  				<a href="{{ route('blurbs.edit', $blurb->id) }}" class="btn btn-fill btn-info" style="margin-right:10px;">Update</a>
            		{!! Form::model($blurb, ['route' => ['blurbs.destroy', $blurb->id],'method' => 'delete', 'style' => 'display:inline-block;']) !!}
    					{!! Form::submit('Delete', ['class' => 'btn btn-fill btn-danger']) !!}
    				{!! Form::close() !!}
	            	
	            </div>
	        </div>
	    </div>
	</div> 

@endsection