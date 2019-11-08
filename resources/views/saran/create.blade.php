@extends('layouts.layout_saran')
@section('content')
<div class="container">
	<div class="card">
		<div class="card-header" style="background: #A8329E; ">
			<h1 style="color:white">Contact Us</h1>
		</div>
		<div class="card-header" >
	  		<form action="{{action('SaranController@store')}}" method="POST" >
			  @csrf
			  <div class="row">
			  	<div class="col-sm-6">
				  <div class="form-group">
				    <label for="name">First Name:</label>
				    <input type="name" class="form-control" id="firstname" name="firstname">
				  </div>
				</div>
				<div class="col-sm-6">
				  <div class="form-group">
				    <label for="name">Last Name:</label>
				    <input type="name" class="form-control" id="lastname" name="lastname">
				  </div>
				</div>
			  </div>
			  <div class="row">
			  	<div class="col-sm-6">
			 	  <div class="form-group">
				    <label for="email">Email address:</label>
				    <input type="email" class="form-control" name="email" id="email">
				  </div>
				</div>
				<div class="col-sm-6">
				  <div class="form-group">
					<label for="email">Phone:</label>
					<input type="text" class="form-control" name="phone" id="phone">
				  </div>
				</div>
			  </div>
			  <div class="form-group">
				<label for="comment">Message:</label>
				<textarea class="form-control" rows="5" id="message" name="message"></textarea>
			  </div>
				<button type="submit" class="btn btn-dark">Send Message</button>
			</form>
		</div>
	</div>
</div>

@endsection