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

<center><h3>Edit user Info</h3></center>
	
<form action="" method="POST">
 
  <center><div class="form-group"></center>
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Name</label>
  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="name" name="name"  maxlength="50">
  </div>

   <div class="form-group">
    <label for="exampleInputPassword1">Contact</label>
    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="contact" name="contact"  maxlength="50">
  </div>

   <div class="form-group">
    <label for="exampleInputPassword1">NID</label>
    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="nid" name="nid"  maxlength="50">
  </div>

   <div class="form-group">
    <label for="exampleInputPassword1">email</label>
    <input type="email" class="form-control" id="exampleInputPassword1" placeholder="email" name="email"  maxlength="50">
  </div>

   <div class="form-group">
    <label for="exampleInputPassword1">Address</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="address" name="address"  maxlength="50">
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="password" name="password"  maxlength="50">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Confirm Password</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="password1" name="password1"  maxlength="50">
  </div>


  
  <center><div>
  <button type="submit" class="btn btn-primary" name="set">Set Information</button>
  <a  href="index.php"  class="btn btn-primary">Cancel</a>
  </div></center>
</form>


</body>
</html>

<?php

if (isset($_POST['set'])){

	$n=$_POST['name'];
	$c=$_POST['contact'];
	$ni=$_POST['nid'];
	$e=$_POST['email'];
	$a=$_POST['address'];
	$p=$_POST['password'];
	$p1=$_POST['password'];
	
	if($p==$p1)
	{
		
		$user_m=$user_obj->set_p($id,$n,$c,$ni,$e,$a,$p);
		header('location:profil.php');

		
	}


 


}

?>