<?php
include 'header.php';
$user_list = $user_obj->manpower_list();
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
      <img src="image/logo.png" class="img-rounded" width="100" height="50"  >

    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="about1.php">About Us</a></li>
	  <li class="active"><a href="map.html">Map</a></li>
	  
		 <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" >Information<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="index.php">user_info</a></li>
            <li><a href="category.php">posts</a></li>
          </ul>
        </li>
		<li class="active"><a href="school.php">School List</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
	  
       <li><a href="home.php"><span class="glyphicon glyphicon-log-out"></span> log out</a></li>
    </ul>
  </div>
</nav>

<div class="container " > 
    <div class="row content">
        <h3>food Post List</h3>
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
                    <th>NID</th>
                    <th>Birth Certificate Number</th>
                    <th>Address</th>
                    <th>School</th>
					<th>College</th>
                    <th>University</th>
					<th>Category</th>
                    <th>Desire Working Area</th>
					<th>Type</th>
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
                <td><?php echo $row["nid"] ?></td>
                <td><?php echo $row["birth_certificate_number"] ?></td>
                <td><?php echo $row["address"] ?></td>
                <td><?php echo $row["school"] ?></td>
				<td><?php echo $row["college"] ?></td>
                <td><?php echo $row["university"] ?></td>
				<td><?php echo $row["category"] ?></td>
                <td><?php echo $row["desire_working_area"] ?></td>
				<td><?php echo $row["type"] ?></td>
                
                
                <td class="text-right">
                    <a  href="<?php echo 'manpower_delete.php?id=' . $row["id"] ?>" class="btn btn-success">Delete</a>  
                    <a  href="<?php echo 'manpower_post_update.php?id=' . $row["id"] ?>" class="btn btn-primary">Update</a>  
                    <a href="<?php echo 'manpower_post_view.php?id=' . $row["id"] ?>" class="btn btn-info">View</a>
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


