<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<style>
	    p
		{
			color:red;
		}
		.error
		{
			color:red;
			
		}
		.design
		{
			
			padding: 14px;
		}
		
	
	</style>
</head>

	
<body>
	<script>
	  function my_function()
		{
			document.getElementById("demo").style.display= 'block';
			console.log('hello');
		}
		
	
	</script>
	<?php 
	$name_err=$email_err=$website_err=$gender_err="";
	$name=$email=$website=$comment=$gender="";
	
	
	   if($_SERVER['REQUEST_METHOD']=='POST')
	   {
		   if (empty($_POST["name"]))
		   {
			    $name_err="Name is required ";
		   }
		   else if(!preg_match("/^[a-zA-Z]*$/",$_POST["name"]))
		   {
			   $name_err="Name is not valid";
		   }
			else
			{
		      $name=test_input($_POST["name"]);
			}
		   
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
		  
		  
		   if(empty($_POST["gender"]))
		   {
			  $gender_err="gender is required";
		   }
		   else
		   {
			     $gender=test_input($_POST["gender"]);
			  
		   }
		   $comment=test_input($_POST["comment"]);
		 
		  
	   }
		
	?>
   
	<form method="post" action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>">
	<span class="design">Name:<input type="text" name="name"  ></span>
		<span class="error">* <?php echo $name_err ?></span><br><bR>
	<span class="design">Email:<input type="mail" name="email"></span>
		<span class="error design">* <?php echo $email_err ?></span><Br><br>
<span >	website: <input type="text" name="website"></span>
		<span class="error">* <?php echo $website_err ?></span><br><Br>
	Gender:<input type="radio" name="gender" value="female">female
	       <input type="radio" name="gender" value="male">male
	       <input type="radio" name="gender" value="other">other
		<span class="error">* <?php echo $gender_err ?></span><br>
	comment<br>:<textarea name="comment" rows="5" cols="35"></textarea>
		<input type="submit" name="submit" value="SUBMIT" onClick="my_function()">
		  
		</form> 
		
	<?php 
	

	function test_input($data)
	{
		$data=trim($data);
		$data=stripslashes($data);
		$data=htmlspecialchars($data);
		return $data;
		
	}
	?>
	<?php
	
    echo "<h1>YOUR INPUT IS</h1>";
	if($name||$email||$website||$gender=="")
	{
		?>
		    <p id="demo" style="display:  none">abc</p>
		<?php
	}
		else
		{
	echo $name."<br>";
	echo $email."<br>";
	echo $website."<br>";
	echo $comment."<Br>";
	echo $gender."<Br>";
		}
	
	
	
	?>
		
	
</body>
</html>