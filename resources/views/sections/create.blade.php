@extends('layouts.master')
@section('content')
	<div class="container">
		
		<form method="POST" action="/sections/store">
			@csrf
		  <div class="form-group">
		 
		    <input type="text" class="form-control" name='name' aria-describedby="emailHelp" placeholder="Section Name"><br>

		    <input type="text" class="form-control" name='name' aria-describedby="emailHelp" placeholder="Active">
		  </div>
		  
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
@endsection