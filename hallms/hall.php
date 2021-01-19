<?php
$con=new mysqli('localhost','root','','lab') 
//echo "Connected";
or die('unable to connect');
/* $sql="SELECT * From data";
$records=$con->query($sql);
while($rows=$records->fetch_assoc())
{
	$id=$rows['ID'];
	$name=$rows['Name'];
	echo "$id , $name <br>";
}
*/
echo "Done"; 


?>