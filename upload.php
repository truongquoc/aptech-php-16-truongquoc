<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
    <lable for"file">select file from your computer
	<input type="file" name="filetoupload" id="file">
	</lable>
	<input type="submit" value="upload" name="submit">
	
		   
	
	
	
	</form>	
</body>
</html>
<?php
	 
	   $checkfile=true;
	if(isset($_POST['submit']))
	 {
	    $target_dir="aptech-5";
		
		if(!file_exists($target_dir))
		{
			mkdir($target_dir,0777,true);
		}
	    $target_file=$target_dir. basename($_FILES["filetoupload"]['name']);
		$name=$_FILES['filetoupload']['name'];
		echo "<Br>";
	  
		 $img_size=getimagesize($_FILES['filetoupload']['tmp_name']);
	     $imgagefiletype=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		
		if(!preg_match("/(jpg|jpeg|png|gif)$/i",$imgagefiletype))
		{
			echo "only compatible with .JPG .JPEG .PGN .GIF<br>";
		}
		if(!file_exists($target_file))
		{
			echo " file have already  existed";
		}
	  if($img_size!==false)
	  {
		  echo "upload success<Br>";
		
		  echo $img_size["mime"]."<br>";
		  echo $img_size[0];echo "<Br>";
		  echo $img_size[1]."<br>";
	  }
		else
			$checkfile=false;
		 if($checkfile==false)
		  {
			  echo "somthing went wrong with your file";
		  }
		  else
		  
			  if(move_uploaded_file($_FILES['filetoupload']['tmp_name'],$target_file))
			  {
				  echo "the file $name has been uploaded";
			  
		 
		      }
		  else
		 {
			 echo "something error occur in your process";
		 }
	
	 }
		  
		
		  
	
	?>