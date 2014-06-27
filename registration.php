`<!doctype html>
 <html>
 <head>
  <meta charset="utf-8">
  <title>TASK TWO</title>
 </head>
 <body>
 <?php
  $regform=true;
  if(isset($_POST['submit']))
   { $name=$_POST['name'];
     $rollnum = $_POST['rollnumber'];
	 $dept = $_POST['department'];
	 $sex = $_POST['sex'];
	 $pwd = $_POST['password'];
	 $confpwd = $_POST['cofirmpassword'];
	 $check = true;
   
   if($name=="" || $rollnum=="" ||$dept == "select" || $sex == "" || $pwd == "" || $confpwd == "")
			{
				echo '<br>Do not leave any field blank';
				$check = false;
			}
   
  if($check)
  {  $con = mysql_connect('localhost:3306','root','') or  die("Cannot connect :" . mysql_error());
   $query= "INSERT INTO user (NAME,ROLL NUMBER, DEPT, SEX, PASSWORD)
            VALUES ('$name','$rollnum','$dept','$sex','$pwd')";
    mysql_select_db("deltausers",$con)
	or
	die("Cant connect :" . mysql_error());
	$result=mysql_query($con,$query);
	if(!$result)
    {
        die('Registration unsuccessful ' . mysql_error());
      }
       echo "Registered successfully!\n";
  
  mysql_close($con);
  $regform=false;
  }
 }
 if($regform)
 {
 ?>
<h1 align=center> REGISTRATION FORM</h1><br><hr>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
   <label for="fn"> Name* </label> 
   <input type="text" name="name" id="fn"><br><br>
   <label for="rn"> Roll Number* </label> 
   <input type="text" name="rollnumber" id="rn"><br><br>
   <label for="dept"> Department* </label> 
   <select name="department" id="dept">
			  <option value="select"> DEPT</option>
			  <option value="chem">CHEM</option>
			  <option value="civ">CIV</option>
			  <option value="cse">CSE</option>
			  <option value="ece">ECE</option>
			  <option value="eee">EEE</option>
			  <option value="ice">ICE</option>
			  <option value="mech">MECH</option>
			  <option value="meta">META</option>
			  <option value="prod">PROD</option>
	</select>	
   <p> Sex* </p>
   <input type="radio" name="sex" value="Male" id="male"> <label for="male">Male</label>
   <input type="radio" name="sex" value="Female" id="female"> <label for="female">Female</label><br><br>
   <label for="pwd"> Password* </label> 
   <input type="password" name="password" id="pwd"> <br><br>
   <label for="confpwd"> Confirm password* </label> 
   <input type="password" name="confirmpassword" id="confpwd"> <br><br>
   <input type="submit" name="submit" value="Submit"> 
</form>
 <?php
  }
  ?>
</body>
</html>
