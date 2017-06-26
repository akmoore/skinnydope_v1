@extends('layout-dashboard.dashboard')

@section('content')
	
	<div class="row">

		<div class="col-md-7">
		    <div class="card">
		        <div class="header">
		            <legend>{{$product->name}} <small>(Image)</small></legend>
		        </div>
		        <div class="content">
		        	<div class="img-container">
                        <!-- <img src="../../assets/img/blog-1.jpg" alt="..."> -->
                        <img src="{{asset('/storage/images/'.$product->images()->first()->image_medium)}}" 
                        	 alt="..."
                        	 style="max-width: 100%;">
                    </div>
		        </div>
		   	</div>
		</div>

		<div class="col-md-5">
		    <div class="card">
		        <div class="header">
		            <legend>{{$product->name}} <small>(Details)</small></legend>
		        </div>
		        <div class="content">
		        	<ul class="list-group">
		        		<li class="list-group-item"><b>Year:</b> {{$product->year}} </li>
		        	  	<li class="list-group-item"><b>Width:</b> {{$product->width}} inches</li>
		        	  	<li class="list-group-item"><b>Height:</b> {{$product->height}} inches</li>
		        	  	<li class="list-group-item"><b>Depth:</b> {{$product->depth}} inches</li>
		        	  	<li class="list-group-item"><b>Original:</b> {{$product->original ? 'Yes' : 'No'}}</li>
		        	  	<li class="list-group-item"><b>Price:</b> ${{$product->price}}</li>
		        	  	<li class="list-group-item"><b>Quantity:</b> {{$product->quantity}}</li>
		        	  	<li class="list-group-item"><b>Type:</b> {{ucfirst($product->type)}}</li>
		        	  	<li class="list-group-item"><b>StoreEnvy Link: </b> {{$product->spotenvy ? $product->spotenvy : 'N/A'}}</li>
		        	  	<li class="list-group-item"><b>Orientation:</b> {{$product->portrait ? 'Portrait' : 'Landscape'}}</li>
		        	  	<li class="list-group-item"><b>Description:</b> <br> {{$product->description ? $product->description : 'N/A'}}</li>
		        	</ul>
		        	<div style="padding: 0px 10px;">
		  				<a href="{{ route('products.edit', $product->id) }}" class="btn btn-fill btn-info" style="margin-right:10px;">Update</a>
	            		{!! Form::model($product, ['route' => ['products.destroy', $product->id],'method' => 'delete', 'style' => 'display:inline-block;']) !!}
	    					{!! Form::submit('Delete', ['class' => 'btn btn-fill btn-danger']) !!}
	    				{!! Form::close() !!}
	            	</div>
		        </div>
		   	</div>
		</div>

	</div>

@endsection