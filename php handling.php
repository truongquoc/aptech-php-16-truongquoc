<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" href="bootstrap.min.css">
	  
	
<style type="text/css">
	
	
#design
	{
		border: 1px solid black;
		height: 36px;
	
	}
	.design
	{
		
		padding: 14px;
	}
	
	
</style>
</head>
<body>
<div class="jumbotron">
	
</div>
<div class="container d-flex justify-content-center "style="height: 100%">
 <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
	 <div>
     <span class="design col-form-label" > Email</span> <input type="email" name="mail" ><Br><br>
		 </div>
	 
		 <div class="form-group">
		    <lable >password </lable>
			 <input type="password" name="password" >
			 <span class="design"> <input type="submit" name="submit" value="submit" class="btn btn-block" style="width:90px"></span>
		 </div>

		 </form>
	 </div>
<?php
	if(isset($_POST['submit']))
	   {
	   $email=$_POST['mail'];
	   $password=$_POST['password'];
	   echo "Your input is <br>";
	   echo $email ;
	   echo $password;
	   }
	
	
?>
	
</body>
</html>
	 