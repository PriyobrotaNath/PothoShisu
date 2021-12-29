<?php


 include 'header.php';
 

 if(isset($_GET['id'])){
  $user_info=$user_obj->view_user_by_user_id($_GET['id']);
  


     
 }else{
  header('Location: index.php');
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

       
          
           
             <a  href="index.php"  class="btn btn-success mt-12 pull-right">View user List</a> 
     
 <h3>View User Info</h3>
       
    
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

	 <label >NID:</label>
      <?php  if(isset($user_info['nid'])){echo $user_info['nid'];} ?>
    <br/>

    <label>Email:</label>
  <?php  if(isset($user_info['email'])){echo $user_info['email'];} ?>
    
    <br/>
   

<label >Address:</label>
      <?php  if(isset($user_info['address'])){echo $user_info['address'];} ?>
    <br/>


  <label >Password:</label>
   <?php  if(isset($user_info['password'])){echo $user_info['password'];} ?>
  <br/>
    
          
<div>
   
   <a href="update_profile2.php" class="btn btn-primary">Update</a>
   <a href="index.php" class="btn btn-primary">Back</a>
   
   </div>
  
     
   
  </div>
     
</div>
<hr/>


