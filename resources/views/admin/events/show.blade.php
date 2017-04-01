@extends('layout-dashboard.dashboard')

@section('content')
	
	<div class="row">
	    <div class="col-md-10">
	        <div class="card">
	            <div class="header">
	            	<div style="padding: 0px 10px;">
	            		<h4 class="title"><b>Event:</b> {!! $event->title !!} </h4>
	            	</div>
	            </div>
	            <div class="content">
	            	<div style="padding: 0px 10px;margin-bottom: 20px;">
	            		<img src="{{asset('/images/'. $event->images()->first()->image_medium)}}" style="max-width: 100%; border-radius: 10px;">
	            	</div>
	            	<div style="padding: 0px 10px;">
	            		<p>{!! $event->date_time->format('M d, Y, g:ia') !!}</p>
	            		<b>{!! $event->building_title !!}</b> <br>
	            		{!! $event->street !!} <br>
	            		{!! $event->address !!} 
	            		<br>
	            		<br>

	            		<p>{!! $event->description !!}</p>
	            	</div>
	            	
	            	<br>

	            	<div style="padding: 0px 10px;">
		  				<a href="{{ route('events.edit', $event->id) }}" class="btn btn-fill btn-info" style="margin-right:10px;">Update</a>
	            		{!! Form::model($event, ['route' => ['events.destroy', $event->id],'method' => 'delete', 'style' => 'display:inline-block;']) !!}
	    					{!! Form::submit('Delete', ['class' => 'btn btn-fill btn-danger']) !!}
	    				{!! Form::close() !!}
	            	</div>
	            </div>
	        </div>
	    </div>
	</div> 

@endsection