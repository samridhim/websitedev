<?php?>
<html>
<title> Register </title>
<body>
Enter your registeration details
<form action = "newuser.php" method = "POST">
<br>
<link rel="stylesheet" href="c.css">
<p>
<fieldset>
<legend>Registeration Details </legend>
<label>  Name </label>
<input type = "text" name ="firstname">
<br>
<label> User Name </label>
<input type = "text" name = "username">
<br>
<label> Date of birth </label>
<input type ="date" name = "dob">
<br>
<label> Password </label>
<input type ="password" name = "password">
<br>
</p>
<input type ="submit" name = "submit" value = "Register">
<br>
</fieldset>
</form>
</body>
<html>

