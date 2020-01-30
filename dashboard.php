<!DOCTYPE html>
<html>
<head>
	<title>vfg</title>
</head>
<body>
<h2> Dashboard</h2>


           <!-- LOGIN(php) code from page-2 -->
<?php
      // get values from user input from login.php   
 $username = $_POST['user'];
 $userpassword = $_POST['pass'];

     // to prevent mysqql injection
$username = stripcslashes($username);
$userpassword = stripcslashes($userpassword);
$username = mysql_real_escape_string($username);
$userpassword = mysql_real_escape_string($userpassword);


      // connect the database and server
mysql_connect("localhost", "root","");
mysql_select_db("eventmanagementsys");

     // Query for Database for User
$result = mysql_query("SELECT * from userTable where username ='$username' and password ='$userpassword'") or die("Failed to query Database" .mysql_error());

$row = mysql_fetch_array($result);
if ($row['username'] == $username && $row['password'] == $userpassword) {
     	echo "Login Successfull.... Welcome " .$row['username'];
}
else{
     echo "Login Failed";
}

?>


</body>
</html>

