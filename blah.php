<html>
<title> Hello world </title>
</html>

<?php

$name=$_POST["name"];
echo "hello , ".$name;
echo "<br/>";
echo " Today's date is : <br/>";
$mydate = getdate();
$date = $mydate['hours']. ":";
$date .= $mydate['minutes']. ":";
$date .= $mydate['seconds']. "  "   ;
$date .= $mydate['mday']."/";
$date .=$mydate['mon']."/";
$date .=$mydate['year'];
print $date;

$dbhost = 'localhost:3036';
   $dbuser = 'root';
   $dbpass = 'samridhi';
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   mysql_select_db('project');
 if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   echo 'Connected successfully';
    $sql =
     $retvalue=mysql_query("SELECT * FROM userdetails WHERE name='" . $_POST["name"] . "'");
     $numrows=mysql_num_rows($retvalue);
      if($numrows==0)
   {
       echo "<br/>Could not find user";
   }
   else{
       echo "<br/> found user";
   }

 

   mysql_close($conn); 

?>