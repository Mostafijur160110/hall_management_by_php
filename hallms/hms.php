<!DOCTYPE html>
<html lang="en"> 
<head> 
  <meta charset="UTF-8"> 
 <title> Hall Management System </title>
</head>
 
 <body> 
 <h1> My database website </h1>
 
 <?php
$con=new mysqli('localhost','root','','lab') 
//echo "Connected";
or die('unable to connect');
/* 
 $sql="SELECT * From data";
$records=$con->query($sql);
while($rows=$records->fetch_assoc())
{
	$ID=$rows['city'];
	$name=$rows['faculty'];
    $division=$rows['student'];
	echo "$ID , $name , $division <br>";
}
    */ 
echo "Done"; 


?>
 </body>


</html>
