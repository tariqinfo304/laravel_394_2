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
							<th>Edit</th>
							<th>Delete</th>
						</tr>
					</thead>
					<tbody>
						@foreach($list as $row)

							<tr>
								<td><img height="100px" src="{{ asset('img/'. $row->image) }}"/> </td>
								<td>{{ $row->name }}</td>
								<td>{{ $row->price }}</td>
								<td>{{ $row->quantity }}</td>
								<td>
									<a href="{{ URL('product_edit',$row->id) }}" class="btn btn-info btn-lg">
          								<span class="glyphicon glyphicon-edit"></span> Edit
        							</a>
    							</td>
    							<td>
									<a href="{{ URL('product_delete',$row->id) }}" class="btn btn-info btn-lg">
          								<span class="glyphicon glyphicon-remove"></span> Delete
        							</a>
    							</td>


							</tr>

						@endforeach

					</tbody>
				</table>
			</div>
		</div>
	</div>
	
@endsection