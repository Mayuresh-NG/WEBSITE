
<!doctype html>
<html lang="en">
  <head>
  	<title>angelarchitect.com</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">  
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Play&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Karla&family=Play&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/contact.css">

  <link rel="apple-touch-icon" sizes="180x180" href="ico/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="ico/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="ico/favicon-16x16.png"> 
  <link rel="manifest" href="/site.webmanifest">
	</head>

	<body onload="myFunction()">
    <div class="loader" id="spin">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>
	<section>
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar"> 
	    <div class="container-fluid"><img src="ico\favicon.ico" style="padding:2px;">
	    	<a class="navbar-brand" style="font-family:'Josefin Sans', sans-serif;   font-size:23px;" href="index.php">JAIN ARCHITECTS<span style="font-family:sans-serif; font-size:15px; color:#DF2027; text-align:center; font-weight:300; ">Architecture | Interior | Planning</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="fa fa-bars"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto" >
	        	<li class="nav-item"><a href="index.php" class="nav-link" style="font-family:sans-serif; font-size:11px; font-weight: bold;">HOME</a></li>
	        	<li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-family:sans-serif; font-size:11px; font-weight: bold;">SERVICES</a>
               <div class="dropdown-menu" aria-labelledby="dropdown04">
                <a class="dropdown-item" href="extra.php" >Planning according to Vastu Shashtra</a>
                <a class="dropdown-item" >Blueprint Plan</a>
                <a class="dropdown-item" href="elevation.php" >3D Elevation</a>
                <a class="dropdown-item" href="interior.php">Interior Designing</a>
                <a class="dropdown-item" >Estimate Valuation and Bill of Quantity</a>
                <a class="dropdown-item" >Site Visit</a>
                <a class="dropdown-item" >Construction Material</a>
                <a class="dropdown-item" >Tiles and Marble work</a>
                <a class="dropdown-item" >Registery Plan</a>
                <a class="dropdown-item" href="extra.php" >Floor plan</a>
                <a class="dropdown-item" href="extra.php" >Electrical Drawing</a>
                <a class="dropdown-item" href="extra.php" >Plumbing and Drainage</a>
                <a class="dropdown-item" href="extra.php" >Structural Drawing</a>
                <a class="dropdown-item" href="extra.php" >Working Drawing</a>
                <a class="dropdown-item" >Projects approved by Vikas Pradhikaran</a>
              </div>
            </li>
	        	<li class="nav-item"><a href="portfolio.php" class="nav-link" style="font-family:sans-serif; font-size:11px; font-weight: bold;">PORTFOLIO</a></li>
	          <li class="nav-item active"><a href="contact.php" class="nav-link" style="font-family:sans-serif; font-size:11px; font-weight: bold;">CONTACT</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
	</section>

<section id="contact">
  <h1 class="section-header">Contact</h1>
  <div class="contact-wrapper">

    <form action="userinfo.php" method="post"  class="form-horizontal" >
       
      <div class="form-group">
        <div class="col-sm-12">
          <input type="text" class="form-control" id="name" placeholder="NAME" name="name" value="" required>
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-12">
          <input type="email" class="form-control" id="email" placeholder="EMAIL" name="email" >
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-12">
          <input type="mobile" class="form-control" id="phone" placeholder="PHONE" name="phone" >
        </div>
      </div>

      <textarea class="form-control" rows="10" placeholder="ENQUIRY" name="message"></textarea>
      
      <button class="btn btn-primary send-button" id="submit" type="submit" value="SEND">
        <div class="alt-send-button">
          <i class="fa fa-paper-plane"></i><span class="send-text">SUBMIT</span>
        </div>
      
      </button>
      
    </form>

      <div class="direct-contact-container">

        <ul class="contact-list">
          <li class="list-item"><i class="fa fa-map-marker fa-2x"><span class="contact-text place">----------------------------------------------------------------------------</span></i></li>
          
          <li class="list-item"><i class="fa fa-phone fa-2x"><span class="contact-text phone"><a href="tel:7906390628" title="Give me a call">+91 99999999</a></span></i></li>
          
          <li class="list-item"><i class="fa fa-envelope fa-2x"><span class="contact-text gmail"><a href="mailto:jain.anjali911@gmail.com" title="Send me an email">aj1@gmail.com</a></span></i></li>
        </ul>

        <hr>
        <ul class="social-media-list">
          <li><a href="https://wa.me/+918999145269" target="_blank" class="contact-icon">
            <i class="fa fa-whatsapp" aria-hidden="true"></i></a>
          </li> whatsapp me             
        </ul>
        <hr>
  </div>
</section>  

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
  <script>
  	document.querySelector('#contact-form').addEventListener('submit', (e) => {
    e.preventDefault();
    e.target.elements.name.value = '';
    e.target.elements.email.value = '';
    e.target.elements.message.value = '';
  });

  </script>

	</body>
</html>


