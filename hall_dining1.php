<!DOCTYPE html>
<html lang="en"> 
<head> 
  <meta charset="UTF-8"> 
 <title> Hall Management System </title>
 <style>
     div{background-color: pink;
         padding: 50px;
         border: 50px;
         margin: 60px;
         text-align: center;
         font-family: monospace;
          }
   table {
    border-collapse: ;
    width: 100%;
       
}

table, th, td {
    text-align: center;
    padding: 8px;
    border: 1px solid black;
}

tr:nth-child(even){background-color:rgb(240, 240, 240)
}

th {
    background-color: #4CAF50;
    color: white;
}
     }
</style>
</head>
 
 <body> 
 <div>
 
 <h1> <b><i>Bangabandhu Sheikh Mujibur Rahman Hall</i></b> <P>(Hall Dining)</P> </h1>

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

</div>
</body>
</html>