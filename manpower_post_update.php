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

<center><h3>Update Manpower Post Info</h3></center>
	
<form action="" method="POST">
 
  <center><div class="form-group"></center>
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Name</label>
  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="name" name="name"  maxlength="50">
  </div>


   <div class="form-group">
    <label for="exampleInputPassword1">Contact</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="contact" name="contact"  maxlength="50">
  </div>

   <div class="form-group">
    <label for="exampleInputPassword1">NID:</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="nid" name="nid"  maxlength="50">
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Birth certificate Number:</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="birth_certificate_number" name="birth_certificate_number"  maxlength="50">
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">address:</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="address" name="address"  maxlength="50">
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">school:</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="school" name="school"  maxlength="50">
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">College:</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="college" name="college"  maxlength="50">
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">University:</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="university" name="university"  maxlength="50">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Category:</label>
    <select class="form-control" name="category">
					<option>Want to teach</option>
					<option>volunteer</option>
					</select>
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Desire Working Area:</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="desire_working_area" name="desire_working_area"  maxlength="50">
  </div>
  
  
 <div class="form-group">
    <label for="exampleInputPassword1">Type(Only for Teacher):</label>
    <select class="form-control" name="type">
					<option>Technical</option>
					<option>Non-technical</option>
					</select>
  </div>
    <center><div>
  <button type="submit" class="btn btn-primary" name="set">Set Information</button>
  <a  href="manpower_post.php"  class="btn btn-primary">Cancel</a>
  </div></center>
</form>


</body>
</html>

<?php

if (isset($_POST['set'])){

	$n=$_POST['name'];
	$c=$_POST['contact'];
	$pi=$_POST['nid'];
	$do=$_POST['birth_certificate_number'];
	$fo=$_POST['address'];
	$it=$_POST['school'];
	$qa=$_POST['college'];
	$co=$_POST['university'];
	$ex=$_POST['category'];
	$de=$_POST['desire_working_area'];
	$sy=$_POST['type'];
	
	
	
		
		$user_m=$user_obj->set_manpower_post($id,$n,$c,$pi,$do,$fo,$it,$qa,$co,$ex,$de,$sy);
		header('location:manpower_post_profil.php');

		
	


 


}

?>