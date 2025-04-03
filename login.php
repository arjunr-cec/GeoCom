<?php
include './dbconnection.php';

?>
<?php

session_start();
if(isset($_POST['b1']))
{
    $t1=$_POST['t1'];
    $t2=$_POST['t2'];
$log=mysqli_query($dbcon,"select * from user_log where uid='$t1' and pwd='$t2'and st='1'");
if(mysqli_num_rows($log)>0)
{
$r=mysqli_fetch_row($log);
if($r[3]=="admin")
{
    $_SESSION['uid']=$t1;
    header("location:./admin/pro.php");
    
}
if($r[3]=="shop")
{
    $_SESSION['uid']=$t1;
    header("location:./shop/pro.php");
}
if($r[3]=="del")
{
    $_SESSION['uid']=$t1;
    header("location:./del/hist.php");
}

if($r[3]=="user")
{
    $_SESSION['uid']=$t1;
    header("location:./user/home.php");
}
}
else
{
    echo '<script>alert("Incorrect Username/Password")</script>'; 
}
    

}
                                    ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?php echo $title ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="tmplate/https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="tmplate/https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="tmplate/https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

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
              <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>LOGIN</span></p>
            <h1 class="mb-0 bread">LOGIN TO THE PORTAL</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
        <center><h3 style="padding: 10px;">LOGIN</h3></center>
        <div class="row">
            <div class="col-md-3"></div>
        <div class="col-md-6">
            <form method="post">                
                <div class="form-group">
                    <input type="text" required="" class="form-control" name="t1" placeholder="User ID">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="t2" placeholder="Password">
                </div>                
                <div class="form-group"><center>
                    <input type="submit" name="b1" value="LOGIN NOW" class="btn btn-success" />
                    </center>
                </div>
            </form>
        </div>
        <div class="col-md-6"></div>
        </div>
    </div>
    

    <footer class="ftco-footer ftco-section" style="display: none">
      <div class="container">
      	<div class="row">
      		
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