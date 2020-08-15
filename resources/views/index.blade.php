<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>REST API</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	
	<div class="container mt-5 pt-5">
		<h2>Create Data</h2>
		<br>
		<hr>
		<br>
		<div class="row">
			<div class="col-md-4">
				
				<form action="/api/" method="post">
					@csrf
			  	 	<div class="form-group">
					    <label for="exampleInputName">Name</label>
					    <input type="text" class="form-control" name="name">
					  	</div>
				  	<div>
						<label for="exampleInputEmail1">Email address</label>
						<input type="email" class="form-control" name="email">
						
				  	</div>
				  	<div class="form-group">
					    <label for="exampleInputPassword1">Password</label>
					    <input type="password" class="form-control" name="password">
				  	</div>
				  	<button type="submit" class="btn btn-success">Submit</button>
				</form>
			</div>
			<div class="col-md-8">
				<table class="table table-striped">
				  <thead>
				    <tr>
				      <th scope="col">id</th>
				      <th scope="col">name</th>
				      <th scope="col">email</th>
				      <th scope="col">action</th>
				    </tr>
				  </thead>
				  <tbody>
				  	@foreach($data as $datas)
				  	<tr>
				      <th scope="row">{{$datas->id}}</th>
				      <td>{{$datas->name}}</td>
				      <td>{{$datas->email}}</td>
				      <td>
				      	<a href="{{route('edit', $datas->id)}}" class="btn btn-sm btn-dark">Edit</a>
				      	<a href="{{route('delete', $datas->id)}}" class="btn btn-sm btn-danger">Delete</a>
				      </td>
				    </tr>
				  	@endforeach
				  </tbody>
				</table>
			</div>
		</div>
	</div>






	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>