<?php
$rollnum=$pwd="";
if(isset($_POST['rollnumber'])&& isset($_POST['password']))
{ 
$rollnum = $_POST['rollnumber'];
$pwd = $_POST['password'];
}
else
{
echo 'You must supply a roll number and password';
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
$con=mysql_connect('localhost:3306','root','')
$query = mysql_query("SELECT * FROM user WHERE ROLL NUMBER ='".$rollnum."' AND PASSWORD ='".$pwd."'") or die(mysql_error()); 
$data = mysql_fetch_array($query);
$query_num_rows = mysql_num_rows($query); 

if($query_num_rows==0)
{
echo 'Invalid roll number/password combination';
}
else if($query_num_rows==1)
{
 if($data)
  {
   $name=$data['NAME'];
  }
   session_start();
    $_SESSION['NAME'] = $name;
    $_SESSION['ROLL NUMBER'] = $rollnum;
    header("location:home.php");
  
 }
}
 
?>
<div align="center">
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
Roll number: <input type="text" name="rollnumber"> Password: <input type="password" name="password">
<input type="submit" value="Log in">
</form>
</div>
