@extends('layout-dashboard.dashboard')

@section('content')
	
	<div class="row">
		<div class="col-md-12">

		    <div class="card">
		        <div class="header">
		            <legend>Update Blurb</legend>
		        </div>
		        <div class="content">
		        
		            {!! Form::model($blurb, ['route' => ['blurbs.update', $blurb->id], 'method' => 'put', 'class' => 'form-horizontal']) !!}

		                @include('admin.blurbs.form.form', ['title' => 'Update'])

		            {!! Form::close() !!}

		        </div>
		    </div>  <!-- end card -->

		</div> <!-- end col-md-12 -->
	</div>

@endsection