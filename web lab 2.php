<!DOCTYPE html>
<html>
<head>
<style>
.error {color: red;}
</style>
</head>
<body>
<h3>EXPERIMENT NAME</h3>
<?php
$txt = "Designing HTML form using PHP with validation of user inputs";
echo "$txt";
?>
<h3>OBJECTIVE</h3>
<?php
$txt = "This assessment item is designed to give you some practice on validating user inputs using PHP.";
echo "$txt";
?>
<h3>ASSESSMENT TASK</h3>

<?php
$Name = $Email = $DOB = $Gender = $Degree = $BloodGrp = $dd = $mm = $yyyy = "";
$name = $email = $dob = $gender = $degree = $bloodgrp = "";

///Name validation
if($_SERVER["REQUEST_METHOD"] == "POST")
{  if(empty($_POST["Name"]))
   { $name="Cannot be empty"; }
   else 
  {
  $Name = test_input($_POST["Name"]);
  if(preg_match("/^[0-9]/",$Name))
  {
    $name="Letters Only";
  }
  else if(!preg_match("/^[a-zA-Z-. ?!]{2,}$/",$Name))
  {
    $name = "At least two words;only containing letters,period,dash";
  }
}

///Email validation
if(empty($_POST["email"]))
{
  $email = "Email is required";
}
else
{
  $Email = test_input($_POST["Email"]);
  if(!filter_var($Email, FILTER_VALIDATE_EMAIL))
  {
    $email = "Invalid email format. Format: example@something.com";
  }
}

//Date validation
if(empty($_POST["dd"]) or empty($_POST["mm"]) or empty($_POST["yyyy"]))
{
  $erdob="Fill up all the fields";
  $dd = test_input($_POST["dd"]);
  $mm = test_input($_POST["mm"]);
  $yyyy = test_input($_POST["yyyy"]);
}
else
{

  $dd = test_input($_POST["dd"]);
  $mm = test_input($_POST["mm"]);
  $yyyy = test_input($_POST["yyyy"]);

if( !filter_var($dd,FILTER_VALIDATE_INT,array('options' => array(
  'min_range' => 1, 
  'max_range' => 31
)))|!filter_var($mm,FILTER_VALIDATE_INT,array('options' => array(
  'min_range' => 1, 
  'max_range' => 12
)))|!filter_var($yyyy,FILTER_VALIDATE_INT,array('options' => array(
   'min_range' => 1953, 
   'max_range' => 1998
))))
{
   $dob="Must be valid numbers(dd:1-31,mm: 1-12,yyyy: 1950-2000)";
}
}

//Gender validation
if(!isset($_POST["Gender"]))
{
  $gender="At least one of them must be selected";
}
else
{
  $Gender = test_input($_POST["Gender"]);
}


echo "5. Design the following HTML form and perform the following validations ";
//Degree Validation
if(!isset($_POST["Degree"]))
{
   $degree="Must be selected";
}
else if (sizeof($_POST["Degree"])<2)
{
   $degree="At least two must be selected";
}

//blood validation
if(!isset($_POST["BloodGrp"]))
{
  $bloodgrp="Must be selected";
}
else if($_POST["BloodGrp"]=="blank")
{
  $bloodgrp="Must be selected";
}
else
{
  $BloodGrp = test_input($_POST["BloodGrp"]);
}
}
?>


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"style="padding-top: 10px">

<fieldset style="width:400px; ">
<legend><b>Name</b></legend>
<input type="text" Name="name" value="<?php echo $name;?>" ><span class="error">  <?php echo $name;?> </span><br>
<hr style="border: 0.01px solid;">
<input type="submit" Name="submit1" value="Submit" style="width:70px">
</fieldset>

<br>


<fieldset style="width:400px; ">
<legend><b>Email</b></legend>
<input type="text" name="Email" value="<?php echo $email;?>"><span class="error">  <?php echo $email;?></span><br>
<hr style="border: 0.01px solid;">
<input type="submit" name="submit2" value="Submit" style="width:70px">
</fieldset>

<br>


<fieldset style="width:400px; ">
<legend><b>Date of Birth</b></legend>
<table>
<tr style="text-align: center;">
   <th style="font-weight: normal;"><label for="dd" >dd</label></th>
   <th></th>
   <th style="font-weight: normal;"><label for="mm" >mm</label></th>
   <th></th>
   <th style="font-weight: normal;"><label for="yyyy" >yyyy</label></th>
   <th></th>
</tr>

<tr>
<td><input type="text" name="dd" style="width:40px" value="<?php echo $dd;?>"></td>
<td>/</td>
<td><input type="text" name="mm" style="width:40px" value="<?php echo $mm;?>"></td>
<td>/</td>
<td><input type="text" name="yyyy" style="width:40px;" value="<?php echo $yyyy;?>"></td>
<td style="padding-left: 12px"><span class="error"><?php echo $dob;?></span></td>
</tr>

</table>
<hr style="border: 0.01px solid;">
<input type="submit" name="submit3" value="Submit" style="width:70px">
</fieldset>


<br>


<fieldset style="width:400px; ">
<legend><b>Gender</b></legend>
   <input  type="radio" name="Gender"<?php if(isset($Gender) && $Gender=="female") echo "checked";?> value="Female">Female
   <input type="radio" name="Gender" <?php if (isset($Gender) && $Gender=="male") echo "checked";?> value="Male">Male	
   <input type="radio" name="Gender" <?php if (isset($Gender) && $Gender=="other") echo "checked";?> value="Other">Other 
			 <br>	
   <span class="error" >  <?php echo $gender;?></span>			
<hr style="border: 0.01px solid;">
<input type="submit" name="submit4" value="Submit" style="width:70px">
</fieldset>


<br>



<fieldset style="width: 400px; ">
<legend><b>Degree</b></legend>
    <input type="checkbox" id="Degree" name="Degree[]" value="SSC"> SSC
    <input type="checkbox" id="Degree" name="Degree[]" value="HSC"> HSC
    <input type="checkbox" id="Degree" name="Degree[]" value="BSc"> BSc
    <input type="checkbox" id="Degree" name="Degree[]" value="MSc"> MSc
	                  <br>	
    <span class="error" >  <?php echo $degree;?></span>			

<hr style="border: 0.01px solid;">
<input type="submit" name="submit5" value="Submit" style="width:70px">
</fieldset>


<br>


<fieldset style="width: 400px; ">
<legend><b>Blood Group</b></legend>
   <select name="bgroup" id="BloodGrp">
   <option value="blank"></option>
   <option value="O+">O+</option>
   <option value="O-">O-</option>
   <option value="A+">A+</option>
   <option value="A-">A-</option>
   <option value="B+">B+</option>
   <option value="B-">B-</option>
   <option value="AB+">AB+</option>
   <option value="AB-">AB-</option>
   </select>	
   <br>	
   <span class="error">  <?php echo $bloodgrp;?></span>			

<hr style="border: 0.01px solid;">
<input type="submit" Name="submit6" value="Submit" style="width:70px">
</fieldset>
</form>

</body>
</html>