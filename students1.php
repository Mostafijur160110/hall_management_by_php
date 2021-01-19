<!DOCTYPE html>
<html lang="en"> 
<head> 
  <meta charset="UTF-8"> 
 <title> Hall Management System </title>
 <style>
     div{background-color: orange;
         padding: 50px;
         border: 50px;
         margin: 100px;
         text-align: center;
         font-family: monospace;
          }
   table {
    border-collapse:  ;
    width: 100%;
       position:
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
 
 <h1> <b><i>Bangabandhu Sheikh Mujibur Rahman Hall</i></b> <P>(Students)</P> </h1>

<?php
$con= mysqli_connect('localhost','root','','hall_management_system');

if($con)
{ 
  $sql = "SELECT * from `students`";
  $result = mysqli_query ($con,$sql);
?>

  <table class="tab" border="">
     <tr>
      <th>Name</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Student ID</th>
      <th>Contact No</th>
      <th>Room No</th>
      <th>E-mail</th>
      </tr>
 

<?php
while($row = mysqli_fetch_assoc($result)){
  
?>
   <tr>
       <td> <?php echo $row['Name']; ?> </td>
       <td> <?php echo $row['First Name']; ?> </td>
       <td> <?php echo $row['Last Name']; ?> </td>
       <td> <?php echo $row['Student ID']; ?> </td>
       <td> <?php echo $row['Room No']; ?> </td>
       <td> <?php echo $row['Contact No']; ?> </td>
       <td> <?php echo $row['E-mail']; ?> </td>

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