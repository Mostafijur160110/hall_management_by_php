<?php
if(isset($_POST['submit']))

{
   $username = $_POST['username'];
   $password = $_POST['password'];
    
    
     // echo $username;
     // echo $password; 
    $connection = mysqli_connect('localhost', 'root', '', 'loginapp'); 
        if($connection){ 
        
        echo "we are connected";
        }
    else {
        die("database connection failed");
    }
     /*
    if($username && $password){
    
      echo $username;
      echo $password;
        
    }
    else
    { echo "Please Enter The Username And Password";
    }
    */
   
    
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        .color{background-color: hsl(147, 50%, 47%);}
    </style>
</head>
<body>
   <div class="container">
    <div class="color">
     <div class="col-xs-6">
         
       <form action="login.php" method="post">
          <div class="form-group">
            <label for="username"> Username</label>
             <input type="text" name="username" class="form-control">
              
          </div>
          <div class="form-group">
            <label for="password"> Password</label>
             <input type="password" name="password" class="form-control">
              
          </div>
          
           <input class="btn btn-primary" type="submit" name="submit" value="Submit">
       </form>
      
      </div>
       
      </div> 
    </div>
    
</body>
</html>