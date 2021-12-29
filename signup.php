
<?php
require_once('connection.php');

?>

?>
<!DOCTYPE html>
<html>
<head>


<link rel="stylesheet" type="text/css" href="style.css">
<title>bootstrap registration form</title>
</head>

<body>

<div class="container">
<?php
if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['Sign up'])){
	$Registration = $reg->registration('$_POST');
	
}

?>
	<div class="row">
	<?php
	if(isset($Registration)){
		echo $Registration;
	}
	?>
	
		<h1  class="text-left">  Sign Up  </h1>
		<center><div class="col-mid-8">
			<div class="row">
			
				<label class="label col-mid-3 control-label">Name</label>
				<div class="col-mid-9">
					<input type="text" class="form-control" name="name" placeholder="Name">
				</div>
			</div>
			<div class="row">
				<label class="label col-mid-3 control-label">E-mail</label>
				<div class="col-mid-9">
					<input type="Email" class="form-control" name="email" placeholder="E-mail" style="width=200px">
				</div>
			</div>
			<div class="row">
				<label class="label col-mid-3 control-label">Contact</label>
				<div class="col-mid-9">
					<input type="number" class="form-control" name="contact" placeholder="Contact">
				</div>
			</div>
			<div class="row">
				<label class="label col-mid-3 control-label">Address</label>
				<div class="col-mid-9">
					<input type="text" class="form-control" name="address" placeholder="Address">
				</div>
			</div>
		
			<div class="row">
				<label class="label col-mid-3 control-label">Category</label>
				<div class="col-mid-9">
								
					<select class="form-control" name="category" placeholder="Category">
					<option>Admin</option>
					<option>Donar</option>
					</select>			
				</div>
			</div>
			<div class="row">
				<label class="label col-mid-3 control-label">Password</label>
				<div class="col-mid-9">
					<input type="password" class="form-control"name="password" placeholder="Password">
				</div>
			</div>
			
			<div class="row">
				<label class="label col-mid-3 control-label">Re-Password</label>
				<div class="col-mid-9">
					<input type="password" class="form-control"name="re-password" placeholder="Re Password">
				</div>
			</div>
			<div class="row">
				<div class="col-mid-9">
					<button  type="submit" href="signin.php" class="btn btn-info"> Sign up</button>
					<button  type="submit" href="home.php" class="btn btn-info"> Cancel</button>
					
				</div>
			</div>
		</div></center>
		<div class="col-mid-4"></div>
	</div>


</div>

</body>
</html>