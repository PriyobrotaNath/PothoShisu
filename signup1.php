<?php 

include('user.inc.php');


?>

<!DOCTYPE html>
<html>
<head>


<link rel="stylesheet" type="text/css" href="style1.css">
<title>bootstrap registration form</title>
</head>

<body>

<div class="container">

	<div class="row">
	
	
		<h1  class="text-left">  Sign Up  </h1>
		<center><div class="col-mid-8">
		<form method="POST" action="signup1.php">
			<div class="row">
				<label class="label col-mid-3 control-label">Name</label>
				<div class="col-mid-9">
					<input type="text" class="form-control" name="name" placeholder="Name" required>
				</div>
			</div>
			<div class="row">
				<label class="label col-mid-3 control-label">E-mail</label>
				<div class="col-mid-9">
					<input type="Email" class="form-control" name="email" placeholder="E-mail" style="width=200px" required>
				</div>
			</div>
			<div class="row">
				<label class="label col-mid-3 control-label">Contact</label>
				<div class="col-mid-9">
					<input type="number" class="form-control" name="contact" placeholder="Contact" required>
				</div>
			</div>
			<div class="row">
				<label class="label col-mid-3 control-label">Address</label>
				<div class="col-mid-9">
					<input type="text" class="form-control" name="address" placeholder="Address" required>
				</div>
			</div>
			<div class="row">
				<label class="label col-mid-3 control-label">NID</label>
				<div class="col-mid-9">
					<input type="number" class="form-control"name="nid" placeholder="NID" required>
				</div>
			</div>
			<div class="row">
				<label class="label col-mid-3 control-label">Category</label>
				<div class="col-mid-9">
								
					<select class="form-control1" name="category" placeholder="Category" required>
					<option>Admin</option>
					<option>Donar</option>
					</select>			
				</div>
			</div>
			<div class="row">
				<label class="label col-mid-3 control-label">Password</label>
				<div class="col-mid-9">
					<input type="password" class="form-control"name="password" placeholder="Password" required>
				</div>
			</div>
			
			<div class="row">
				<label class="label col-mid-3 control-label">Re-Password</label>
				<div class="col-mid-9">
					<input type="password" class="form-control"name="re_password" placeholder="Re Password" required>
				</div>
			</div>
			<div class="row">
				<div class="input-group">
			<button type="submit" name="signup" class="btn btn-primary">signup</button>
		</div>
			</div>
			<p>
		Already a member? <a href="signin1.php" class="btn btn-info">Login</a>
		<br/>
		<a href="home.php" class="btn btn-info" >Home</a>
		
	</p>
			</form>
		</div></center>
		<div class="col-mid-4"></div>
	</div>


</div>

</body>
</html>

<?php

		$errors = array();
		if (isset($_POST['signup'])) {
			
		$name=$_POST['name'];
		$contact=$_POST['contact'];
		$nid=$_POST['nid'];
		$email=$_POST['email'];
		$address=$_POST['address'];
		$category=$_POST['category'];
		$password=$_POST['password'];
		$re_password=$_POST['re_password'];
		

		if($password!=$re_password){
			array_push($errors,"Two password do not match");

		}
		if (count($errors)==0) {
			
		$password= $password;	
		$user_obj = new User();
		$user_reg = $user_obj->UserReg($name,$contact,$nid,$email,$address,$category,$password);
		$user_list = $user_obj->UserLogin($email,$password);

		if ($user_list->num_rows > 0) {

        while ($row = $user_list->fetch_assoc()) {
             
             $_SESSION['u'] = $row["id"];
             $_SESSION['logged'] = true;
    
    }
    header('location:home2.php'); 
		}
	}
		}


?>



