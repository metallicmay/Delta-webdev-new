<?php
 include_once("db.php") 
 ?>
 
<?php
     $name=$_POST['name'];
     $rollnum = $_POST['rollnumber'];
	 $dept = $_POST['department'];
	 $sex = $_POST['sex'];
	 $pwd = $_POST['password'];
	 $confpwd = $_POST['confirmpassword'];
	 $check = true;
   
     if($name=="" || $rollnum=="" ||$dept == "select" || $sex == "" || $pwd == "" || $confpwd == "")
			{
				echo '<br>Do not leave any field blank';
				$check = false;
			}
   
  if($check)
     $sql="INSERT INTO user (NAME,ROLLNUMBER, DEPT, SEX, PASSWORD)
            VALUES ('$name','$rollnum','$dept','$sex','$pwd')";
$query=mysql_query($sql);
if(!$query)
   echo "Failed" .mysql_error();	
   
else
    {echo "Registration successful";
	echo "<a href=signinform.php> <button>Sign in</button> </a>";
	}
	
?>
