<?php
include './dbconnection.php';
?>
<?php

                 
                    if(isset($_POST['sub1']))
 {
    
    $t1=$_POST['t1'];
    
    $t2=$_POST['t2'];
    $t3=$_POST['t3'];
    $t4=$_POST['t4'];
    $t5=$_POST['t5'];
    
    $t6=$_POST['t6'];
    $t7=$_POST['t7'];
     $ta=$_POST['ta'];
     
    
    $up=$_FILES['myFile']['name'];
    $count=rand('1000000','9999999');
    $nfn=$count."".substr($up,strrpos($up,"."));
   
    if(move_uploaded_file($_FILES['myFile']['tmp_name'],getcwd()."//img3//$nfn"))
    {
         
    $ins=mysqli_query($dbcon,"insert into user_data values('','$t1','$t2','$t3','$t4','$t5','$t6','$t7','$nfn','$ta')");
    
    if($ins>0)
    {
      $ins1=mysqli_query($dbcon,"insert into user_log values('','$t2','$t3','user','1')");
        if($ins1>0)
        {
                header("location:userreg.php?suss=1");
            }
    }
        }
 }
 
        ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?php echo $title ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
   

    <link rel="stylesheet" href="tmplate/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="tmplate/css/animate.css">
    
    <link rel="stylesheet" href="tmplate/css/owl.carousel.min.css">
    <link rel="stylesheet" href="tmplate/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="tmplate/css/magnific-popup.css">

    <link rel="stylesheet" href="tmplate/css/aos.css">

    <link rel="stylesheet" href="tmplate/css/ionicons.min.css">

    <link rel="stylesheet" href="tmplate/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="tmplate/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="tmplate/css/flaticon.css">
    <link rel="stylesheet" href="tmplate/css/icomoon.css">
    <link rel="stylesheet" href="tmplate/css/style.css">
  </head>
  <body class="goto-here">
		<div class="py-1 bg-primary">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
		    			<div class="col-md pr-4 d-flex topper align-items-center">
                                            <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-map-marker"></span></div>
						    <span class="text">Choose your Location</span>
					    	</div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-heart"></span></div>
						    <span class="text">Feel the Real time Shopping</span>
					    </div>
					    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">                                               
						    <span class="text">Find the nearest shops...</span>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
                <a class="navbar-brand" href="index.php"><?php echo $h1 ?></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
                  <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
	          
	          <li class="nav-item"><a href="userreg.php" class="nav-link">New User</a></li>
	          <li class="nav-item"><a href="shopreg.php" class="nav-link">New Shop</a></li>
                   <li class="nav-item"><a href="card.php" class="nav-link">Credit Card Registration</a></li>
                  <li class="nav-item"><a href="login.php" class="nav-link">Login</a></li>
	          

	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

    <div class="hero-wrap hero-bread" style="background-image: url('tmplate/images/bg_1.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
              <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>New User</span></p>
            <h1 class="mb-0 bread">NEW USER REGISTRATION</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
        <center><h3 style="padding: 10px;">USER REGISTRATION</h3></center>
        <div class="row">
        <div class="col-md-6">
            <form method="post"enctype="multipart/form-data">
                <div class="form-group">
                    <input type="text" required="" class="form-control" name="t1" placeholder="Your Name">
                </div>
                <div class="form-group">
                    <input type="text" required="" class="form-control" name="t2" placeholder="Email"onkeyup="vem(this.value)" /><span id="em"></span>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="t3" placeholder="Password">
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="t4" placeholder="Address"></textarea>
                </div>
                <div class="form-group">
                    <input type="text" required="" class="form-control" name="t5" placeholder="Contact Number"onkeyup="chkc(this.value)" /><span id="o3"></span>
                </div>
                
                <div class="form-group">
                    <input type="number" required="" class="form-control" name="ta" placeholder="MONTHLY Expense Estimate">
                </div>
                <div class="form-group">
                  <b>Upload Your Photo</b>
                    <input type="file" class="form-control" name="myFile" placeholder="photo">
                </div>
                
                <div class="form-group">
                    <input type="text" required="" name="t6"id="lat" class="form-control"value="">
                </div>
                <div class="form-group">
                    <input type="text" required="" name="t7" id="lng"class="form-control"value="">
                </div>
                <div class="form-group"><center>
                    <input type="submit" name="sub1" value="REGISTER NOW" class="btn btn-success" />
                    </center>
                </div>
            </form>
        </div>
            <div class="col-md-6">
            <center><p><b>Double click on the map to get more accuracy</b></p></center>
            <div id="map" style="width: 100%; height: 500px"></div>
            <script>
      // This example adds a search box to a map, using the Google Place Autocomplete
      // feature. People can enter geographical searches. The search box will return a
      // pick list containing a mix of places and predicted search terms.

      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      function initAutocomplete() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 9.152967, lng: 76.735611},
          zoom: 18,
          mapTypeId: 'roadmap'
        });
        google.maps.event.addListener(map, 'dblclick', function (e) {
                //alert("Latitude: " + e.latLng.lat() + "\r\nLongitude: " + e.latLng.lng());
                document.getElementById("lat").value=e.latLng.lat();
                document.getElementById("lng").value=e.latLng.lng();
            });
        // Create the search box and link it to the UI element.
        var input = document.getElementById('pac-input');
        var searchBox = new google.maps.places.SearchBox(input);
        //map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

        // Bias the SearchBox results towards current map's viewport.
        map.addListener('bounds_changed', function() {
          searchBox.setBounds(map.getBounds());
        });
        
        var markers = [];
        // Listen for the event fired when the user selects a prediction and retrieve
        // more details for that place.
        searchBox.addListener('places_changed', function() {
          var places = searchBox.getPlaces();

          if (places.length == 0) {
            return;
          }

          // Clear out the old markers.
          markers.forEach(function(marker) {
            marker.setMap(null);
          });
          markers = [];

          // For each place, get the icon, name and location.
          var bounds = new google.maps.LatLngBounds();
          places.forEach(function(place) {
            if (!place.geometry) {
              console.log("Returned place contains no geometry");
              return;
            }
            var icon = {
              url: place.icon,
              size: new google.maps.Size(71, 71),
              origin: new google.maps.Point(0, 0),
              anchor: new google.maps.Point(17, 34),
              scaledSize: new google.maps.Size(25, 25)
            };

            // Create a marker for each place.
            markers.push(new google.maps.Marker({
              map: map,
              icon: icon,
              title: place.name,
              position: place.geometry.location
            }));

            if (place.geometry.viewport) {
              // Only geocodes have viewport.
              bounds.union(place.geometry.viewport);
            } else {
              bounds.extend(place.geometry.location);
            }
          });
          map.fitBounds(bounds);
        });
      }

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCzXv05Tg7stti5DyuH1_FmXPWKFS9EkHE&libraries=places&callback=initAutocomplete"
         async defer></script>
            </div>
        </div>
    </div>
    

    <footer class="ftco-footer ftco-section" style="display: none">
      <div class="container">
      	<div class="row">
      		<div class="mouse">
						<a href="#" class="mouse-icon">
							<div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
						</a>
					</div>
      	</div>
        <div class="row mb-5">
          <div class="col-md">
            
          </div>
          <div class="col-md">
            
          </div>
          <div class="col-md-4">
             
          </div>
          <div class="col-md">
            
          </div>
        </div>
        <div class="row">
          <?php            include 'footer.php'; ?>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="tmplate/js/jquery.min.js"></script>
  <script src="tmplate/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="tmplate/js/popper.min.js"></script>
  <script src="tmplate/js/bootstrap.min.js"></script>
  <script src="tmplate/js/jquery.easing.1.3.js"></script>
  <script src="tmplate/js/jquery.waypoints.min.js"></script>
  <script src="tmplate/js/jquery.stellar.min.js"></script>
  <script src="tmplate/js/owl.carousel.min.js"></script>
  <script src="tmplate/js/jquery.magnific-popup.min.js"></script>
  <script src="tmplate/js/aos.js"></script>
  <script src="tmplate/js/jquery.animateNumber.min.js"></script>
  <script src="tmplate/js/bootstrap-datepicker.js"></script>
  <script src="tmplate/js/scrollax.min.js"></script>
  <script src="tmplate/js/google-map.js"></script>
  <script src="tmplate/js/main.js"></script>
    
  </body>
</html>