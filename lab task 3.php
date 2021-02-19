<!DOCTYPE html>
<html>
<body>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"style="padding-top: 10px">

<fieldset style="width: 300px; ">
<legend><h3><b>LOGIN</b></h3></legend>
<pre><b>User Name: </b><input type="text" name="name"><br>
<b>Password : </b><input type="text" name="password"><br></pre>
<hr style="border: 0.1px solid;">
<input type="checkbox" id="Remember Me" name="Remember Me[]" value="Remember Me"> Remember Me
<p><input type="submit"><h4 style="Color: blue">Forgot Password?</h4></p>
</fieldset>

<br>

<fieldset style="width: 300px; ">
<legend><h3><b>CHANGE PASSWORD</b></h3></legend>
<pre><b>Current Password    : </b><input type="text" name="name"><br>
<b style="Color: green">New Password        : </b><input type="text" name="New Password"><br>
<b style="Color: red">Retype New Password : </b><input type="text" name="Retype New Password"><br></pre>
<hr style="border: 0.1px solid;">
<input type="submit">
</fieldset>

<br>

<fieldset style="width: 300px; ">
<legend><h3><b>Profile Picture</b></h3></legend>
<img src="female logo.jpg" alt=" " width="200" height="200">
<input type="file" name="file"><br/>
<hr style="border: 0.1px solid;">
<input type="submit" value="Upload" name="Submit1"> 
</fieldset>

<br>

<fieldset style="width: 300px; "> 
<legend><h3><b>REGISTRATION</b></h3></legend> 
<pre><b>Name             :</b> <input type="text" name="name">
<hr style="border: 0.1px solid;">
<b>E-mail           :</b> <input type="text" name="email">
<hr style="border: 0.1px solid;">
<pre><b>User Name        : </b><input type="text" name="name">
<hr style="border: 0.1px solid;">
<b>Password         : </b><input type="text" name="password">
<hr style="border: 0.1px solid;">
<b>Confirm Password : </b><input type="text" name="confirm password"><br></pre>
<hr style="border: 0.1px solid;">
<fieldset style="width: 300px; height:60 ">
<legend><h3><b>GENDER</b></h3></legend> 
<p><input type="radio" name="gender" value="female">Female <input type="radio" name="gender" value="male">Male <input type="radio" name="gender" value="other">Other</p>
</fieldset>
<hr style="border: 0.1px solid;">
<fieldset style="width: 300px; height:60">
<legend><h3><b>Date of Birth</b></h3></legend>  
<pre><input type="text" name="dd">/<input type="text" name="mm">/<input type="text" name="yy">(dd/mm/yyyy)</pre>
</fieldset>
<hr style="border: 0.1px solid;">
<p><input type="submit" name="submit" value="Submit">  <input type="button" value="Reset"></p> 
</fieldset>

</form>

</body>
</html>