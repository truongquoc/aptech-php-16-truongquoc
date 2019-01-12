<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" href="../bootstrap.min.css"	>
	<style>
	    p
		{
			color:red;
		}
		.error
		{
			color:red;
			
		}
	
		.header
		{
			background: linear-gradient(#e66465,#9198e5);
			padding: 50px;
			width: 100%;
			
		}
		input[type="text"],
		input[type="email"]
		{
			color: red;
			border: 1px solid #999;
			border-radius:3px;
			display: block;
			width: 50%;
			margin-bottom: 20px;
			box-sizing: border-box;
			outline: none;
			
		}
		lable
		{
			font-style: oblique;
			font-size: 18px;
		}
	/*	form fieldset {
  position: absolute;
  width: 300px;
  height: 60px;
  background: white;
  border-radius: 3px;
  opacity: 0;
  transform: scale(0.2);
  transition: all 0.4s ease-in-out;
}*/
		/*lable
		{
			margin-bottom: 20px;
			display: block;
			font-size: 18px;
			color:#666;
			border-top:1px solid #ddd;
			border-bottom: 1px solid #ddd;
			padding:20px 0;
			cursor:pointer;
			text border-style: outset;
		}*/
	
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
	
	/*$sql = "CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";*/
/*	$sql = "create table newinformation(
	id int primary key auto_increment,
	name varchar(50) unique,
	age int unsigned
	
	)";
	mysqli_query($conn,$sql);
	$sql = "create table prices(
	id int primary key auto_increment,
	name varchar(50) unique,
	age int unsigned
	
	)";*/
  /* $sql="insert into newinformation(name,age)values('ngo truong quoc',19);";
	$sql.="insert into newinformation(name,age)values('nguyen dinh bao nhat quang',19)";
	mysqli_multi_query($conn,$sql);*/
	/*if($conn->query($sql)===TRUE)
	{
		echo "newtable created sucessfully";
	}
	else
	{
		echo "newtable created failed";
	}*/
	
/*	$sql = "INSERT INTO users (name)
VALUES ('truongquoc')";
	if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
	}*/
/*} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
	$sql="insert into users (name) values('truongcuong')";
	if($conn->query($sql)===true)
	{
	   echo "new record created sucessfully";
	}
	else
	{
		echo "error:".$sql."<br>".$conn->error;
	}
*/  //$sql="insert into newinformation(name,age)values('Robin',19)";
	//mysqli_query($conn,$sql);
   /* $sql="select id,name,age from newinformation";
	 $result=$conn->query($sql);
	if($result->num_rows>0)
	{
		while($row=$result->fetch_assoc())
		{
			echo "id  ".$row['id']."  name  ".$row['name']."  age ",$row['age'];
			echo "<Br>";
		}
	}*/

	   if($_SERVER['REQUEST_METHOD']=='POST')
	   {
		   
		   if (empty($_POST["name"]))
		   {
			    $name_err="Name is required ";
		   }
		   else if(!preg_match("/^[a-zA-Z\s]+$/",$_POST["name"]))
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
		   $website=test_input($_POST['website']);
		  
	   }
		
	?>
     <div class="header">
	<form method="POST" action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>">
	 <div class="form-group">
		<lable for "Name"> Name:<input type="text" name="name"class="form-control" aria-describedby="help"placeholder="Enter Name"style="width: 540px"></lable>
		<span class="error">*<?php echo $name_err ?></span>
		 
	</div>
		<div class="form-group">
		<lable for"exampleInputpassword password">Email:<input type="email" name="email"class="form-control "style="width: 540px"placeholder="Enter mail"></lable>
		<span class="error design">* <?php echo $email_err ?></span>	
		</div>
		<div class="form-group">
			<lable for"website">Website<input type="text" name="website"class="form-control"style="width:540px"><span class="error">* <?php echo $website_err ?></span></lable></lable>
		
			
			</div>
	   <div class="form-group">
		 <lable for"gender">Gender: <input type="radio" name="gender" value="female">female
	       <input type="radio" name="gender" value="male">male
	       <input type="radio" name="gender" value="other">other</lable>
		   <span class="error">* <?php echo $gender_err ?></span>
		 </div>
	  <div class="col-form-label">
		  <textarea name="comment" rows="5" cols="35" class="alert-heading"></textarea>
		
		 
		 
		 </div>
		<input type="submit" name="submit"  class="btn btn blockquote"onClick="my_function()">
		  
	 
		</form> 
		</div>
		
	<?php 
	

	function test_input($data)
	{
		$data=trim($data);
		$data=stripslashes($data);
		$data=htmlspecialchars($data);
		return $data;
		///////////////////////////////////////////////
	}
	?>
	<?php
	
    echo "<h1>YOUR INPUT IS</h1>";
	
	if(isset($_POST['submit']))
	{
		
		if($name==''||$email==''||$gender=='')
	    {
		
	        echo "You need to to complete the form";
		
	    }
		else
		{
	      $servername="localhost";
	$username="root";
	$password="";
	$conn=new MySQLi($servername,$username,$password);   
	if($conn->connect_error)
	{
	
		die ("connection failed".$conn->connect_error);
	}
	echo "successful connection ";
		   $sql="create database REGISTER_INFORMATION ";
		   mysqli_query($conn,$sql);
		   $dbname="REGISTER_INFORMATION";
	   $conn=new MySQLi($servername,$username,$password,$dbname);
	    $sql="CREATE TABLE INFORMATIONS(
		  id INT PRIMARY KEY AUTO_INCREMENT,
		  name VARCHAR(50),
		  age INT,
		  email varchar(50) unique
		
		)";
		   $sql="CREATE TABLE REGISTER(
		     name VARCHAR(50),
			 email VARCHAR(50) unique,
			 gender VARCHAR(50)
		   
		   )";
			 //  mysqli_query($conn,$sql);
	  /*if($conn->query($sql)===true)
	   {
		   echo "table created sucessfullly";
		   
	   }
		   else
			   
		   {
			   echo "error creating table";
		   }*/
	   
	   $sql="insert into register(name,email,gender)values('$name','$email','$gender')";
	 mysqli_query($conn,$sql);
		echo "<Br>";
	  $sql="select name,email,gender from register ";
			$result=$conn->query($sql);
			if($result->num_rows>0)
			{
				while($row=$result->fetch_assoc())
				{
					echo "Name:  ".$row['name']."     Email: ".$row['email']."   Gender:  ".$row['gender'];
					echo "<br>";
				}
			     
			}
				
		}
	}
		
	?>
	<?php
	   
	 
	?>
		
	
</body>
</html>
