<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?php echo isset($title)?$title:"Samson and Associates ltd"?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url('assets/images/favicon.png')?>">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" href="<?php echo base_url('assets/css/animate.css')?>">
    
    <link rel="stylesheet" href="<?php echo base_url('assets/css/owl.carousel.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/owl.theme.default.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/magnific-popup.css')?>">

    <link rel="stylesheet" href="<?php echo base_url('assets/css/flaticon.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css')?>">
	<style>

div.dropdown-multicol{
  width: 30em;
}
div.dropdown-row>a.dropdown-item{
  display:inline-block;
  width: 32%;
}

/* Columns */
div.dropdown-multicol2{
  width: 30em;
}
div.dropdown-multicol2>div.dropdown-col{
  display:inline-block;
  width: 32%;
}


	</style>
  </head>
  <body>

    <div class="wrap">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="bg-wrap">
							<div class="row">
								<div class="col-md-6 d-flex align-items-left">
									<p class="mb-0 phone pl-md-2">
										<a href="#" class="mr-2"><span class="fa fa-phone mr-1"></span> +254 707 850259</a> 
										<a href="#"><span class="fa fa-paper-plane mr-1"></span> info@samsonandassociates.co.ke</a>
									</p>
								</div>
								<div class="col-md-6 d-flex justify-content-md-end">
									<div class="social-media">
						    		<p class="mb-0 d-flex">
						    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
						    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
						    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
						    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
						    		</p>
					        </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">

	    	<a class="navbar-brand col-md-3 "  href="">            <img src="<?php echo base_url('assets/images/logo.jpg')?>"  alt="Samson and associates logo"  width="100%"></a>
	    	 <form action="#" class="searchform order-sm-start order-lg-last col-md-2">
          <div class="form-group d-flex">
            <input type="text" class="form-control pl-3" placeholder="Search">
            <button type="submit" placeholder="" class="form-control search"><span class="fa fa-search"></span></button>
          </div>
        </form> 
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="fa fa-bars"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse col-md-7 " id="ftco-nav">
	        <ul class="navbar-nav m-auto">
	        	<li class="nav-item <?php  if(isset($active) && $active=="home") echo "active"?>"><a href="<?php echo base_url('welcome')?>" class="nav-link">Home</a></li>
	        	<li class="nav-item <?php if(isset($active) && $active=="about") echo "active"?>"><a href="<?php echo base_url('about')?>" class="nav-link">About</a></li>
				 <!--startdropdwn -->
	        	
	         
			  <li class="nav-item dropdown <?php if(isset($active) && $active=="services") echo  "active"?>"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			  <a href="<?php echo base_url('services')?>" class="nav-link"> Services</a>
				    <div class="dropdown-menu dropdown-multicol" aria-labelledby="dropdownMenuButton">
						<div class="dropdown-row">
							<a class="dropdown-item" href="<?php echo base_url('services')?>">Introduction</a>
							<a class="dropdown-item" href="#">Systems Audit</a>
							<a class="dropdown-item" href="#">Compliance Audit</a>
						</div>
						<div class="dropdown-row">
							<a class="dropdown-item" href="#">Book keeping</a>
							<a class="dropdown-item" href="#">Tax compliance</a>
							<a class="dropdown-item" href="#">Advisory</a>
						</div>
						<div class="dropdown-row">
							<a class="dropdown-item" href="#">support services</a>
							<a class="dropdown-item" href="#">Audit and assurance</a>
							
						</div>
					</div>
			  </li>
			  <!--end drop -->
			  <!--  <li class="nav-item <?php if(isset($active) && $active=="cases") echo "active"?>"><a href="<?php echo base_url('cases')?>" class="nav-link">Case Study</a></li>
--> <li class="nav-item <?php if(isset($active) && $active=="blog") echo "active"?>"><a href="<?php echo base_url('blog')?>" class="nav-link">Blog</a></li>
<li class="nav-item  <?php if(isset($active) && $active=="contact") echo "active"?>"><a href="<?php echo base_url('contact')?>" class="nav-link">Contact</a>
</li>




	</ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->