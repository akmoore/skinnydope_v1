@extends('layout-dashboard.dashboard')

@section('content')
	
	<div class="row">
		<div class="col-md-12">

		    <div class="card">
		        <div class="header">
		            <legend>Create an Event</legend>
		        </div>
		        <div class="content">
		            {!! Form::open(['route' => 'events.store', 'files' => true, 'class' => 'form-horizontal']) !!}

		                @include('admin.events.form.form', ['title' => 'Save'])

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