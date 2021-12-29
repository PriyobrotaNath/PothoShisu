<!DOCTYPE html>
<html>
  <head>
  <title>PothoshisurAlo</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <style>
      /* Set the size of the div element that contains the map */
      #map {
        height: 400px;  /* The height is 400 pixels */
        width: 100%;  /* The width is the width of the web page */
       }
    </style>
  </head>
  <body>
  
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
     <img src="image/logo.png" class="img-rounded" width="100" height="50"  >
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="about2.php">About Us</a></li>
	  
	   <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" >Donate<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="donation_category1.php">Make Donation</a></li>
            <li><a href="donar_post.php">post</a></li>
          </ul>
        </li>
		 <li class="active"><a href="school1.php">School List</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
		<li class="active"><a href="profil1.php">Profile</a></li>
	  
       <li><a href="home.php"><span class="glyphicon glyphicon-log-out"></span> log out</a></li>
    </ul>
  </div>
</nav>
  

    <center><h3>SCHOOL Maps </h3></center>
    <!--The div element for the map -->
    <div id="map"></div>
    <script>
// Initialize and add the map
function initMap() {
  // The location of Uluru
  //var uluru = {lat: 23.8103, lng: 90.4125};
   var uluru = {lat: 23.7963694, lng: 90.4291534};
   var uluru1 = {lat: 23.7963694, lng: 90.4295558};
   var uluru2 = {lat: 23.7963694, lng: 90.4299584};
   var uluru3 = {lat: 23.7963694, lng: 90.4191534};
   var uluru4 = {lat: 23.7963694, lng: 90.4219558};
   var uluru5 = {lat: 23.7963694, lng: 90.4108284};
   var uluru6 = {lat: 23.7963694, lng: 90.4287634};
   var uluru7 = {lat: 23.7963694, lng: 90.4195558};
   var uluru8 = {lat: 23.7963694, lng: 90.4245584};
   var uluru9 = {lat: 23.7501769, lng: 90.4291534};
   var uluru10 = {lat: 23.7963694, lng: 90.3778958};
   var uluru11 = {lat: 23.7963694, lng: 90.4197894};
   var uluru12 = {lat: 23.7963694, lng: 90.4291534};
   var uluru13 = {lat: 23.7963694, lng: 90.4295558};
   var uluru14 = {lat: 23.7963694, lng: 90.4299584};
  // The map, centered at Uluru
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 4, center: uluru});
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: uluru, map: map});
   var marker1 = new google.maps.Marker({position: uluru1, map: map});
    var marker2 = new google.maps.Marker({position: uluru2, map: map});
	var marker3 = new google.maps.Marker({position: uluru3, map: map});
   var marker4 = new google.maps.Marker({position: uluru14, map: map});
    var marker5 = new google.maps.Marker({position: uluru5, map: map});
	var marker6 = new google.maps.Marker({position: uluru6, map: map});
   var marker7 = new google.maps.Marker({position: uluru7, map: map});
    var marker8 = new google.maps.Marker({position: uluru8, map: map});
	var marker9 = new google.maps.Marker({position: uluru9, map: map});
   var marker10 = new google.maps.Marker({position: uluru10, map: map});
    var marker11 = new google.maps.Marker({position: uluru11, map: map});
	var marker12 = new google.maps.Marker({position: uluru12, map: map});
   var marker13 = new google.maps.Marker({position: uluru13, map: map});
    var marker14 = new google.maps.Marker({position: uluru14, map: map});
}
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDn29UW8zQxaHsUheXkUs-VQx3P8icmqXc & callback=initMap">
    </script>
  </body>
</html>