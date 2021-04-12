<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
}
</style>
</head>
<body>
<fieldset style="width: 300px; ">
<legend><h3><b>ADD BOOK</b></h3></legend>
<pre><b>Name                : </b><input type="text" name="name"><br>
<b>Buying Price        : </b><input type="text" name="Buying Price"><br>
<b>Selling Price       : </b><input type="text" name="Selling Price"><br></pre>
<hr style="border: 0.1px solid;">
<input type="checkbox" id="Display" name="Display" value="Display"> Display
<hr style="border: 0.1px solid;">
<input type="submit" value="SAVE">
</fieldset>

<fieldset style="width: 300px; ">
<legend><h3><b>DISPLAY</b></h3></legend>
<table style="width:100%">
  <tr>
    <th>NAME</th>
    <th>PROFIT</th> 
  </tr>
  <tr>
    <td>Samsung</td>
    <td>5000</td>
    <td><a href=""><u>edit</u></a></td>
    <td><a href=""><u>delete</u></a></td>
  </tr>
  <tr>
    <td>Nokia</td>
    <td>1500</td>
    <td><a href=""><u>edit</u></a></td>
    <td><a href=""><u>delete</u></a></td>
  </tr>
  <tr>
    <td>Xiaomi</td>
    <td>3300</td>
    <td><a href=""><u>edit</u></a></td>
    <td><a href=""><u>delete</u></a></td>
  </tr>
</table>
</fieldset>

<fieldset style="width: 300px; ">
<legend><h3><b>EDIT PRODUCT</b></h3></legend>
<pre><br>Name</b>
<input type="text" name="name">
<br>Buying Price</b>
<input type="text" name="buying price">
<br>Selling Price</b>
<input type="text" name="selling price">
<hr style="border: 0.1px solid;">
<input type="checkbox" id="Display" name="Display" value="Display"> Display
<hr style="border: 0.1px solid;">
<input type="submit" value="SAVE">
</pre>
</fieldset>

<fieldset style="width: 300px; ">
<legend><h3><b>DELETE PRODUCT</b></h3></legend>
<b>Name: HTC</br>Buying Price: 34000</br>Selling Price: 37000</br>Displayable: Yes</b>
<hr style="border: 0.1px solid;">
<input type="submit" value="Delete">
</fieldset>

<fieldset style="width: 300px; ">
<legend><h3><b>SEARCH</b></h3></legend>
<input type="text" name="search by name"><input type="submit" value="Search By Name">
<table style="width:100%">
  <tr>
    <th>NAME</th>
    <th>PROFIT</th> 
  </tr>
  <tr>
    <td>Samsung</td>
    <td>5000</td>
    <td><a href=""><u>edit</u></a></td>
    <td><a href=""><u>delete</u></a></td>
  </tr>
  <tr>
    <td>Nokia</td>
    <td>1500</td>
    <td><a href=""><u>edit</u></a></td>
    <td><a href=""><u>delete</u></a></td>
  </tr>
  <tr>
    <td>Xiaomi</td>
    <td>3300</td>
    <td><a href=""><u>edit</u></a></td>
    <td><a href=""><u>delete</u></a></td>
  </tr>
</table>
</fieldset>

</form>

</body>
</html>