<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">
	<h2>Home Page</h2>
</div>
		
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<pre><h1 style="color: #5F9EA0;">Welcome <strong><?php echo $_SESSION['username']; ?></strong></h1><br></pre>

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
 <a href="http://localhost/php/change%20password.php#"><u>Change Password</u></a><br><br><br>
</pre>
</section>
<footer>
  <hr style="border: 0.1px solid;"><hr style="border: 0.1px solid;">Creative International High School</br>408/1,Kuratoli.Khilkhet,Dhaka 1229,Bangldesh</br>info@creative.edu<hr style="border: 0.1px solid;"><hr style="border: 0.1px solid;">
</footer>


    	<pre>                                            <a href="index.php?logout='1'" style="color: red;"><h3>logout</h3></a> </pre>
    <?php endif ?>
</div>

</body>
</html>