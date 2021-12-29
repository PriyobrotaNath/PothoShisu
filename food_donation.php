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
	background-image:url(image/19.jpg);
	
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

<div class="container">
	<div class="row">
		<h1>  Food Donation  </h1>
        
		<div class="col-mid-8">
        <center>
        <form method="POST" action="food_donation1.php">
			<div class="row">
				<label class="label col-mid-3 control-label">Name</label>
				
				<div class="col-mid-9">
					<input type="text" class="form-control"name="name" placeholder="Name">
				</div>
			</div>
	
			<div class="row">
				<label class="label col-mid-3 control-label">Contact</label>
				
				<div class="col-mid-9">
					<input type="number" class="form-control"name="contact" placeholder="Contact">
				</div>
			</div>
			<div class="row">
				<label class="label col-mid-3 control-label">Pick Up Address</label>
				
				<div class="col-mid-9">
					<input type="text" class="form-control"name="pick_up_address" placeholder="Address">
				</div>
			</div>
			<div class="row">
			<label class="label col-mid-3 control-label">Donation School Name</label>
				
				<div class="col-mid-9">
					<input type="text" class="form-control"name="donation_school_name" placeholder="School Name">
				</div>
			</div>
			<div class="row">
				<label class="label col-mid-3 control-label">Food Type</label>
				<div class="col-mid-9">
								
					<select class="form-control" name="food_type">
					<option>Cooked</option>
					<option>Readymate</option>
					</select>			
				</div>
			</div>
			
			
			<div class="row">
				<label class="label col-mid-3 control-label">Item Name</label>
				<div class="col-mid-9">
					<input type="text" class="form-control"name="item_name" placeholder="Item Name">
				</div>
			</div>
			<div class="row">
				<label class="label col-mid-3 control-label">Quantity</label>
				<div class="col-mid-9">
					<input type="number" class="form-control"name="quantity" placeholder="Quantity">
				</div>
			</div>
			<div class="row">
				<label class="label col-mid-3 control-label">Cooked Date</label>
				
				<div class="col-mid-9">
					<input type="date" class="form-control"name="cooked_date" placeholder="Cooked Date">
				</div>
			</div>
				<div class="row">
				<label class="label col-mid-3 control-label">Expire date</label>
				
				<div class="col-mid-9">
					<input type="date" class="form-control"name="expire_date" placeholder="Expire Date">
				</div>
			</div>
				<div class="row">
				
				<label class="label col-mid-3 control-label">Desire Donation Date:</label>
				<div class="col-mid-9">
					<input type="date" class="form-control"name="desire_donation_date" placeholder="Desire Donation Date">
				</div>
			</div>
			
			
			<div class="row">
				<label class="label col-mid-3 control-label">Delivery System</label>
				<div class="col-mid-9">
								
					<select class="form-control" name="delivary_system">
					<option>Self Service</option>
					<option>Volunteering service</option>
					</select>			
				</div>
			</div>
			
			
			<div class="row">
				<div class="col-mid-9">
					<center><input  type="submit" class="btn btn-info" name="post" value="post"/></center>
				
				</div>
			</div>
            </form>
            </center>
		
		<div class="col-mid-4"></div>
	</div>


</div>

</body>
</html>


<?php

		$errors = array();
		if (isset($_POST['post'])) {
			
		$name=$_POST['name'];
		$contact=$_POST['contact'];
		$pick_up_address=$_POST['pick_up_address'];
		$donation_school_name=$_POST['donation_school_name'];
		$food_type=$_POST['food_type'];
		$item_name=$_POST['item_name'];
		$quantity=$_POST['quantity'];
		$cooked_date=$_POST['cooked_date'];
		
		$expire_date=$_POST['expire_date'];
		$desire_donation_date=$_POST['desire_donation_date'];
		$delivary_system=$_POST['delivary_system'];
		
		
		if (count($errors)==0) {
			
		$user_obj = new user();
		$user_reg = $user_obj->foodPost($name,$contact,$pick_up_address,$donation_school_name,$food_type,$item_name,$quantity,$cooked_date,$expire_date,$desire_donation_date,$delivary_system );
		//$user_list = $user_obj->UserLogin($email,$password);

		
	}
		}


?>



