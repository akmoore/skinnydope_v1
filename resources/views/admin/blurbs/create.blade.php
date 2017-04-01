@extends('layout-dashboard.dashboard')

@section('content')
	
	<div class="row">
		<div class="col-md-12">

		    <div class="card">
		        <div class="header">
		            <legend>Create a Blurb</legend>
		        </div>
		        <div class="content">
		            <!-- <form method="get" action="/" class="form-horizontal"> -->
		            {!! Form::open(['route' => 'blurbs.store', 'class' => 'form-horizontal']) !!}

		                @include('admin.blurbs.form.form', ['title' => 'Save'])

		            {!! Form::close() !!}
		            <!-- </form> -->

		        </div>
		    </div>  <!-- end card -->

		</div> <!-- end col-md-12 -->
	</div>

@endsection