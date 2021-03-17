<?php
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Change profilr picture</title>
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
  text-align: Center;
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
  <img src="midprojectlogo.jpg" alt="student" width="50" height="60"> Upload File
</header>

<section>
<?php  
 $message = '';  
 $error = '';  
 if(isset($_POST["submit"]))  
 {  
      if(empty($_POST["name"]))  
      {  
           $error = "<label class='text-danger'></label>";  
      }  
      else  
      {  
           if(file_exists('data.json'))  
           {  
                $current_data = file_get_contents('data.json');  
                $array_data = json_decode($current_data, true);  
                $extra = array(  
                     'name'               =>     $_POST['file'],  
                );  
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('data.json', $final_data))  
                {  
                     $message = "<label class='text-success'>File Appended Success fully</p>";  
                }  
           }  
           else  
           {  
                $error = 'JSON File not exits';  
           }  
      }  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Append Data to JSON File using PHP</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br />  
           <div class="container" style="width:500px;">                  
                <form method="post">  
                     <?php   
                     if(isset($error))  
                     {  
                          echo $error;  
                     }  
                     ?>  
                     <br /> 
                                                                                                                                                    <label>File</label> </br> 
                                                                                                                         <input type="file" name="fileToUpload" id="fileToUpload"></br> 
                                                                                                                         <input type="submit" name="submit" value="Append" class="btn btn-info" /><br />                     
                     <?php  
                     if(isset($message))  
                     {  
                          echo $message;  
                     }  
                     ?>  
                </form>  
           </div>  
           <br />  
      </body>  
 </html>  
</br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
</section>

<footer>
  <pre>Creative International High School</br>408/1,Kuratoli.Khilkhet,Dhaka 1229,Bangldesh</br>info@creative.edu</pre>
</footer>

</body>
</html>
