<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	  <link rel="stylesheet" type="text/css" href="stylem.css">	
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand">Online Hostel</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">

    	<li class="nav-item active">
        <a class="nav-link" href="registrationm.php">Registration <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="indexm.php">Home <span class="sr-only">(current)</span></a>
      </li>

       <li class="nav-item active">
        <a class="nav-link" href="Services.php">Services  <span class="sr-only">(current)</span></a>
      </li>
      

       <li class="nav-item active">
        <a class="nav-link" href="about.php">About <span class="sr-only">(current)</span></a>
      </li>

       <li class="nav-item active">
        <a class="nav-link" href="contact.php">Contacts <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item active">
          <a class="nav-link"><img src="https://img.icons8.com/offices/30/000000/user-group-man-man.png" width='20px'/><?php echo " welcome ". $_SESSION['username'] ?></a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
      

    </ul> 
  </div>
</nav>


<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
  	  <div class="carousel-item active">
      <img src="images/rajkot.jpg" alt="Rajkot Hostel" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Rajkot Hostel</h3>
        <p>Most beautiful hostel in Rajkot</p>
      </div>   
    </div>
    <div class="carousel-item ">
      <img src="images/ahem12.jpg" alt="Ahemdabad hostel" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Ahemdabad Hostel</h3>
        <p>Most beautiful hostel in Ahemdabad</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/sura.jpg" alt="Surat Hoatel" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Surat Hostel</h3>
        <p>Most beautiful hostel in Surat</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/bhav.jpg" alt="Bhavnager Hostel" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Bhavnager Hostel</h3>
        <p>Most beautiful hostel in Bhavnager</p>
      </div>   
    </div>
   
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>



<section class="my-5">
		<div class="py-5" >
			<h2 class="text-center">About</h2>

		</div>
		<div class="container-fluid">

		<div class="row">
			<div class="col-lg-6 col-md-6 col-12">
				<img src="images/about.jpg" class="img-fluid" a>
				
			</div>

			<div class="col-lg-6 col-md-6 col-12">
				<h2 class="display-4">Hello, Welcome to online hostel website</h2>
				<a href="about.php" class="bun btn-success"> More </a>
			</div>
			
		</div>
	</div>
</section>

<section class="my-5">
		<div class="py-5" >
			<h2 class="text-center">Services</h2>

   </div>
		<div class="container-fluid">

    <div class="row">
    <div class="col-lg-4 col-md-4 col-12">

<div class="card">
            <img class="card-img-top" src="images/library.jpg" alt="Card image">
      <div class="card-body">
            <h4 class="card-title">LIBRARY :)</h4>
            <p class="card-text">Libraries are collections of books and other 
            informational materials. People come to libraries for reading, 
            study or reference. Libraries contain a variety of materials. :</p>
           <a href="#" class="btn btn-primary">Profile</a>
     </div>
</div>

          </div>

          <div class="col-lg-4 col-md-4 col-12">

<div class="card">
            <img class="card-img-top" src="images/computer.jpg" alt="Card image">
      <div class="card-body">
            <h4 class="card-title">COMPUTER LAB :)</h4>
            <p class="card-text">Computer labs are typically provided by libraries to the public,
             by academic institutions to students who attend the institution,
             or by other institutions.</p>
           <a href="#" class="btn btn-primary">Profile</a>
     </div>
</div>

          </div>

          <div class="col-lg-4 col-md-4 col-12">

<div class="card">
            <img class="card-img-top" src="images/playground.jpg" alt="Card image">
      <div class="card-body">
            <h4 class="card-title">Play Ground :)</h4>
            <p class="card-text">We have facility for indoor games such as chess, carrom,
             Table Tennis, shuttle badminton and outdoor facilities for football, hockey, 
             kabaadi, volleyball, and cricket & basket ball</p>
           <a href="#" class="btn btn-primary">Profile</a>
     </div>
</div>

          </div>
   </div>
</div>
</section>


<section class="my-5">
		<div class="py-5" >
			<h2 class="text-center">Gallary</h2>

   </div>

   <div class="container-fluid">
   	<div class="row">
   		
   		 <div class="col-lg-6 col-md-6 col-12">
   		 	<img src="images/aham1.jpg"  class="img-fluid pb-3" >

   		</div>
   		 <div class="col-lg-6 col-md-6 col-12">
   		 	<img src="images/aham.2.jpg"  class="img-fluid pb-3" >

   		</div>

   			<div class="col-lg-6 col-md-6 col-12">
   		 	<img src="images/samras1.jpg" class="img-fluid pb-3" >

   		</div> <div class="col-lg-6 col-md-6 col-12">
   		 	<img src="images/samras.2.jpg" class="img-fluid pb-3" >

   	
   	</div>
   		 <div class="col-lg-6 col-md-6 col-12">
   		 	<img src="images/surat.1.jpg" class="img-fluid pb-3" >

   		</div>
   		 <div class="col-lg-6 col-md-6 col-12">
   		 	<img src="images/surat.2.jpg" class="img-fluid pb-3" >

   		</div> 
   		 <div class="col-lg-6 col-md-6 col-12">
   		 	<img src="images/rajkot2.jpg" class="img-fluid pb-3" >

   		</div>
   		 <div class="col-lg-6 col-md-6 col-12" >
   		 	<img src="images/rajkot1.jpg" width="750px" class="img-fluid pb-3" >

   		</div>


  	</div>


    <footer class="footer-area">
        <div class="footer-wave-box">
            <div class="footer-wave footer-animation"></div>
        </div>
        <div class="main">
            <div class="footer">
                <div class="single-footer">
                    <h4>about us</h4>
                    <p>Hostel is a form of low-cost, short-term shared sociable lodging where guests can rent a bed,
		       usually a bunk bed in a dormitory, with shared use of a lounge and sometimes a kitchen.and have private
               or shared bathrooms. Private rooms may also be available,but the property must offer dormitories to be 
               considered a hostel</p>
                    
                </div>
                <div class="single-footer">
                    <h4>main menu</h4>
                    <ul>
                        <li><a href="index.html"><i class="fas fa-chevron-right"></i> home</a></li>
                        <li><a href="about.php"><i class="fas fa-chevron-right"></i> about</a></li>
                        <li><a href="services.php"><i class="fas fa-chevron-right"></i> services</a></li>
                        <li><a href="contact.php"><i class="fas fa-chevron-right"></i> contact</a></li>
                    </ul>
                </div>
                <div class="single-footer">
                    <h4>quick links</h4>
                    <ul>
                        <li><a href=""><i class="fas fa-chevron-right"></i> privacy policy</a></li>
                        <li><a href=""><i class="fas fa-chevron-right"></i> terms & conditions</a></li>
                        <li><a href=""><i class="fas fa-chevron-right"></i> disclaimer</a></li>
                    </ul>
                </div>
                <div class="single-footer">
                    <h4>contact us</h4>
                    <ul>
                        <li><a href=""><i class="fas fa-map-marker-alt"></i> Surat in Gujrat</a></li>
                        <li><a href=""><i class="fas fa-mobile-alt"></i> +91 0123 456 789</a></li>
                        <li><a href=""><i class="far fa-envelope"></i> info@demo.com</a></li>
                        <li><a href=""><i class="fas fa-globe-europe"></i> www.demo.com</a></li>
                    </ul>
                </div>
            </div>
            <div class="copy">
                <p>&copy; 2021 all rights reserved</p>
            </div>
        </div>
    </footer>   







	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
</body>
</html>