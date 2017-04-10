@extends('layout-dashboard.dashboard')

@section('content')
	
	<div class="row">
		<div class="col-md-12">

		    <div class="card">
		        <div class="header">
		            <legend>Profile Page ({{ $user->full_name }})</legend>
		        </div>
		        <div class="content">
		            {!! Form::model( $user, ['route' => ['profile.update', $user->id], 'method' => 'PUT', 'class' => 'form-horizontal']) !!}

		                @include('admin.profile.partials.form', ['title' => 'Update Profile'])

		            {!! Form::close() !!}
		        </div>
		    </div>  <!-- end card -->
		</div> <!-- end col-md-12 -->
	</div>

@endsection

@section('scripts')
	<script type="text/javascript" src="/js/jquery.mask.min.js"></script>
	<script type="text/javascript">
		$('.cell-phone').mask('0 (000) 000-0000');

		@if(session('message'))
			$.notify({
				// options
				message: "{{ session('message') }}"
			},{
				// settings
				type: 'success'
			});
		@endif
	</script>
@endsection