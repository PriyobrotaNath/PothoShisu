<?php
include 'header.php';
$user_list = $user_obj->post_list();
?>

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

h1{
	margin-top:30px;
	text-align:center;
	margin-bottom:70px;
	color:#4CAF50;
	font-weight: bold;
}
.btn-block{
	width:250;
}
</style>
  </head>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand">Potho Shishu</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="about2.php">About Us</a></li>
	  <li class="active"><a href="map.html">Map</a></li>
	  
		  <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" >Donate<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="donation_category1.php">Make Donation</a></li>
            
          </ul>
        </li>
		<li class="active"><a href="school.php">School List</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
	<li class="active"><a href="profil.php">Profile</a></li>
	  
       <li><a href="home.php"><span class="glyphicon glyphicon-log-out"></span> log out</a></li>
    </ul>
  </div>
</nav>

<div class="container " > 
    <div class="row content">
        <h3>user List</h3>
        <?php
        if (isset($_SESSION['message'])) {
            echo "<p class='custom-alert'>" . $_SESSION['message'] . "</p>";
            unset($_SESSION['message']);
        }
        ?>
        <table class="table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Name</th>
                    <th>Contact</th>
                    <th>Pick Up Address</th>
                    <th>Donation School Name</th>
                    <th>Food Type</th>
                    <th>quantity</th>
					<th>Cooked Date</th>
                    <th>Expire Date</th>
					<th>Desire Donation Date</th>
                    <th>Delivary System</th>
                    <th class="text-right">Action</th>
                </tr>
            </thead>
            <tbody>
<?php
if ($user_list->num_rows > 0) {
  while ($row = $user_list->fetch_assoc()) {
     ?>
             <tr>
                <td><?php echo $row["id"] ?></td>
                <td><?php echo $row["name"] ?></td>
                <td><?php echo $row["contact"] ?></td>
                <td><?php echo $row["pick_up_address"] ?></td>
                <td><?php echo $row["donation_school_name"] ?></td>
                <td><?php echo $row["food_type"] ?></td>
                <td><?php echo $row["item_name"] ?></td>
				<td><?php echo $row["quantity"] ?></td>
                <td><?php echo $row["cooked_date"] ?></td>
				<td><?php echo $row["expire_date"] ?></td>
                <td><?php echo $row["desire_donation_date"] ?></td>
				<td><?php echo $row["delivary_system"] ?></td>
                
                
                <td class="text-right">
                     
                    <a href="<?php echo 'post_view1.php?id=' . $row["id"] ?>" class="btn btn-info">View</a>
                </td>
				
            </tr>
    <?php
    }
}
?>
           </tbody>
        </table>

    </div>
</div>


