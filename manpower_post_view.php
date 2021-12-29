<?php


 include 'header.php';
 

 if(isset($_GET['id'])){
  $user_info=$user_obj->view_manpower_post_by_post_id($_GET['id']);
  


     
 }else{
  header('Location: manpower_post.php');
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

       
          
           
             <a  href="manpower_post.php"  class="btn btn-success mt-12 pull-right">View Manpower post List</a> 
     
 <h3>View Manpower Post</h3>
       
    
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

    <label>Birth Certificate Number:</label>
  <?php  if(isset($user_info['birth_certificate_number'])){echo $user_info['birth_certificate_number'];} ?>
    
    <br/>
   

<label >Address:</label>
      <?php  if(isset($user_info['address'])){echo $user_info['address'];} ?>
    <br/>


  <label >School:</label>
   <?php  if(isset($user_info['school'])){echo $user_info['school'];} ?>
  <br/>
  <label >College:</label>
   <?php  if(isset($user_info['college'])){echo $user_info['college'];} ?>
  <br/>
  <label >University:</label>
   <?php  if(isset($user_info['university'])){echo $user_info['university'];} ?>
  <br/>
  <label >Category:</label>
   <?php  if(isset($user_info['category'])){echo $user_info['category'];} ?>
  <br/>
  <label >Desire Working Area:</label>
   <?php  if(isset($user_info['desire_working_area'])){echo $user_info['desire_working_area'];} ?>
  <br/>
      <label >type:</label>
   <?php  if(isset($user_info['type'])){echo $user_info['type'];} ?>
  <br/>
    
          
<div>
   
   <a href="manpower_post_update.php" class="btn btn-primary">Update</a>
   <a href="manpower_post.php" class="btn btn-primary">Back</a>
   
   </div>
  
     
   
  </div>
     
</div>
<hr/>


