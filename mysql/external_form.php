<?php
if(isset($_POST['submit']))
{
    $minimum = 5 ;
    $maximum = 10;
    $name = array("ami", "tumi", "se", "thini");
    
  $usermane = $_POST['username'];
  $password = $_POST['password'];
    //echo "hello" .$usermane ; 
    //echo "your Password is" .$password;
    if(strlen($usermane) < $minimum ){
        echo "user name is  short";
        
    }
    if(strlen($usermane) > $maximum ){
        echo "user name is  long";
        
    }
     if(!in_array ($usermane, $name)){
        echo "you are not allow";
     }
    else echo "Welcome";
    
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
    <form action="form_process.php" method="post">
        <input type="text" name="username" placeholder="Enter Username"><br>
        <input type="password" name="password" placeholder="Enter Password">
        <br>
        <input type="submit" name="submit"> 
        
        
        
    </form>
    
    
    
</body>
</html>