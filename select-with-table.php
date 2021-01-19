<!DOCTYPE html>
<html lang="en"> 
<head> 
  <meta charset="UTF-8"> 
 <title> Hall Management System </title>
 <style>
     body{background-color: ;
         padding: 50px;
         border: 50px;
         margin: 50px;
         text-align: center;
         
          }
   table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: center;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}
     }
</style>
</head>
 
 <body> 
 <h1> Bangabandhu Sheikh Mujibur Rahman Hall </h1>

<?php
$con= mysqli_connect('localhost','root','','hall_management_system');

if($con)
{ 
	$sql = "SELECT * from `hall dining`";
	$result = mysqli_query ($con,$sql);
?>

  <table class="tab" border="1">
  	 <tr>
  	 	<th>Types of Food</th>
  	 	<th>Author</th>
  	 	<th>Meal</th>
  	 	<th>Dining Room No</th>
      </tr>
 

<?php
while($row = mysqli_fetch_assoc($result)){
  
?>
   <tr>
   	   <td> <?php echo $row['Types of Food']; ?> </td>
   	   <td> <?php echo $row['Author']; ?> </td>
   	   <td> <?php echo $row['Meal']; ?> </td>
   	   <td> <?php echo $row['Dining No']; ?> </td>
    </tr>
<?php
}
?>
 </table>

<?php
}

else
{ echo "not connected";
}
?>

</body>
</html>