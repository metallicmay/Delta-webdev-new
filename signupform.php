<html>
<head>
<title> REGISTRATION FORM </title>
<h1 align=center> REGISTRATION FORM</h1>
<body style="background-color: skyblue;color:black;">
<form  action="signup.php" method="post">
 <table cellpadding="6">
 <tr>
 <td> <label for="fn"> Name* </label> </td>
  <td> <input type="text" name="name" id="fn"> <td>
  </tr>
  <tr>
  <td> <label for="rn"> Roll Number* </label> </td> 
  <td> <input type="text" name="rollnumber" id="rn"> </td>
  </tr>
   <tr>
   <td><label for="dept"> Department* </label> </td>
   <td> <select name="department" id="dept">
			  <option value=""> DEPT</option>
			  <option value="chem">CHEM</option>
			  <option value="civ">CIV</option>
			  <option value="cse">CSE</option>
			  <option value="ece">ECE</option>
			  <option value="eee">EEE</option>
			  <option value="ice">ICE</option>
			  <option value="mech">MECH</option>
			  <option value="meta">META</option>
			  <option value="prod">PROD</option>
	</select> </td>
   </tr>
   <tr>
   <td> <p>Sex* </p> </td>
   <td><input type="radio" name="sex" value="Male" id="male"> <label for="male">Male</label>
   <input type="radio" name="sex" value="Female" id="female"> <label for="female">Female</label> </td>
   </tr>
   <tr>
   <td> <label for="pwd"> Password* </label> </td> 
   <td> <input type="password" name="password" id="pwd"> </td>
   </tr>
   <tr>
   <td> <label for="confpwd"> Confirm password* </label> </td> 
   <td> <input type="password" name="confirmpassword" id="confpwd"> </td>
   </tr>
   <tr>
   <td> <input type="submit" name="submit" value="Submit"> </td>  
    </tr>   
   </table>
   </form>
   </body>
</html>
