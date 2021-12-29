<?php  
include('user.inc.php');
$user_obj = new user();

$id= $_SESSION['id'];
$user_info=$user_obj->manpower_post($id);
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
        <center><h3>Update Manpower Post Info</h3></center>
        

        <hr/>
        <form method="post" action="manpower_post_profil.php">

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
                <label for="student_name">Birth Certificate Number:</label>
                <input type="text" class="form-control" value="<?php echo $row['birth_certificate_number']; ?>" name="birth_certificate_number" id="student_name" required maxlength="50">
            </div>
            <div class="form-group">
                <label for="student_name">Address:</label>
                <input type="text" class="form-control" value="<?php echo $row['address']; ?>" name="address" id="student_name"  maxlength="50">
            </div>
			 <div class="form-group">
                <label for="student_name">School:</label>
                <input type="text" class="form-control" value="<?php echo $row['school']; ?>" name="school" id="student_name"  maxlength="50">
            </div>
			 <div class="form-group">
                <label for="student_name">College:</label>
                <input type="number" class="form-control" value="<?php echo $row['college']; ?>" name="college" id="student_name"  maxlength="50">
            </div>
			 <div class="form-group">
                <label for="student_name">University:</label>
                <input type="text" class="form-control" value="<?php echo $row['university']; ?>" name="university" id="student_name"  maxlength="50">
            </div>
			 <div class="form-group">
                <label for="student_name">Category:</label>
                <input type="text" class="form-control" value="<?php echo $row['category']; ?>" name="category" id="student_name"  maxlength="50">
            </div>
			 <div class="form-group">
                <label for="student_name">Desire Working Area:</label>
                <input type="text" class="form-control" value="<?php echo $row['desire_working_area']; ?>" name="desire_working_area" id="student_name"  maxlength="50">
            </div>
			 <div class="form-group">
                <label for="student_name">Type:</label>
                <input type="text" class="form-control" value="<?php echo $row['type']; ?>" name="type" id="student_name"  maxlength="50">
            </div>
			<center><div>
			<a  href="manpower_post.php"  class="btn btn-primary">Back</a>
			</div></center> 
			</form>
			
			
    </div>
</div>


