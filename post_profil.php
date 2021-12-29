<?php  
include('user.inc.php');
$user_obj = new user();

$id= $_SESSION['id'];
$user_info=$user_obj->post($id);
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
        <center><h3>Update Post Info</h3></center>
        

        <hr/>
        <form method="post" action="post_profil.php">

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
                <label for="student_name">Pick Up Address:</label>
                <input type="text" name="pick_up_address" value="<?php echo $row['pick_up_address']; ?>" id="student_name" class="form-control" required maxlength="50">
            </div>
			
			<div class="form-group">
                <label for="student_name">Donation School Name:</label>
                <input type="text" class="form-control" value="<?php echo $row['donation_school_name']; ?>" name="donation_school_name" id="student_name" required maxlength="50">
            </div>
            <div class="form-group">
                <label for="student_name">Food Type:</label>
                <input type="text" class="form-control" value="<?php echo $row['food_type']; ?>" name="food_type" id="student_name"  maxlength="50">
            </div>
			 <div class="form-group">
                <label for="student_name">item name:</label>
                <input type="text" class="form-control" value="<?php echo $row['item_name']; ?>" name="item_name" id="student_name"  maxlength="50">
            </div>
			 <div class="form-group">
                <label for="student_name">Quantity:</label>
                <input type="number" class="form-control" value="<?php echo $row['quantity']; ?>" name="quantity" id="student_name"  maxlength="50">
            </div>
			 <div class="form-group">
                <label for="student_name">cooked Date:</label>
                <input type="text" class="form-control" value="<?php echo $row['cooked_date']; ?>" name="cooked_date" id="student_name"  maxlength="50">
            </div>
			 <div class="form-group">
                <label for="student_name">Expire Date:</label>
                <input type="text" class="form-control" value="<?php echo $row['expire_date']; ?>" name="expire_date" id="student_name"  maxlength="50">
            </div>
			 <div class="form-group">
                <label for="student_name">Desire Donation Date:</label>
                <input type="text" class="form-control" value="<?php echo $row['desire_donation_date']; ?>" name="desire_donation_date" id="student_name"  maxlength="50">
            </div>
			 <div class="form-group">
                <label for="student_name">Delivary System:</label>
                <input type="text" class="form-control" value="<?php echo $row['delivary_system']; ?>" name="delivary_system" id="student_name"  maxlength="50">
            </div>
			<center><div>
			<a  href="post.php"  class="btn btn-primary">Back</a>
			</div></center> 
			</form>
			
			
    </div>
</div>


