<?php
session_start();
$name="";
if(isset($_SESSION['NAME']))
{  $name=$_SESSION['NAME'];
   echo '<h3> Hello '.$name.'</h3>';
  }
 <a href="logout.php"><button>Logout</button></a><br>
?>
