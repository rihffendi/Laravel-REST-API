<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>My System</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container mt-5 pt-5">
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
		      	<a href="{{route('edit', $datas->id)}}" class="btn btn-primary">Edit</a>
		      	<a href="{{route('delete', $datas->id)}}" class="btn btn-danger">Delete</a>
		      </td>
		    </tr>
		  	@endforeach
		  </tbody>
		</table>
	</div>
	<div class="container mt-5 pt-5">
		<form action="/api/" method="post">
			@csrf
	  	 	<div class="form-group">
			    <label for="exampleInputName">Name</label>
			    <input type="text" class="form-control" id="exampleInputName" placeholder="Name" name="name">
			  	</div>
		  	<div>
				<label for="exampleInputEmail1">Email address</label>
				<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
				
		  	</div>
		  	<div class="form-group">
			    <label for="exampleInputPassword1">Password</label>
			    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
		  	</div>
		  	<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>






	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>