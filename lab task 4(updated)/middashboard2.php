<!DOCTYPE html>
<html lang="en">
<head>
<title>Web Layout</title>
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
/* Style the footer */
footer {
  background-color: #666;
  padding: 10px;
  text-align: left;
  color: white;
}

}
</style>
</head>
<body>

<header>
<pre><img src="midprojectlogo.jpg" alt="student" width="60" height="70">                                     Logged in as <a href="">Shusmita Islam</a>|<a href="http://localhost/php/midpart1.php">Logout</a></pre> 
</header>

<div style="background:white; height: 430px; border-left: 2.0px black solid; left:230px; position: absolute;">
<pre>                                                                                                                                                                                        <h2>   WELCOME Shusmita Islam</h2></pre>
</div>
<section>
<div>
<pre><b>Student Panel</b><br><hr style="border: 0.1px solid;">
 <a href="http://localhost/php/view%20subject.php"><u>View subject</u></a>
 <a href="http://localhost/php/view%20result.php"><u>View result</u></a>
 <a href="http://localhost/php/view%20notes.php"><u>View notes</u></a>
 <a href="http://localhost/php/view%20notice.php"><u>View notice</u></a>
 <a href="http://localhost/php/upload%20file.php"><u>Upload files</u></a>
 <a href=""><u>Borrow books</u></a></pre>

<pre><b>Personal</b><br><hr style="border: 0.1px solid;">
 <a href="http://localhost/php/store.php"><u>Edit Profile</u></a>                 
 <a href="http://localhost/php/change%20profile%20picture.php"><u>Change Profile Picture</u></a>
 <a href="http://localhost/php/change%20password.php#"><u>Change Password</u></a>
</br></br></br></br></br></br></br></br></br></br>
</pre>
</section>
<footer>
  <pre>Creative International High School</br>408/1,Kuratoli.Khilkhet,Dhaka 1229,Bangldesh</br>info@creative.edu</pre>
</footer>

</body>
</html>
