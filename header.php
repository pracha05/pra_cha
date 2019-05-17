<!DOCTYPE html>
<html lang="en">
<head>
      
        <meta charset="utf-8">
		<meta name="google-site-verification" content="j3jwTOkhg6U57i7noFD9zUEj7O5tS3hrT7sOXEVZDNg" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="icon" href="http://login.prachatech.com/assets/vendor/img/fav.png" >
        <!-- Bootstrap core CSS -->
        <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/bootstrap/css/bootstrapValidator.min.css" rel="stylesheet">
        <!-- Select2 -->
        <link href="assets/select2/css/select2.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- Iconmoon -->
        <link href="assets/iconmoon/css/iconmoon.css" rel="stylesheet">
        <!-- Animate -->
        <link href="css/animate.css" rel="stylesheet">
        <!-- Owl Carousel -->
        <link href="assets/owl-carousel/css/owl.carousel.min.css" rel="stylesheet">
        <!-- Video Popup -->
        <link href="assets/magnific-popup/css/magnific-popup.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="css/custom.css" rel="stylesheet">
    </head>
    <body>
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-139438365-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-139438365-1');
</script>
        <header class="opt5 opt6 " style="z-index:1600;"> 
           
            <nav class="navbar navbar-expand-lg navbar-light ">
                <div class="container"> <a class="navbar-brand" href="index.php"><img src="images/logo.png" class="img-fluid" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                        <ul class="navbar-nav " style="width:100%">
                         <?php $a_url=basename($_SERVER['SCRIPT_FILENAME']);

$currentPath = $_SERVER['PHP_SELF']; 
    
    // output: Array ( [dirname] => /myproject [basename] => index.php [extension] => php [filename] => index ) 
    $pathInfo = pathinfo($currentPath); 
    
    // output: localhost
    $hostName = $_SERVER['HTTP_HOST']; 
    
    // output: http://
    $protocol = strtolower(substr($_SERVER["SERVER_PROTOCOL"],0,5))=='https://'?'https://':'http://';
   



						 ?>
							 <li class="nav-item dropdown "> 
                                <a href="<?php echo $protocol.$hostName.$pathInfo['dirname']; ?>" class="nav-link <?php if($a_url=='index.php' || $a_url=='' ){ echo "active_menu"; } ?>" id="dropdown1"  aria-expanded="false">Home</a>
                            </li>	
							<li class="nav-item dropdown "> 
                                <a href="about.php" class="nav-link <?php if($a_url=='about.php'){ echo "active_menu"; } ?>"  id="dropdown1"  aria-expanded="false">About Us</a>
                            </li>
						
							    <li class="nav-item dropdown "> 
                                <a href="services.php" class="nav-link dropdown-toggle <?php if($a_url=='services.php' || $a_url=='web-designing.php' || $a_url=='web-development.php' || $a_url=='mobile-application.php' || $a_url=='ecommerce.php' || $a_url=='digital-marketing-company-in-hyderabad.php' || $a_url=='website_maintainence.php'){ echo "active_menu"; } ?>" id="dropdown1"  aria-haspopup="true" aria-expanded="false">Services</a>
                                <div class="dropdown-menu" aria-labelledby="dropdown1">
                                <div class="inner"> 
                                    <a class="dropdown-item" href="web-designing.php">Web Designing</a>
									<a class="dropdown-item" href="web-development.php">Web Development</a>
									<a class="dropdown-item" href="mobile-application.php">Mobile Applications</a>
									<a class="dropdown-item" href="ecommerce.php">eCommerce</a>
									<a class="dropdown-item" href="digital-marketing-company-in-hyderabad.php"> Digital Marketing</a>
									<a class="dropdown-item" href="website_maintainence.php">  Software Maintenance</a>
                                </div>
                                </div>
                            </li>
                           	<li class="nav-item dropdown "> 
                                <a href="portfolio.php" class="nav-link <?php if($a_url=='portfolio.php'){ echo "active_menu"; } ?>" id="dropdown1"  aria-expanded="false">Portfolio</a>
                            </li>
								
							<li class="nav-item dropdown "> 
                                <a href="career.php" class="nav-link <?php if($a_url=='career.php'){ echo "active_menu"; } ?>" id="dropdown1"  aria-expanded="false">Careers</a>
                            </li>
							<li class="nav-item dropdown"> 
                                <a href="blog.php" class="nav-link  <?php if($a_url=='blog.php'){ echo "active_menu"; } ?>" id="dropdown1"  aria-expanded="false">Blog</a>
                            </li>
							<li class="nav-item dropdown"> 
                                <a href="contact.php" class="nav-link  <?php if($a_url=='contact.php'){ echo "active_menu"; } ?>" id="dropdown1"  aria-expanded="false">Contact Us</a>
                            </li>
                        </ul>
                       
                    </div>
                </div>
            </nav>
            <!-- End Navigation --> 
        </header>
	
