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
						<h2 class="title">Add Book Store</h2>
					</div>
				</div>
				<div class="col-md-12">

					<form method="POST" enctype="multipart/form-data" id="product_form" action="{{ URL('save_book')}}">
						@csrf()

						<div class="form-group">
							<label>Store Name</label>
							<input class="input" type="text" id="store" name="store" placeholder="Enter store"/>
						</div>
						<div class="form-group">
							<label>Coupon</label>
							<input class="input" type="text" id="coupon" name="coupon" placeholder="Enter coupon"/>
						</div>

						<div style="text-align: center;"  class="form-group">
							<input class="btn-primary" type="submit" value="Save"/>
						</div>

					</form>
				</div>
				
			</div>
		</div>
	</div>
	
@endsection