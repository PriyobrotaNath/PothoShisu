<?php 

include('user.inc.php');


?>

<!DOCTYPE html>
<html>
<head>
 <title>PothoshisurAlo</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style> 
 body{
	background-image:url(image/02.jpg);
	
	background-size:cover;
	background-attachment:fixed;
 }
	
h1{
	margin-top:20px;
	text-align:center;
	margin-bottom:40px;
	color: #4CAF50;
	font-weight: bold;
}
	

.label{
	font-size:18px;
	margin-top:15px;
	color:white;
	font-weight:normal;
	text-align:center-left;
	
	
}
.form-control{
	background:rgba(0,0,0,0.7);
	border-radius:0px;
	border:2px;
	margin-top:10px;
	font-size:18px;
	color:white;
	height:35px;
	width:250px;
	text-align:center-left;
	
}



</style>
</head>

<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
     <img src="image/logo.png" class="img-rounded" width="100" height="50"  >
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="about2.php">About Us</a></li>
	  <li class="active"><a href="map.html">Map</a></li>
	    <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" >Donate<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="donation_category1.php">Make Donation</a></li>
            <li><a href="donar_post.php">post</a></li>
          </ul>
        </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
		<li class="active"><a href="profil1.php">Profile</a></li>
	    <li><a href="home.php"><span class="glyphicon glyphicon-log-out"></span> log out</a></li>
    </ul>
  </div>
</nav>



</body>
</html>





