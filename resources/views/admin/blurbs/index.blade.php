@extends('layout-dashboard.dashboard')

@section('content')
	
<div class="row">
	<div class="col-md-2">
		<a href="{{ route('blurbs.create') }}" class="btn btn-fill btn-info">Create Blurb</a>
	</div>
    <div class="col-md-8">
        <div class="card">
            <div class="header">
                <h4 class="title">Blurbs</h4>
                <p class="category">View all Blurbs</p>
            </div>
            <div class="content">
            	@if($blurbs->count() == 0)
            		<h4>
            			You currently have no blurbs. Get to writing.
            		</h4>
            	@else
            		<div class="panel-group" id="accordion">
	                	@foreach($blurbs as $blurb)
		                    <div class="panel panel-default">
		                        <div class="panel-heading">
		                            <h4 class="panel-title">
		                                <a data-target="#blurb{{$blurb->id}}" href="#" data-toggle="collapse">
		                                    Blurb #{{$blurb->id}}

		                                    <b class="caret"></b>
		                                </a>
		                            </h4>
		                        </div>
		                        <div id="blurb{{$blurb->id}}" class="panel-collapse collapse">
		                            <div class="panel-body">
		                                {!! $blurb->blurb !!}
		                                <br>
		                                <br>
		                                <a href="{{ route('blurbs.edit', $blurb->id) }}" class="btn btn-fill btn-info" style="margin-right:10px;">Update</a>
		                                {!! Form::open(['route' => ['blurbs.destroy', $blurb->id], 'method' => 'delete', 'style' => 'display:inline-block;']) !!}
		                                	{!! Form::submit('Delete', ['class' => 'btn btn-fill btn-danger']) !!}
		                                {!! Form::close() !!}
		                            </div>
		                        </div>
		                    </div>
	                    @endforeach
	                </div>
            	@endif
            	
            </div>

        </div>
    </div>
</div>

@endsection