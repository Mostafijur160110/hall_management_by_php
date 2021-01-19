<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <title> BSMR Hall</title>

 <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
 <script src="bootstrap/js/jquery-3.2.1.min.js" ></script>

 <script src="bootstrap/js/bootstrap.min.js" > </script>

 <style>
 .row{height: px;}

 .fotter{text-align: center;
   padding:px;
   background-color: aqua;
   height: 70px;
 }

 .left{
  background-color: antiquewhite;
  height: 200px;
  padding: 10px;
}

.right{
  background-color: blueviolet;
  height: 400px;
  padding: 10px;
}
.slider_adds {

 height: 100px;
} 
.p{padding:20px;
 margin: 5px;
 text-align: center;}
 ul :hover {background-color:green;
           color: black;
 }

 .hallr{background-color: pink;
         padding: 30px;
         border: 10px;
         margin-left: 16px;
		 margin-right: 16px;
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
 tr :hover{background-color:red;
      color:white;}
 
</style>

</head>

<body>
  <div class="container">
   <div class="container">
     <div class="row">
      <div class="col-sm-12 col-ms-12 col-xs-12 ">
        <h3>Bangabandhu Sheikh Mujibur Rahman Hall (PUST)</h3>

        <nav class="navbar navbar-inverse navbar navbar-light" class="navbar navbar-inverse navbar navbar-light navbar-default navbar-fixed-top" style="background-color: hsl(0, 100%, 25%)" >
          <div class="container-fluid">
            <div class="navbar-header">
             <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-  target="#bs-example-navbar-collapse-1"
             aria-expanded="false">
             <span class="sr-only">Toggle navigation</span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
           </button>
           <a class="navbar-brand" href="#">
            <img src="image/PUST_Logo_Color.jpg" style="height:30px" width="40px" />
          </a>
        </div>


        <ul class="nav navbar-nav">
          <li class="active"><a href="http://localhost/project/">Home</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Administration
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li>
                <a href="http://localhost/demo/administrator.php">Administrator</a>
              </li>
              <li>
                <a href="http://localhost/demo/hall.php">Hall</a>
              </li>
              <li>
                <a href="http://localhost/demo/medical%20room.php">Medical Office</a>
              </li>

            </ul>
          </li>


          <li><a href="http://localhost/demo/provost%20office.php" target="_blank">Provost Office</a></li>

          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Information Office
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li>
                <a href="http://localhost/demo/students.php">Students</a>
              </li>
              <li>
                <a href="http://localhost/demo/reading%20room.php">Reading Room</a>
              </li>
              <li>
                <a href="http://localhost/demo/hall_dining.php">Hall Dining</a>
              </li>
              <li>
                <a href="http://localhost/demo/medical%20room.php">Medical Room </a>
              </li>
              <li>
                <a href="http://localhost/demo/sports%20room.php">Sports Room</a>
              </li>
              <li>
                <a href="http://localhost/demo/tv%20room.php">TV Room</a>
              </li>
              <li>
                <a href="http://localhost/demo/prayer%20room.php">Prayer Room
                  <ul>
                    <li>
                      <a href="http://localhost/demo/mosque.php">Mosque</a>
                    </li>
                    <li>
                      <a href="http://localhost/demo/temple.php">Temple</a>
                    </li>

                  </ul>
                </a>
              </li>
              <li>
                <a href="http://localhost/demo/hall%20room.php">Hall Room</a>
              </li>
              <li>
                <a href="http://localhost/demo/guest%20room.php">Guest Room </a>
              </li>

            </ul>
          </li>

        </li>
      </ul>

      <ul class="nav navbar-nav  navbar-right">
        <li><a href="http://localhost/demo/about.html" target="_blank">About Us </a></li>
        <li><a href="http://localhost/demo/contact.html" target="_blank">Contact Us</a></li>
        <li><a href="http://localhost/project/Login/login.html" target="_blank">Log In </a></li>
      </ul>

      <form class="navbar-form navbar-right" action="/action_page.php">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search" name="search">
        </div>
        <button type="submit" class="btn btn-default">Go</button>
      </form>

    </div>
  </nav>

</div>
</div>
</div> 
<div class="container">
<div class="row">
<div class="hallr">
 
 
 <h1> <b><i>Bangabandhu Sheikh Mujibur Rahman Hall</i></b> <P>(Hall Room)</P> </h1>

<?php
$con= mysqli_connect('localhost','root','','hall_management_system');

if($con)
{ 
	$sql = "SELECT * from `hall room`";
	$result = mysqli_query ($con,$sql);
?>

  <table class="tab" border="">
  	 <tr>
  	 	<th>Room No</th>
  	 	<th>Area</th>
  	 	<th>Floor No</th>
  	 	 
      </tr>
 

<?php
while($row = mysqli_fetch_assoc($result)){
  
?>
   <tr>
   	   <td> <?php echo $row['Room No']; ?> </td>
   	   <td> <?php echo $row['Area']; ?> </td>
   	   <td> <?php echo $row['Floor No']; ?> </td>
   	    
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
<p style="font-size:18px; padding-top:30px; text-align:justify;">
 There are about 135 rooms in BSMRH,PUST.Among them some are used  as information Office,Provost Office,Guest Room ,Prayer Room(Mosque,Temple),Public room etc.But Most of rooms are used for Students Room.In Every room that are used for students residence get same opportunities.
 </p>
</div>
</div>
</div> 
<div class="container">
 <div class="row">
  <div class="col-sm-12 col-sm-12  col-xs-12">
 
   <div class="fotter">
     
    <p class="p">&copy; Copy Right @BSMRH 2018</p
    </div>
  </div>

</div>
</div>  

</div>  

</body>
</html>