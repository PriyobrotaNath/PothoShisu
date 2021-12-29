<?php
include 'header.php';
if (isset($_GET['id'])) {
    $user_info = $user_obj->view_user_by_user_id($_GET['id']);
    if (isset($_POST['update_user']) && $_GET['id'] === $_POST['id']) {
        $user_obj->update_user_info($_POST);
        
    }
} else {
    header('Location: index.php');
   // echo "not hello";
}
?>
<div class="container " > 
    <div class="row content">
        <a href="index.php"  class="button button-purple mt-12 pull-right">View User List</a> 
        <h3>Update user Info</h3>
        <?php
        if (isset($_SESSION['message'])) {
            echo "<p class='custom-alert'>" . $_SESSION['message'] . "</p>";
            unset($_SESSION['message']);
        }
        ?>

        <hr/>
        <form method="post" action="">

            <input type="hidden" name="id" value="<?php if (isset($user_info['id'])) {
            //echo $user_info['id'];
        } ?>" id=""  >
            <div class="form-group">
                <label for="student_name">Name:</label>
                <input type="text" name="name" value="<?php if (isset($user_info['name'])) {
                   //echo $user_info['name'];
        } ?>" id="student_name" class="form-control"  maxlength="50">
            </div>

            <div class="form-group">
                <label for="student_name">Contact:</label>
                <input type="number" name="contact" value="<?php if (isset($user_info['contact'])) {
                  // echo $user_info['contact'];
        } ?>" id="student_name" class="form-control"  maxlength="50">
            </div>

            <div class="form-group">
                <label for="student_name">NID:</label>
                <input type="number" name="nid" value="<?php if (isset($user_info['nid'])) {
                   //echo $user_info['nid'];
        } ?>" id="student_name" class="form-control"  maxlength="50">
            </div>
            <div class="form-group">
                <label for="email_address">Email:</label>
                <input type="email" class="form-control" value="<?php if (isset($user_info['email'])) {
           // echo $user_info['email'];
        } ?>" name="email" id="email_address"  maxlength="50">
            </div>
            <div class="form-group">
                <label for="contact">Address:</label>
                <input type="text" class="form-control" value="<?php if (isset($user_info['address'])) {
           // echo $user_info['address'];
        } ?>" name="address" id="contact"  maxlength="50">
            </div>

            <div class="form-group">
                <label for="student_name">Password:</label>
                <input type="text" name="password" value="<?php if (isset($user_info['password'])) {
                   //echo $user_info['password'];
        } ?>" id="student_name" class="form-control"  maxlength="50">
            </div>


           
            <input type="submit" class="button button-green  pull-right" name="update_user" value="Update"/>
        </form> 
    </div>
</div>
<hr/>


