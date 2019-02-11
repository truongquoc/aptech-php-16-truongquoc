<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
</head>

<body>
	<div class="container"style="margin:15px">
	   <form action="{{route('user.update',['id'=>$id])}}" method="post">
              {{ csrf_field() }}
           <input type="hidden" name="_method" value="PUT">
           <div class="form-group">
		 <lable for="InputEmail">Email address</lable>
		   <input type="email"class="form-control"placeholder="Enter email"id="InputEmail"name="email"value={{ isset($email)? $email: ""}}>
		   <small id="emailHelp"class="from-text text-muted">Via Google Email</small>
			   </div>
		   <div class="from-group">
   			<lable for="Input password">Password</lable>
			   <input type="password"class="form-control" placeholder="Password"id="Input password"name="password"value={{ isset($password)? $password: ""}}>
			   
		   </div>
		   <div class="form-group">
		   <lable for="age">Age</lable>
			   <input type="number"class="form-control"placeholder="Age"name="age"value={{ isset($age)? $age:""}}>
		   
		   </div>
		   <div class="form-group">
		   <lable for="IdStudent">ID</lable>
			   <input type="number"class="form-control"placeholder="ID"name="id"value={{ isset($id)? $id:""}}>
			   
		   </div>
		   <div>
		 <lable> <button type="submit" class="btn btn-primary"name="submit">Edit</button></lable> 
			   </div>
		</form>
	</div>
</body>
</html>
