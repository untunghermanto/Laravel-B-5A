@extends('layouts.layout')
@section('content')
	<h1>User - Create</h1>
	<form action="{{action('MyuserController@store')}}" method="POST" >
	  @csrf
	  <div class="form-group">
	    <label for="name">Name:</label>
	    <input type="name" class="form-control" id="name" name="name">
	  </div>
	  <div class="form-group">
	    <label for="birthdate">Birth Date:</label>
	    <input type="date" class="form-control" id="birthdate" name="birthdate">
	  </div>
	  <div class="form-group">
	    <label for="email">Email address:</label>
	    <input type="email" class="form-control" name="email" id="email">
	  </div>
	  <div class="form-group">
	    <label for="pwd">Password:</label>
	    <input type="password" class="form-control" id="pwd" name="password">
	  </div>
	  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection