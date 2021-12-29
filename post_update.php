<?php  
include('user.inc.php');
$user_obj = new user();

  $id=$_SESSION['id'];

?>
<!DOCTYPE html>
<html lang="en">
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
</style>
</head>
<body>

<center><h3>Edit Post Info</h3></center>
	
<form action="" method="POST">
 
  <center><div class="form-group"></center>
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Name</label>
  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="name" name="name"  maxlength="50">
  </div>


   <div class="form-group">
    <label for="exampleInputPassword1">Pick up Address</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="pick_up_address" name="pick_up_address"  maxlength="50">
  </div>

   <div class="form-group">
    <label for="exampleInputPassword1">Donation School Name:</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="donation_school_name" name="donation_school_name"  maxlength="50">
  </div>

   <div class="form-group">
    <label for="exampleInputPassword1">Food Type:</label>
    <select class="form-control" name="food_type">
					<option>Cooked</option>
					<option>Readymate</option>
					</select>
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Item Name</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="item_name" name="item_name"  maxlength="50">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Quantity</label>
    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="quantity" name="quantity"  maxlength="50">
  </div>
  
  
  
  
  
   <div class="form-group">
    <label for="exampleInputPassword1">Cooked Date</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="cooked_date" name="cooked_date"  maxlength="50">
  </div>
   <div class="form-group">
    <label for="exampleInputPassword1">Expire Date</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="expire_date" name="expire_date"  maxlength="50">
  </div>
   <div class="form-group">
    <label for="exampleInputPassword1">Desire Donation Date</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="desire_donation_date" name="desire_donation_date"  maxlength="50">
  </div>
   <div class="form-group">
    <label for="exampleInputPassword1">Delivary System</label>
     <select class="form-control" name="delivary_system" >
					<option>Self Service</option>
					<option>Volunteer Service</option>
					</select>
  </div>


  
  <center><div>
  <button type="submit" class="btn btn-primary" name="set">Set Information</button>
  <a  href="post.php"  class="btn btn-primary">Cancel</a>
  </div></center>
</form>


</body>
</html>

<?php

if (isset($_POST['set'])){

	$n=$_POST['name'];
	$c=$_POST['contact'];
	$pi=$_POST['pick_up_address'];
	$do=$_POST['donation_school_name'];
	$fo=$_POST['food_type'];
	$it=$_POST['item_name'];
	$qa=$_POST['quantity'];
	$co=$_POST['cooked_date'];
	$ex=$_POST['expire_date'];
	$de=$_POST['desire_donation_date'];
	$sy=$_POST['delivary_system'];
	
	
	
		
		$user_m=$user_obj->set_post($id,$n,$c,$pi,$do,$fo,$it,$qa,$co,$ex,$de,$sy);
		header('location:post_profil.php');

		
	


 


}

?><?php  
include('user.inc.php');
$user_obj = new user();

  $id=$_SESSION['id'];

?>
<!DOCTYPE html>
<html lang="en">
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
</style>
</head>
<body>

<center><h3>Edit Post Info</h3></center>
	
<form action="" method="POST">
 
  <center><div class="form-group"></center>
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Name</label>
  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="name" name="name"  maxlength="50">
  </div>


   <div class="form-group">
    <label for="exampleInputPassword1">Pick up Address</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="pick_up_address" name="pick_up_address"  maxlength="50">
  </div>

   <div class="form-group">
    <label for="exampleInputPassword1">Donation School Name:</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="donation_school_name" name="donation_school_name"  maxlength="50">
  </div>

   <div class="form-group">
    <label for="exampleInputPassword1">Food Type:</label>
    <select class="form-control" name="food_type">
					<option>Cooked</option>
					<option>Readymate</option>
					</select>
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Item Name</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="item_name" name="item_name"  maxlength="50">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Quantity</label>
    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="quantity" name="quantity"  maxlength="50">
  </div>
  
  
  
  
  
   <div class="form-group">
    <label for="exampleInputPassword1">Cooked Date</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="cooked_date" name="cooked_date"  maxlength="50">
  </div>
   <div class="form-group">
    <label for="exampleInputPassword1">Expire Date</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="expire_date" name="expire_date"  maxlength="50">
  </div>
   <div class="form-group">
    <label for="exampleInputPassword1">Desire Donation Date</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="desire_donation_date" name="desire_donation_date"  maxlength="50">
  </div>
   <div class="form-group">
    <label for="exampleInputPassword1">Delivary System</label>
     <select class="form-control" name="delivary_system" >
					<option>Self Service</option>
					<option>Volunteer Service</option>
					</select>
  </div>


  
  <center><div>
  <button type="submit" class="btn btn-primary" name="set">Set Information</button>
  <a  href="post.php"  class="btn btn-primary">Cancel</a>
  </div></center>
</form>


</body>
</html>

<?php

if (isset($_POST['set'])){

	$n=$_POST['name'];
	$c=$_POST['contact'];
	$pi=$_POST['pick_up_address'];
	$do=$_POST['donation_school_name'];
	$fo=$_POST['food_type'];
	$it=$_POST['item_name'];
	$qa=$_POST['quantity'];
	$co=$_POST['cooked_date'];
	$ex=$_POST['expire_date'];
	$de=$_POST['desire_donation_date'];
	$sy=$_POST['delivary_system'];
	
	
	
		
		$user_m=$user_obj->set_post($id,$n,$c,$pi,$do,$fo,$it,$qa,$co,$ex,$de,$sy);
		header('location:post_profil.php');

		
	


 


}

?>