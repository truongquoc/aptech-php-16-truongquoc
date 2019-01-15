<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
	<link  rel="stylesheet"href="../bootstrap.min.css">
<style type="text/css">
body
	{
		background-image: linear-gradient(to right,#84d2e0, #70b4d3);
	}
	input
	{
		
	}
	.container
	{
		width: 960px;
		margin: 15px;

	}
	
	.error
	{
		color:red;
		display: inline;
	}
	
	
</style>
<body>
	
	<?php 
	  $password_err=$email_err=$email=$password="";
	
	?>
	<div class="container">
	    <form method="post"action="<?php htmlspecialchars($_SERVER['PHP_SELF']);?>"class="form-horizontal">
	    <div class="form-group">
      <label class="col-sm-2 control-label"for="email">Email</label>
      <div class="col-sm-10">
        <input class="form-control" id="focusedInput" type="email" name="email"value="Email.."onfocus="if(this.value=='Email..') this.value='';">
		<lable class="error">*<?php echo $email_err ?></lable>
			</div>
			<label class="col-sm-2 control-label"for="email">Password</label>
      <div class="col-sm-10">
        <input class="form-control" id="focusedInput" type="text" name="password"value="Password.."onfocus="if(this.value=='Password..') this.value='';">
		<span class="error">* <?php echo $password_err ?></span>	
			</div>
		
			<div class="col-lg-10">
			<input type="submit" name="submit"  class="btn btn blockquote"value="Login">
			<div>OR</div>
				<button type="button"class="btn btn-blockquote">Sign up</button>
			</div>
			
				</div>
		</form>
	   
	
	
	</div>
	
</body>
</html>
<?php 
	

	function test_input($data)
	{
		$data=trim($data);
		$data=stripslashes($data);
		$data=htmlspecialchars($data);
		return $data;
		
	}
			if($_SERVER['REQUEST_METHOD']=='POST')
	   {
			
		   if(empty($_POST["email"]))
		   {
			   $email_err="email is required";
		   }
		   else if(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL))
		   {
			   $email_err="email is not valid";
		   }
		   else
		   {
			     $email=test_input($_POST["email"]);
		   }
		  
		  
		   if(empty($_POST["password"]))
		   {
			  $password_err="Password is required";
		   }
		   else
		   {
			     $password=test_input($_POST["password"]);
			  
		   }
		   
	   }
	
if(isset($_POST['submit']))
	{
		
		if($email==""||$password=="")
	    {
		
	        echo "You need to to complete the form";
		
	    }
	else
	{
		
		$servername="localhost";
		$username="root";
		$password_server="";
		$dbname="db";
	   $conn=new MySQLi($servername,$username,$password_server,$dbname);
		if($conn->connect_error)
		{
			die("error with your connection");
		}
	
	 $sql="select *from manage_password"	;
		$result=mysqli_query($conn,$sql);
		
		if($result->num_rows>0)
		{
			
			$check=true;
			while($row=$result->fetch_assoc())
				{
					if($row['email']==$email&&$row['password']==$password)
					{
						
						$check=true;
						break;
					}
				else{
					$check=false;
				}
			
				}
		  
		}
		 if($check==true)
          {
		    echo"login successful"; 
		 }
		else
		{
			echo"login failed";
		}
	}
}
			
	?>
	