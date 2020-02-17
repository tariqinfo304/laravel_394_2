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
						<h2 class="title">Login</h2>
					</div>
				</div>
				<div class="col-md-12">
					<form method="POST" id="product_form" action="{{ URL('login')}}">
						@csrf()

						<div class="form-group">
							<label>Username</label>

							
<input class="input" type="text" value="{{ old('username') }}"  name="username" placeholder="Enter Username"/>
							
							@error('username')
							    <div class="alert alert-danger">{{ $message }}</div>
							 @enderror
						</div>
						<div class="form-group">
							<label>Password</label>

		<input class="input"  type="password" id="price" name="password" placeholder="Enter Password"/>
	
							@error("password")
								<div class="alert alert-danger">{{ $message }}</div>
							@enderror
						</div>
						

						<div style="text-align: center;"  class="form-group">
							<input class="btn-primary" type="submit" value="Login"/>
						</div>

					</form>
				</div>
				
			</div>
		</div>
	</div>
	
@endsection