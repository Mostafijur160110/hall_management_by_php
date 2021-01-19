 <!DOCTYPE html>
<html lang="en"> 
<head> 
  <meta charset="UTF-8"> 
 <title> Hall Management System </title>
 <style>
     div{background-color: violet;
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
 
 <h1> <b><i>Bangabandhu Sheikh Mujibur Rahman Hall</i></b> <P>(Medical Room)</P> </h1>

<?php
$con= mysqli_connect('localhost','root','','hall_management_system');

if($con)
{ 
  $sql = "SELECT * from `medical room`";
  $result = mysqli_query ($con,$sql);
?>

  <table class="tab" border="">
     <tr>
      <th>Patient ID</th>
      <th>Doctor Name</th>
      <th>Patient Name</th>
      
      </tr>
 

<?php
while($row = mysqli_fetch_assoc($result)){
  
?>
   <tr>
       <td> <?php echo $row['Patient ID']; ?> </td>
       <td> <?php echo $row['Doctor Name']; ?> </td>
       <td> <?php echo $row['Patient Name']; ?> </td>
       
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