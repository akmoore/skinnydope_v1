@extends('layout-dashboard.dashboard')

@section('content')
	
	<div class="row">
		<div class="col-md-2" style="margin-bottom: 1.5em;">
			<a href="{{ route('events.create') }}" class="btn btn-fill btn-info">Create an Event</a>
		</div>
	    <div class="col-md-10">
	        <div class="card">
	        	@if($events->count())
	            <div class="header">
	                <h4 class="title">Events</h4>
	                <p class="category">A list of all your events.</p>
	            </div>
	            <div class="content table-responsive table-full-width">
	                <table class="table table-hover table-striped">
	                    <thead>
	                    	<th>Title</th>
	                    	<th>Date & Time</th>
	                    	<th>Location</th>
	                    	<th>Viewable</th>
	                    </thead>
	                    <tbody>
	                    	@foreach($events as $event)
		                        <tr>
		                        	<td><a href="{{ route('events.show', $event) }}">{!! $event->title !!}</a></td>
		                        	<td>{!! $event->date_time->format('M d, Y, g:iA') !!}</td>
		                        	<td>
		                        		@if($event->building_title)
		                        			{!! $event->building_title !!}<br>
		                        			{!! $event->address !!}
		                        		@endif
		                        		
		                        	</td>
		                        	<td>Yes</td>
		                        </tr>
	                        @endforeach
	                    </tbody>
	                </table>
	            </div>
	            @else
	            	<div class="content">
	            		Huh! Must have nothing worth noting. You are event-less.
	            	</div>
	            @endif
	        </div>
	    </div>
	</div>

@endsection
<!-- 'title', 'slug', 'date_time', 
    	'building_title', 'street', 'city',
    	'state', 'postal', 'description' -->