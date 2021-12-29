<?php
include 'header.php';
if (isset($_POST['create_user'])) {
    $user_obj->create_user_info($_POST);
}
?>
<div class="container"> 
    <div class="row content">
        <a  href="index.php"  class="button button-purple mt-12 pull-right">View User List</a> 
        <h3>Create New User Info</h3>
        <hr/>
        <form method="post" action="">
            <div class="form-group">
                <label for="student_name">Id:</label>
                <input type="text" name="U_Id" id="U_Id" class="form-control" required maxlength="50">
            </div>

            <div class="form-group">
                <label for="student_name">Phone:</label>
                <input type="text" name="Phone" id="Phone" class="form-control" required maxlength="50">
            </div>

            <div class="form-group">
                <label for="student_name">NID No:</label>
                <input type="text" name="U_NID" id="U_NID" class="form-control" required maxlength="50">
            </div>


            <div class="form-group">
                <label for="email_address">Name:</label>
                <input type="text" class="form-control" name="Name" id="Name" required maxlength="50">
            </div>
            <div class="form-group">
                <label for="contact">Password:</label>
                <input type="Password" class="form-control" name="pass" id="pass"  maxlength="50">
            </div>

            <div class="form-group">
                <label for="contact">Address:</label>
                <input type="text" class="form-control" name="Address" id="Address"  maxlength="50">
            </div>

            <div class="form-group">
                <label for="contact">Rating:</label>
                <input type="number" class="form-control" name="Rating" id="Rating"  maxlength="50">
            </div>
            
            <input type="submit" class="button button-green  pull-right" name="create_user" value="Submit"/>
        </form> 
    </div>
</div>
<hr/>


