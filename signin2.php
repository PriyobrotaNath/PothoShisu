<?php 

include('user.inc.php');


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
   <style> 
   
   *{
	margin:0px;
	padding:0px;
}
  body{
	background-image:url(image/img_mountains.jpg);
	background-size:cover;
	background-attachment:fixed;
	font-family:Rockwell Extra Bold;
	
}

h1{
	font-family:100px;
	text-align:center;
	text-color:white;
	margin-top:20px;
	margin-bottom:30px;
}
.label{
	font-size:19px;
	text-align:center;
	color:white;
	margin-top:20px;
	font-weight:normal;
	
}
</style>
</head>
<body>

<div class="container">
  <h1>Sign In</h1>
 <center> <form class="form-horizontal" action="donation_category.php" method="POST">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
      </div>
    </div>
    <div class="form-group">        
    
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
		<div class="input-group">
			<button type="submit" id="btn" name="login" class="btn btn-info">Login</button>
		</div>
      </div>
    </div>
	 <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
       
			
				Not a member?<a href="signup1.php">Sign Up</a>
		
      </div>
    </div>
		
  </form></center>
  
  </div>

</body>
</html>


<?php


		if (isset($_POST['login'])) {
		
		$email=$_POST['email'];
		$password=$_POST['password'];
		

		if (count($errors)==0) {

		$user_obj = new User();
		$user_list = $user_obj->UserLogin($email,$password);
        
		
		if ($user_list->num_rows > 0) {

        while ($row = $user_list->fetch_assoc()) {
             
             $_SESSION['id'] = $row["id"];
             $_SESSION['n'] = $row["name"];
             $_SESSION['logged'] = true;
    
    }
    header('location:home2.php');

}
 
		}
	}


?>
