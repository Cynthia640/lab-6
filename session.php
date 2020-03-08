<?php 


session_start();


 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	
 		
 		<form action="upload2.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload"><br><br>
  
    <input type="submit" value="submit" name="submit">
</form>
 	




 	<?php
if(isset($_POST["submit"])){
$_SESSION["name"] = $_POST["name"];
$_SESSION["email"] = $_POST["email"];
$_SESSION["gender"] = $_POST["gender"];
$_SESSION["password"] = $_POST["password"];


echo "Session variables are set";	
}

?>
 
 </body>
 </html>