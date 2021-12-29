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
	
	background:gray;
	background-size:cover;
	background-attachment:fixed;
}
	
h1{
	margin-top:20px;
	text-align:center;
	margin-bottom:50px;
	color: #4CAF50;
	font-weight: bold;
}
	


.label{
	font-size:24px;
	margin-top:5px;
	color:white;
	font-weight:18px;
text-align:center-left;
	
	
	
}
.form-control{
	background:rgba(0,0,0,0.7);
	border-radius:0px;
	border:2px;
	margin-top:10px;
	font-size:16px;
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
	  <li class="active"><a href="school1.php">School List</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
		<li class="active"><a href="profil1.php">Profile</a></li>
	    <li><a href="home.php"><span class="glyphicon glyphicon-log-out"></span> log out</a></li>
    </ul>
  </div>
</nav>

<div class="container">
	<div class="row">
		<h1> Manpower (Want To Teach / Volunteer)  </h1>
		<div class="col-mid-8">
         <center>
        <form method="POST" action="manpower.php">
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
				<label class="label col-mid-3 control-label">NID</label>
			
				<div class="col-mid-9">
					<input type="number" class="form-control"name="nid" placeholder="NID">
				</div>
			</div>
			<div class="row">
			<label class="label col-mid-3 control-label">Birth Certificate Number</label>
			
				<div class="col-mid-9">
					<input type="number" class="form-control"name="birth_certificate_number" placeholder="birth_certificate_number">
				</div>
			</div>
			
			<div class="row">
			<label class="label col-mid-3 control-label">Address</label>
				<div class="col-mid-9">
					<input type="text" class="form-control"name="address" placeholder="Address">
				</div>
			</div>
			<div class="row">
				<label class="label col-mid-3 control-label">School</label>
			
				<div class="col-mid-9">
					<input type="text" class="form-control"name="school" placeholder="School">
				</div>
			</div>
			<div class="row">
			<label class="label col-mid-3 control-label">College</label>
			
				<div class="col-mid-9">
					<input type="text" class="form-control"name="college" placeholder="College">
				</div>
			</div>
			<div class="row">
			<label class="label col-mid-3 control-label">University</label>
			
				<div class="col-mid-9">
					<input type="text" class="form-control"name="university" placeholder="University">
				</div>
			</div>
			
			<div class="row">
			<label class="label col-mid-3 control-label">Category</label>
			
				<div class="col-mid-9">
								
					<select class="form-control" name="category" placeholder="Category">
					<option>Want to teach</option>
					<option>volunteer</option>
					</select>			
				</div>
			</div>
			
			<div class="row">
				<label class="label col-mid-3 control-label">Desire Working Area</label>
			
				<div class="col-mid-9">
					<input type="text" class="form-control"name="desire_working_area" placeholder="Area">
				</div>
			</div>
			
			
			
			<div class="row">
			<label class="label col-mid-3 control-label">Type(Only for Teacher)</label>
			
				<div class="col-mid-9">
								
					<select class="form-control" name="type" placeholder="type">
					<option>Technical</option>
					<option>Non-technical</option>
					</select>			
				</div>
			</div>
		
		<div class="row">
				<div class="col-mid-9">
				-	<center><input  type="submit" class="btn btn-info" name="post" value="post"/></center>
				
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
		$nid=$_POST['nid'];
		$birth_certificate_number=$_POST['birth_certificate_number'];
		$address=$_POST['address'];
		$school=$_POST['school'];
		$college=$_POST['college'];
		$university=$_POST['university'];
		
		$category=$_POST['category'];
		$desire_working_area=$_POST['desire_working_area'];
		$type=$_POST['type'];
		
		
		if (count($errors)==0) {
			
		$user_obj = new user();
		$user_reg = $user_obj->manPowerPost($name,$contact,$nid,$birth_certificate_number,$address,$school,$college,$university,$category,$desire_working_area ,$type );
		//$user_list = $user_obj->UserLogin($email,$password);

		
	}
		}


?>



