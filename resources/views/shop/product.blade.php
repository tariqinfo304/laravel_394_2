@extends("shop.layout")


@section("cat_nav")
@endsection

@section("body")
	
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h2 class="title">Product</h2>
					</div>
				</div>
				<table class="table">
					<thead>
						<tr>
							<th>Image</th>
							<th>Product Name</th>
							<th>Price</th>
							<th>Quantity</th>
							
							@if(session("is_edit") == "1")
								<th>Edit</th>
							@endif
							@if(session("is_delete") == "1")
								<th>Delete</th>
							@endif
							
						</tr>
					</thead>
					<tbody>
						@foreach($list as $row)

							<tr>
								<td><img width="150px" height="100px" src="{{ asset('storage/image/'. $row->image) }}"/> </td>
								<td>{{ $row->name }}</td>
								<td>{{ $row->price }}</td>
								<td>{{ $row->quantity }}</td>


								@if(session("is_edit") == "1")
								<td>
									<a href="{{ URL('add_product',$row->id) }}" class="btn btn-info btn-lg">
          								<span class="fa fa-edit"></span> Edit
        							</a>
    							</td>
    							@endif

    							@if(session("is_delete") == "1")
	    							<td>
										<a href="{{ URL('product_delete',$row->id) }}" class="btn btn-info btn-lg">
	          								<span class="fa fa-trash"></span> Delete
	        							</a>
	    							</td>
	    						@endif
							</tr>
						@endforeach

					</tbody>
				</table>
			</div>
		</div>
	</div>
	
@endsection