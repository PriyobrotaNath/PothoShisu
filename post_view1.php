<?php


 include 'header.php';
 

 if(isset($_GET['id'])){
  $user_info=$user_obj->view_post_by_post_id($_GET['id']);
  


     
 }else{
  header('Location: post.php');
 }
 
 
 ?>
  <style> 
  body{
	background:gray;
	background-size:cover;
	background-attachment:fixed;
	
}
</style>
<div class="container " > 
    
  <div class="row content">

       
          
           
             <a  href="donar_post.php"  class="btn btn-success mt-12 pull-right">View post List</a> 
     
 <h3>View Post</h3>
       
    
     <hr/>
   
   
 
      
    <label >Id:</label>
   <?php  if(isset($user_info['id'])){echo $user_info['id']; }?>

<br/>


  <label >Name:</label>
   <?php  if(isset($user_info['name'])){echo $user_info['name']; }?>

<br/>

  <label >Contact:</label>
   <?php  if(isset($user_info['contact'])){echo $user_info['contact']; }?>

<br/>

	 <label >Pick Up Address:</label>
      <?php  if(isset($user_info['pick_up_address'])){echo $user_info['pick_up_address'];} ?>
    <br/>

    <label>Donation School Name:</label>
  <?php  if(isset($user_info['donation_school_name'])){echo $user_info['donation_school_name'];} ?>
    
    <br/>
   

<label >food Type:</label>
      <?php  if(isset($user_info['food_type'])){echo $user_info['food_type'];} ?>
    <br/>


  <label >item Name:</label>
   <?php  if(isset($user_info['item_name'])){echo $user_info['item_name'];} ?>
  <br/>
  <label >Quantity:</label>
   <?php  if(isset($user_info['quantity'])){echo $user_info['quantity'];} ?>
  <br/>
  <label >Cooked Date:</label>
   <?php  if(isset($user_info['cooked_date'])){echo $user_info['cooked_date'];} ?>
  <br/>
  <label >expire Date:</label>
   <?php  if(isset($user_info['expire_date'])){echo $user_info['expire_date'];} ?>
  <br/>
  <label >Desire Donation Date:</label>
   <?php  if(isset($user_info['desire_donation_date'])){echo $user_info['desire_donation_date'];} ?>
  <br/>
    
          
<div>
   
   <a href="post_update.php" class="btn btn-primary">Update</a>
   <a href="donar_post.php" class="btn btn-primary">Back</a>
   
   </div>
  
     
   
  </div>
     
</div>
<hr/>


