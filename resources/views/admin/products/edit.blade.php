@extends('layout-dashboard.dashboard')

@section('content')
	
	<div class="row">
		<div class="col-md-4">
		    <div class="card">
		        <div class="content">
		        	<div class="img-container">
                        <img src="{{asset('/storage/images/'.$product->images()->first()->image_medium)}}" 
                        	 alt="..."
                        	 style="max-width: 100%;">
                    </div>
		        </div>
		   	</div>
		</div>
		<div class="col-md-8">

		    <div class="card">
		        <div class="header">
		            <legend>Update Product</legend>
		        </div>
		        <div class="content">
		            {!! Form::model( $product, ['route' => ['products.update', $product->id], 'method' => 'PUT', 'files' => true, 'class' => 'form-horizontal']) !!}

		                @include('admin.products.partials.form', ['title' => 'Update'])

		            {!! Form::close() !!}
		        </div>
		    </div>  <!-- end card -->
		</div> <!-- end col-md-12 -->
	</div>

@endsection