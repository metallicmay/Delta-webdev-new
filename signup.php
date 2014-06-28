<?php
 include_once("db.php") 
 ?> 
<?php
     $name=$_POST['name'];
     $rollnum = $_POST['rollnumber'];
	 $dept = $_POST['department'];
	 $sex = $_POST['sex'];
	 $pwd = $_POST['password'];
	 $pwd_hash = md5($pwd); 
	 $confpwd = $_POST['confirmpassword'];
	 $check = true;
   
     if($name=="" || $rollnum=="" ||$dept == "select" || $sex == "" || $pwd == "" || $confpwd == "")
			{
				echo '<br>Do not leave any field blank';
				$check = false;
			}
	if((!preg_match("/^[a-zA-Z\s]+$/",$name)))
	 { 
	  echo "<br></br>Invalid format for Name-please use alphabets only"; 
	  $check=false;
	 }
	 
	 if((!preg_match("/^[0-9]{9}$/",$rollnum)) || $rollnum<100000000 || $rollnum>115100000)
     {
	  echo "<br></br>Invalid roll number!";
	  $check=false;
      }	 
	 if( $pwd!=$confpwd)
	 { echo "<br></br>Passwords do not match!";
	 $check=false;
	 }
	 
if($check)
  {
  $sql="INSERT INTO user (NAME,ROLLNUMBER, DEPT, SEX, PASSWORD)
            VALUES ('$name','$rollnum','$dept','$sex','$pwd_hash')";
$query=mysql_query($sql);
if(!$query)
   echo "Failed" .mysql_error();	
   
else
    {echo "Registration successful";
	echo "<br></br><a href=signinform.php> <button>Sign in</button> </a>";
	}
}
else
{
 echo '<br></br><a href=signupform.php> <button> Back </button> </a>';
 }
	
?>
