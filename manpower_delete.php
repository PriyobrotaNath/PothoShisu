<?php
 include 'header.php';
 if(isset($_GET['id'])){
  $user_info=$user_obj->delete_manpower_post_info_by_id($_GET['id']);
 
     
 }else{
  header('Location: manpower_post.php');
 }
 
 ?>
