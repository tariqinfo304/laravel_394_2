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
				<div class="col-md-12">
					@php
					//print_r($errors);

					//var_dump($errors->any());
					//print_r($errors->all());
					@endphp

					@if($errors->any())

						<div class="alert alert-danger">
							<ul>
								@foreach($errors->all() as $error)
									<li> {{ $error }} </li>
								@endforeach
							</ul>
						</div>

					@endif

					<form method="POST" action="{{ URL('save_product')}} ">
						@csrf()
						<div class="form-group">
							<label>Name</label>
							<input class="input" type="text" value="{{ old('name') }}" name="name" placeholder="Enter Name">
							@error('name')
							    <div class="alert alert-danger">{{ $message }}</div>
							 @enderror
						</div>
						<div class="form-group">
							<label>Price</label>
							<input class="input" type="number" value="{{ old('price') }}" name="price" placeholder="Enter Price">
							@error("price")
								<div class="alert alert-danger">{{ $message }}</div>
							@enderror
						</div>
						<div class="form-group">
							<label>Quantity</label>
							<input class="input" type="number" value="{{ old('quantity') }}" name="quantity" placeholder="Enter Quantity">
							@error("quantity")
								<div class="alert alert-danger">{{ $message }}</div>
							@enderror
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