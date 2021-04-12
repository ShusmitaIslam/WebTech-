<!DOCTYPE html>
<html lang="en">
<head>
<title>Password Change</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
  background-color: #666;
  padding: 30px;
  text-align: left;
  font-size: 35px;
  color: white;
}
article {
  float: Center;
  padding: 270px;
  text-align: Center;
  height: 300px; /* only for demonstration, should be removed */
}
/* Clear floats after the columns */
section::after {
  content: "";
  display: table;
  text-align: Center;
  clear: both;
}

}
</style>
</head>
<body>
<h3 align="center">CHANGE PASSWORD</h3>
<div><?php if(isset($password)) { echo $password; } ?></div>
<form method="post" action="" align="center">
Current Password:<br>
<input type="password" name="Password"><span id="Password" class="required"></span>
<br>
New Password:<br>
<input type="password" name="password"><span id="password" class="required"></span>
<br>
Confirm Password:<br>
<input type="password" name="password"><span id="password" class="required"></span>
<br><br>
<input type="submit">
</form>
<br>=
<br>
</body>
</html>
<?php

$password =$pwd = $error = "";

$pwd = $_POST['password '];
if( strlen($password ) < 8 ) {
$error .= "Password too short!
";
}
if( strlen($password ) > 20 ) {
$error .= "Password too long!
";
}
if( strlen($password ) < 8 ) {
$error .= "Password too short!
";
}
if( !preg_match("#[0-9]+#", $password ) ) {
$error .= "Password must include at least one number!
";
}
if( !preg_match("#[a-z]+#", $password ) ) {
$error .= "Password must include at least one letter!
";
}
if( !preg_match("#[A-Z]+#", $password ) ) {
$error .= "Password must include at least one CAPS!
";
}
if( !preg_match("#\W+#", $password ) ) {
$error .= "Password must include at least one symbol!
";
}
if($error){
echo "Password validation failure(your choise is weak): $error";
} else {
echo "Your password is strong.";
}
?>