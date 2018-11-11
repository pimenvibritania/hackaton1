<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
	 <meta http-equiv="X-UA-Compatible" content="IE=edge">
	 <meta name="csrf-token" content="{{ csrf_token() }}">
	 

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>World - Blog &amp; Magazine Template</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Style CSS -->
	 <link rel="stylesheet" href="/assets/style.css">
	 <link rel="stylesheet" href="/css/app.css">

</head>

<body>
	<div id="app" >
		    <!-- Preloader Start -->
			 <div id="preloader">
				<div class="preload-content">
					 <div id="world-load"></div>
				</div>
		  </div>
		  <!-- Preloader End -->
	 
		  <!-- ***** Header Area Start ***** -->
		  <header class="header-area">
				<div class="container">
					 <div class="row">
						  <div class="col-12">
								<nav class="navbar navbar-expand-lg">
									 <!-- Logo -->
									 <a class="navbar-brand" href="index.html"><img src="img/core-img/logo.png" alt="Logo"></a>
									 <!-- Navbar Toggler -->
									 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#worldNav" aria-controls="worldNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
									 <!-- Navbar -->
									 <div class="collapse navbar-collapse" id="worldNav">
										  <ul class="navbar-nav ml-auto">
												<li class="nav-item active">
													 <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
												</li>
												
												<li class="nav-item">
													 <a class="nav-link" href="#">Forums</a>
												</li>
												<li class="nav-item">
													 <a class="nav-link" href="#">News</a>
												</li>
												<li class="nav-item">
													 <a class="nav-link" href="#">Goverment</a>
												</li>
												<li class="nav-item">
													 <a class="nav-link" href="#">Profile</a>
												</li>
												<li class="nav-item dropdown">
												 <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
													  {{ Auth::user()->name }} <span class="caret"></span>
												 </a>
	  
												 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
													  <a class="dropdown-item" href="{{ route('logout') }}"
														  onclick="event.preventDefault();
																			 document.getElementById('logout-form').submit();">
															{{ __('Logout') }}
													  </a>
	  
													  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
															@csrf
													  </form>
												 </div>
											</li>
										  </ul>
										  <!-- Search Form  -->
										  <div id="search-wrapper">
												<form action="#">
													 <input type="text" id="search" placeholder="Search something...">
													 <div id="close-icon"></div>
													 <input class="d-none" type="submit" value="">
												</form>
										  </div>
									 </div>
								</nav>
						  </div>
					 </div>
				</div>
		  </header>
		  
		  <!-- ***** Footer Area Start ***** -->
		  <footer class="footer-area">
				<div class="container">
					 <div class="row">
						  <div class="col-12 col-md-4">
								<div class="footer-single-widget">
									 <a href="#"><img src="img/core-img/logo.png" alt=""></a>
									 <div class="copywrite-text mt-30">
										  <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
	 Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
	 <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
									 </div>
								</div>
						  </div>
						  <div class="col-12 col-md-4">
								<div class="footer-single-widget">
									 <ul class="footer-menu d-flex justify-content-between">
										  <li><a href="#">Home</a></li>
										  <li><a href="#">Fashion</a></li>
										  <li><a href="#">Lifestyle</a></li>
										  <li><a href="#">Contact</a></li>
										  <li><a href="#">Gadgets</a></li>
										  <li><a href="#">Video</a></li>
									 </ul>
								</div>
						  </div>
						  <div class="col-12 col-md-4">
								<div class="footer-single-widget">
									 <h5>Subscribe</h5>
									 <form action="#" method="post">
										  <input type="email" name="email" id="email" placeholder="Enter your mail">
										  <button type="button"><i class="fa fa-arrow-right"></i></button>
									 </form>
								</div>
						  </div>
					 </div>
				</div>
		  </footer>
		  <!-- ***** Footer Area End ***** -->
		  <script src="/js/app.js"></script>

		  <!-- jQuery (Necessary for All JavaScript Plugins) -->
		  <script src="/assets/js/jquery/jquery-2.2.4.min.js"></script>
		  <!-- Popper jassets//s -->
		  <script src="/assets/js/popper.min.js"></script>
		  <!-- Bootstraassets/p/ js -->
		  <script src="/assets/js/bootstrap.min.js"></script>
		  <!-- Plugins assets//js -->
		  <script src="/assets/js/plugins.js"></script>
		  <!-- Active jassets//s -->
		  <script src="/assets/js/active.js"></script>
	 
	 
	</div>
</body>

</html>