<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Bootstrap Theme Simply Me</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
  body { 
    background-image:url(image/02.jpg);
	background-size:cover;
	background-attachment:fixed;
    
  }
  
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand">Potho Shishu</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">About Us</a></li>
	  <li class="active"><a href="#">Map</a></li>
	  <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" >Donate<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="donation_category.php">Make Donation</a></li>
            <li><a href="#">Donation History</a></li>
          </ul>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
		<li class="active"><a href="#">Profile</a></li>
	    <li><a href="home.php"><span class="glyphicon glyphicon-log-out"></span> log out</a></li>
    </ul>
  </div>
</nav>


</body>
</html>
