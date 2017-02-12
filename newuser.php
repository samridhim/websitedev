<?php
$firstname=$_POST["firstname"];
$password=$_POST["password"];
$dob=$_POST["dob"];
$username=$_POST["username"];
$dbhost = 'localhost:3036';
   $dbuser = 'root';
   $dbpass = 'samridhi';
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   echo 'Connected successfully';
mysql_select_db("project");
$retvalue=mysql_query("INSERT INTO userdetails(name,password,dob,username) VALUES ('" . $_POST["firstname"] . "','" . $_POST["password"] . "','" . $_POST["dob"] . "','" . $_POST["username"] . "')");
if(!retvalue)
{
    echo "<br/>Entry not created";
}
else{
    echo "<br/>Entry created";
}
mysql_close($conn);
?>

<html>
<title> New User Registeration </title>
<body>
<a href = "/html/file.php"> Click to Login now </a>
</html>
</body>