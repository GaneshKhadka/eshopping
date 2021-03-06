@extends('layouts.frontLayout.front_design')

@section('content')

	<section id="form" style="margin-top:20px"><!--form-->
		<div class="container">
		    <form action="#">
			  <div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Billing Address</h2>
						<div class="form-group">
							<input name="billing_name" id="billing_name" value="{{ $userDetails->name }}" type="text" placeholder="Billing Name" class="form-control"/>
						</div>
						<div class="form-group">
							<input name="billing_address" id="billing_address" value="{{ $userDetails->address}}" type="text" placeholder="Billing Address" class="form-control"/>
						</div>
						<div class="form-group">
							<input name="billing_city" id="billing_city" value="{{ $userDetails->city}}" type="text" placeholder="Billing City" class="form-control"/>
						</div>
						<div class="form-group">
							<input name="billing_state" id="billing_state" value="{{ $userDetails->state}}" type="text" placeholder="Billing State" class="form-control"/>
						</div>
						<div class="form-group">
							<select id="billing_country" name="billing_country" class="form-control">
							<option value="">Select Country</option>
							@foreach($countries as $country)
							    <option value="{{ $country->country_name }}" @if($country->country_name == $userDetails->country) selected @endif>{{ $country->country_name }}</option>
							@endforeach
                               </select>
						</div>
						<div class="form-group">
							<input name="billing_pincode" id="billing_pincode" value="{{ $userDetails->pincode}}" type="text" placeholder="Billing Pincode" class="form-control"/>
						</div>
						<div class="form-group">
							<input name="billing_mobile" id="billing_mobile" value="{{ $userDetails->mobile}}" type="text" placeholder="Billing Mobile" class="form-control"/>
						</div>
						<div class="form-check">
                           <input type="checkbox" class="form-check-input" id="billtoship">
                           <label class="form-check-label" for="billtoship">Billing Address same as Shipping Address</label>
                        </div>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2></h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>Shipping Address</h2>
							<div class="form-group">
							<input type="text" placeholder="Shipping Name" class="form-control"/>
						</div>
						<div class="form-group">
							<input type="text" placeholder="Shipping Address" class="form-control"/>
						</div>
						<div class="form-group">
							<input type="text" placeholder="Shipping City" class="form-control"/>
						</div>
						<div class="form-group">
							<input type="text" placeholder="Shipping State" class="form-control"/>
						</div>
						<div class="form-group">
							<input type="text" placeholder="Shipping Country" class="form-control"/>
						</div>
						<div class="form-group">
							<input type="text" placeholder="Shipping Pincode" class="form-control"/>
						</div>
						<div class="form-group">
							<input type="text" placeholder="Shipping Mobile" class="form-control"/>
						</div>
							<button type="submit" class="btn btn-success">Checkout</button>
					</div><!--/sign up form-->
				</div>
			  </div>
            </form>
		</div>
	</section><!--/form-->

@endsection