<?php  
include('user.inc.php');
$user_obj = new user();

$id= $_SESSION['id'];
$user_info=$user_obj->user($id);
$row = $user_info->fetch_assoc();

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
<div class="container " > 
    <div class="row content"> 
        <center><h3>Update user Info</h3></center>
        

        <hr/>
        <form method="post" action="profil.php">

            <input type="hidden" name="id" value="" id=""  >
            <div class="form-group">
                <label for="student_name">Name:</label>
                <input type="text" name="name" value="<?php echo $row['name']; ?>" id="student_name" class="form-control" required maxlength="50">
            </div>

            <div class="form-group">
                <label for="student_name">Contact:</label>
                <input type="number" name="contact" value="<?php echo $row['contact']; ?>" id="student_name" class="form-control" required maxlength="50">
            </div>

            <div class="form-group">
                <label for="student_name">NID:</label>
                <input type="number" name="nid" value="<?php echo $row['nid']; ?>" id="student_name" class="form-control" required maxlength="50">
            </div>
			
			<div class="form-group">
                <label for="email_address">E-mail:</label>
                <input type="email" class="form-control" value="<?php echo $row['email']; ?>" name="student_name" id="email" required maxlength="50">
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" class="form-control" value="<?php echo $row['address']; ?>" name="student_name" id="Address"  maxlength="50">
            </div>
			<center><div>
			<a  href="update_profile2.php"  class="btn btn-primary">Update</a>
			<a  href="index.php"  class="btn btn-primary">Cancel</a>
			</div></center> 
			</form>
			
			
    </div>
</div>


