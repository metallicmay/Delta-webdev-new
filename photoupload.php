<?php
 include_once("db.php") 
 ?>
<?php
session_start();
$rn= $_POST["rollnumber"];
$ps= $_POST['picsubmit'];
if(isset($ps)&& isset($rn))
	{
		$check = true;
		$filesize=$_FILES["photo"]["size"];
		$filetype=$_FILES["photo"]["type"];

		if ($filesize== 0 && $check)
		{
			echo "<br>No image selected";
			$check = false;
		}

		if ($filesize/1024 >2048 && $check) 
		{
			echo "<br>Image size should be less than 2 MB";
			$check = false;
		}

		if(!(($filetype== "image/png") || ($filetype== "image/gif") || ($filetype== "image/jpg")|| ($filetype== "image/jpeg") && $check))
		{
			echo "<br>Selected file is not an image file";
			$check = false;
		}

		if($check)
		{
            
			 move_uploaded_file($_FILES["photo"]["tmp_name"],"c:/xampp/www".$rn.".png")
			  or die('Error');

			echo "File uploaded successfully";
			echo "<a href=Welcome.php> <button>Home</button> </a>";
		
		}
		
	}
?>
