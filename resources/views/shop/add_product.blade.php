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

					<form method="POST" id="product_form" action="{{ URL('save_product')}}">
						@csrf()

						@if(isset($obj) && isset($obj->id))
							<input type="hidden" value="{{ $obj->id }}" name="edit_id"/>
						@endif

						<div class="form-group">
							<label>Name</label>

							@if(isset($obj) && isset($obj->name))
<input class="input" type="text" value="{{ $obj->name }}" name="name" placeholder="Enter Name"/>
							@else
<input class="input" type="text" value="{{ old('name') }}"  name="name" placeholder="Enter Name"/>
							@endif
							
							@error('name')
							    <div class="alert alert-danger">{{ $message }}</div>
							 @enderror
						</div>
						<div class="form-group">
							<label>Price</label>

							@if(isset($obj) && isset($obj->price))
	<input class="input" type="number" value="{{ $obj->price }}" name="price" placeholder="Enter Price"/>
							@else
		<input class="input" type="number" value="{{ old('price') }}" id="price" name="price" placeholder="Enter Price"/>
							@endif

	
							@error("price")
								<div class="alert alert-danger">{{ $message }}</div>
							@enderror
						</div>
						<div class="form-group">
							<label>Quantity</label>

							@if(isset($obj) && isset($obj->quantity))
<input class="input" type="number" value="{{ $obj->quantity }}" name="quantity" placeholder="Enter Quantity"/>
							@else
<input class="input" type="number" value="{{ old('quantity') }}" id="quantity" name="quantity" placeholder="Enter Quantity"/>
							@endif

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

	<script>
			
		$("#product_form").submit(function(e){
			e.preventDefault();


			var data = new FormData(this);//$(this).serialize();
			$.ajax({
				type : "POST",
				url : "{{ URL('save_product') }}",
				data : data,
				processData: false,
				contentType: false,
				success:function(data)
				{
					
				},
				error:function(err)
				{
					err  = JSON.stringify(err);
					err = JSON.parse(err);
					var error_obj = err.responseJSON.errors;
					console.log(error_obj);
					//alert("Error on saving Data");
				}
			});

		});

	</script>
	
@endsection