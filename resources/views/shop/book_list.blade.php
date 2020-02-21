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
						<h2 class="title">Book Store List</h2>
					</div>
				</div>
				<table class="table">
					<thead>
						<tr>
							<th>Store Name</th>
							<th>Coupon</th>
							
						</tr>
					</thead>
					<tbody>
						@foreach($data as $row)

							<tr>
								<td>{{ $row->store }}</td>
								<td>{{ $row->coupon }}</td>
							</tr>
						@endforeach

					</tbody>
				</table>
			</div>
		</div>
	</div>
	
@endsection