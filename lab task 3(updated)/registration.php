<html>
   
   <head>
      <style>
         .error {color: #FF0000;}
      </style>
   </head>
   
   <body>
      <?php
         // define variables and set to empty values
         $Name = $Email = $Gender = $Classes = $Username = $passwordErr = $ConfirmPassword = $dd = $mm = $yyyy = "";
         $name = $email = $gender = $classes = $username = $password = $confirmPassword = "";
         
///Name validation
if($_SERVER["REQUEST_METHOD"] == "POST")
{ if(empty($_POST["Name"]))
{
$name="Please insert your name";
}
else
{
$Name = $_POST["Name"];
if(preg_match("/^[0-9]/",$Name))
{
$name="Letters Only";
}
else if(!preg_match("/^[a-zA-Z-. ?!]{2,}$/",$Name))
{
$name = "At least two words,only containing letters,period,dash";
}
}
}


///Email validation
if(empty($_POST["email"]))
{
$email = "Please insert your email address";
}
else
{
$Email = $_POST["Email"];
if(!filter_var($Email, FILTER_VALIDATE_EMAIL))
{
$email = "Invalid email address. Format: example@type.com";
}
}

///username validation
if($_SERVER["REQUEST_METHOD"] == "POST")
{ if(empty($_POST["Username"]))
{
$username="Please insert user name";
}
else
{
$Username = $_POST["Username"];
if(preg_match("/^[0-9]/",$Username))
{
$username="Letters Only";
}
else if(!preg_match("/^[a-zA-Z-. ?!]{2,}$/",$Username))
{
$username = "At least two words,only containing letters,period,dash";
}
}
}
         
           
if (empty($_POST["password"])) {
   $passwordErr = "Password is required";
}else {
   $password = test_input($_POST["password"]);
}
             
            
if (empty($_POST["comment"])) {
   $comment = "";
}else {
   $comment = test_input($_POST["comment"]);
}

if (empty($_POST["confirmPassword"])) {
   $ConfirmPassword = "Confirm Password is required";
}else {
   $ConfirmPassword = test_input($_POST["confirmPassword"]);
}

           
if (empty($_POST["classes"])) {
   $Classes = "At least one class is required";
}else {
   $Classes = test_input($_POST["classes"]);
}
               
          
//Gender validation
if(!isset($_POST["Gender"]))
{
$gender="At least one of them must be selected";
}
else
{
$Gender = $_POST["Gender"];
}
         
      

///dob validation
if(empty($_POST["dd"]) or empty($_POST["mm"]) or empty($_POST["yyyy"]))
{
$dob="Insert all data";
}
else
{

$dd = $_POST["dd"];
$mm = $_POST["mm"];
$yyyy = $_POST["yyyy"];

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

function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }


?>
     

<fieldset>
<form method = "post">
            <tr>
               <td>Name:</td>
                         <td><input type = "text" name = "name">
                  <span class = "error">* <?php echo $name;?></span>
               </td>
            </tr>
</br>
             <tr>
                <td>Email:</td>
                          <td> <input type="text" name="Email">
                 <span class="error"> <?php echo $email;?></span>
               </td>
            </tr>
</br>
            <tr>
               <td>UserName:</td>
               <td><input type = "text" name = "username">
                  <span class = "error">* <?php echo $username;?></span>
               </td>
            </tr>
</br>
            <tr>
               <td>Password:</td>
               <td><input type = "text" name = "password">
                  <span class = "error">* <?php echo $passwordErr;?></span>
               </td>
            </tr>
</br>
            <tr>
               <td>Confirm Password:</td>
               <td><input type = "text" name = "confirmPassword">
                  <span class = "error">* <?php echo $ConfirmPassword;?></span>
               </td>
            </tr>
</br>            
            <tr>
               <td>Classes:</td>
               <td> <textarea name = "classes" rows = "5" cols = "40"></textarea>
               <span class = "error">* <?php echo $Classes;?></span>
              </td>
            </tr>
</br>

<fieldset style="width:400px; ">
<legend><b>Gender</b></legend>
<input type="radio" name="Gender" value="Female">Female
<input type="radio" name="Gender" value="Male">Male
<input type="radio" name="Gender" value="Other">Other
<span class="error" > <?php echo $gender;?></span>
</fieldset>
<br>

<fieldset style="width:600px; ">
<legend><b>Date of Birth</b></legend>
<th style="font-weight: normal;"><input type = "text" name = "dd"><label for="dd" >dd</label></th>
<th style="font-weight: normal;"><input type = "text" name = "mm"><label for="mm" >mm</label></th>
<th style="font-weight: normal;"><input type = "text" name = "yyyy"><label for="yyyy" >yyyy</label></th>
<span class="error" > <?php echo $dob;?></span>
</fieldset>

</br>				
            
<td>
  <input type = "submit" name = "submit" value = "Submit"> 
</td>
			
      </form>
</fieldset>

   </body>
</html>