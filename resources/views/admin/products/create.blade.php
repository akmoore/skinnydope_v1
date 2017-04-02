@extends('layout-dashboard.dashboard')

@section('content')
	
	<div class="row">
		<div class="col-md-12">

		    <div class="card">
		        <div class="header">
		            <legend>Create Product</legend>
		        </div>
		        <div class="content">
		            <!-- <form method="get" action="/" class="form-horizontal"> -->
		            {!! Form::open(['route' => 'products.store', 'files' => true, 'class' => 'form-horizontal']) !!}

		                @include('admin.products.partials.form', ['title' => 'Create'])

		            {!! Form::close() !!}
		        </div>
		    </div>  <!-- end card -->
		</div> <!-- end col-md-12 -->
	</div>

@endsection