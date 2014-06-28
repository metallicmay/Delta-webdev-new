<?php
 include_once("db.php") 
 ?>
<?php
session_start();
$rollnum = $_POST['rollnum'];
$pwd = $_POST['pass'];
//$pwd_hash = md5($pwd); 
 $name="";
 $check=0;
 $con = mysql_connect('localhost:3306','root','') or  die("Cannot connect :" . mysql_error()); 
  mysql_select_db("deltausers",$con)
	or
	die("Cant connect :" . mysql_error());
	$query= mysql_query("SELECT * FROM user WHERE ROLLNUMBER ='".$rollnum."' AND PASSWORD ='".$pwd."'") or die(mysql_error());
    $result=mysql_fetch_array($query);
   if($result)
    { echo "Successful login!";  
      $name=$result['NAME'];
	  echo "<a href=logout.php> <button>Log out</button> </a>";
	  echo '<h3>Hello ' . $name . '</h3>';
	  $check=1;
	  	}
	else
	{  echo "Login failed";
	   echo "<br></br><a href=signinform.php> <button>Sign in</button> </a>";
	}
	if($check)
	{
	echo "Click the button below to go to Photo Upload Form";
	echo "<br></br> <a href=photouploadform.php> <button> Photo Upload Form </button> </a>";
	}
	mysql_close($con);

?>
