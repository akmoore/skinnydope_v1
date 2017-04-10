@extends('layout-dashboard.dashboard')

@section('content')

<div class="row">
	<div class="col-md-2" style="margin-bottom:20px;">
		<a href="/dashboard/products/create" class="btn btn-info btn-fill">New product</a>
	</div>
    <div class="col-md-10">
    	@if($products->count() == 0)
    		<h3>You currently have no products to sell. So sad.</h3>
    	@else
	        <div class="card">
	            <div class="header">
	                <h4 class="title">Products</h4>
	                <p class="category">A list of illustrations and paintings</p>
	                <br />
	            </div>
	            <div class="content table-responsive ">
	                <table class="table table-bigboy">
	                    <thead>
	                        <tr>
	                            <th >Thumb</th>
	                            <th >Name</th>
	                            <th >Quantity</th>
	                            <th >Price</th>
	                            <th >Details</th>
	                            <th >Type</th>
	                            <th></th>
	                        </tr>
	                    </thead>
	                    <tbody>
	                    	@foreach($products as $product)
		                        <tr>
		                            <td>
		                                <div class="img-container">
		                                    <img src="{{asset('/storage/images/'.$product->images()->first()->image_thumb)}}" alt="...">
		                                </div>
		                            </td>
		                            <td >{{$product->name}}</td>
		                            <td>{{$product->quantity}}</td>
		                            <td >${{$product->price}}</td>
		                            <td >
		                            	<b>Original:</b> {{$product->original ? 'Yes' : 'No'}} <br>
		                            	<b>Oreintation:</b> {{$product->images()->first()->portrait ? 'Portrait' : 'Landscape'}}
		                            </td>
		                            <td >{{ucfirst($product->type)}}</td>
		                            <td class="td-actions">
		                            	<a href="/dashboard/products/{{$product->id}}"
		                            	   type="button" rel="tooltip" data-placement="left" title="View Product" class="btn btn-info btn-simple btn-icon">
		                            	   <i class="fa fa-image"></i>
		                            	</a>
		                            	<a href="{{ route('products.edit', $product->id)}}"
		                            	   type="button" rel="tooltip" data-placement="left" title="Update Product" class="btn btn-success btn-simple btn-icon">
		                            	   <i class="fa fa-edit"></i>
		                            	</a>
		                                <!-- <button type="button" rel="tooltip" data-placement="left" title="Edit Post" class="btn btn-success btn-simple btn-icon">
		                                    <i class="fa fa-edit"></i>
		                                </button> -->
		                                <!-- <button type="button" rel="tooltip" data-placement="left" title="Remove Post" class="btn btn-danger btn-simple btn-icon ">
		                                    <i class="fa fa-times"></i>
		                                </button> -->
                                		{!! Form::model($product, ['route' => ['products.destroy', $product->id],'method' => 'delete', 'style' => 'display:inline-block;']) !!}
                        					<button type="submit" rel="tooltip" data-placement="left" title="Remove Product" class="btn btn-danger btn-simple btn-icon">
                        						<i class="fa fa-times"></i>
                        					</button>
                        				{!! Form::close() !!}
		                            </td>
		                        </tr>
	                        @endforeach
	                    </tbody>
	                </table>
	                <div>
		            	{{$products->links()}}
		            </div>
	            </div>
	            
	        </div><!--  end card  -->
    	@endif
        
    </div> <!-- end col-md-12 -->
</div> <!-- end row -->
@endsection