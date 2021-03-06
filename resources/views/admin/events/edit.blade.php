@extends('layout-dashboard.dashboard')

@section('content')
	
	<div class="row">
		<div class="col-md-5">
		    <div class="card">
		        <div class="content">
		        	<div class="img-container">
                        <img src="{{asset('/storage/images/'.$event->images()->first()->image_medium)}}" 
                        	 alt="..."
                        	 style="max-width: 100%;">
                    </div>
		        </div>
		   	</div>
		</div>
		<div class="col-md-7">

		    <div class="card">
		        <div class="header">
		            <legend>Update Event</legend>
		        </div>
		        <div class="content">
		            {!! Form::model($event, ['route' => ['events.update', $event->id ],'files' => true, 'class' => 'form-horizontal', 'method' => 'put']) !!}

		                @include('admin.events.form.form', ['title' => 'Update'])

		            {!! Form::close() !!}
		        </div>
		    </div>  <!-- end card -->

		</div> <!-- end col-md-12 -->
	</div>

@endsection

@section('scripts')

	<script type="text/javascript">
		(function(){
			$('.datetimepicker').datetimepicker();
		}());
	</script>

@endsection