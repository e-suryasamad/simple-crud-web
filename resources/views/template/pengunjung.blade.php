<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
    	<!-- meta charec set -->
        <meta charset="utf-8">
		<!-- Always force latest IE rendering engine or request Chrome Frame -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<!-- Page Title -->
        <title>@yield('title')</title>		
		<!-- Meta Description -->
        <meta name="description" content="Blue One Page Creative HTML5 Template">
        <meta name="keywords" content="one page, single page, onepage, responsive, parallax, creative, business, html5, css3, css3 animation">
        <meta name="author" content="Muhammad Morshed">
		<!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- Google Font -->
		
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

		<!-- CSS
		================================================== -->
		
		<!-- Fontawesome Icon font -->
        <link rel="stylesheet" href="{{asset('user/css/font-awesome.min.css')}}">
		<!-- Twitter Bootstrap css -->
        <link rel="stylesheet" href="{{asset('user/css/bootstrap.min.css')}}">
		<!-- jquery.fancybox  -->
        <link rel="stylesheet" href="{{asset('user/css/jquery.fancybox.css')}}">
		<!-- animate -->
        <link rel="stylesheet" href="{{asset('user/css/animate.css')}}">
		<!-- Main Stylesheet -->
        <link rel="stylesheet" href="{{asset('user/css/main.css')}}">
		<!-- media-queries -->
        <link rel="stylesheet" href="{{asset('user/css/media-queries.css')}}">

        <link rel="stylesheet" href="{{ asset('user/css/AdminLTE.min.css') }}">

		<!-- Modernizer Script for old Browsers -->
        <script src="{{asset('user/js/modernizr-2.6.2.min.js')}}"></script>

    </head>
	
    <body id="body">
	
		<!-- preloader -->
		<div id="preloader">
			<img src="{{asset('user/img/preloader.gif')}}" alt="Preloader">
		</div>
		<!-- end preloader -->

        <!-- 
        Fixed Navigation
        ==================================== -->
        <header id="navigation" class="navbar-fixed-top navbar">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-bars fa-2x"></i>
                    </button>
					<!-- /responsive nav button -->
					
					<!-- logo -->
                    <a class="navbar-brand" href="#body">
						<h1 id="logo">
							<img src="{{asset('user/img/logo.png')}}" alt="Brandi">
						</h1>
					</a>
					<!-- /logo -->
                </div>

				<!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation" >
                    <ul class="nav navbar-nav">
                        <li><a href="{{url('/anggota')}}">Home</a></li>
                        <li><a href="{{url('/anggota#features')}}">Tentang</a></li>
                        <li><a href="{{url('/anggota#works')}}">Galeri</a></li>
                        <li><a href="{{url('/anggota#team')}}">Pemateri</a></li>
                        <li><a href="{{url('/anggota/artikel')}}">Artikel</a></li>
                        <li><a href="{{url('/anggota/peserta')}}">Daftar</a></li>
                        <li><a href="{{url('https://www.google.com')}}">Contact</a></li>
                    </ul>
                </nav>
				<!-- /main nav -->
				
            </div>
        </header>
        <!--
        End Fixed Navigation
        ==================================== -->
		
		
		@yield('maincontent')
		

		<footer id="footer" class="footer">
			<div class="container">
				<div class="row">
				
					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms">
						<div class="footer-single">
							<img src="{{ asset('user/img/footer-logo.png') }}" alt="">
							<p>
								<b>Lokasi Seminar: </b>HOTEL NIKKI BALI
								The Grand Hall 
								Jl. Gatot Subroto IV No.18, Dauh Puri Kaja, Denpasar Utara, Kota Denpasar, Bali 80233 
								Phone: (0361)413888 
								Email: info@hotelnikki-bali.com
							</p>
						</div>
					</div>
				
					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
						<div class="footer-single">
							<h6>Subscribe </h6>
							<form action="#" class="subscribe">
								<input type="text" name="subscribe" id="subscribe">
								<input type="submit" value="&#8594;" id="subs">
							</form>
							<p>Subcribe untuk mendapatkan info terbaru dari kami </p>
						</div>
					</div>
				
					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="600ms">
						<div class="footer-single">
							<h6>Explore</h6>
							<ul>
								<li><a href="#">Inside Us</a></li>
								<li><a href="#">Flickr</a></li>
								<li><a href="#">Google</a></li>
								<li><a href="#">Forum</a></li>
							</ul>
						</div>
					</div>
				
					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="900ms">
						<div class="footer-single">
							<h6>Support</h6>
							<ul>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">Market Blog</a></li>
								<li><a href="#">Help Center</a></li>
								<li><a href="#">Pressroom</a></li>
							</ul>
						</div>
					</div>
					
				</div>
				<div class="row">
					<div class="col-md-12">
						<p class="copyright text-center">
							Copyright © 2015 <a href="http://themefisher.com/">Themefisher</a>. All rights reserved. Designed & developed by <a href="http://themefisher.com/">Themefisher</a>
						</p>
					</div>
				</div>
			</div>
		</footer>
		
		<a href="javascript:void(0);" id="back-top"><i class="fa fa-angle-up fa-3x"></i></a>

		<!-- Essential jQuery Plugins
		================================================== -->
		<!-- Main jQuery -->
        <script src="{{ asset('user/js/jquery-1.11.1.min.js') }}"></script>
		<!-- Single Page Nav -->
        <script src="{{ asset('user/js/jquery.singlePageNav.min.js') }}"></script>
		<!-- Twitter Bootstrap -->
        <script src="{{ asset('user/js/bootstrap.min.js') }}"></script>
		<!-- jquery.fancybox.pack -->
        <script src="{{ asset('user/js/jquery.fancybox.pack.js') }}"></script>
		<!-- jquery.mixitup.min -->
        <script src="{{ asset('user/js/jquery.mixitup.min.js') }}"></script>
		<!-- jquery.parallax -->
        <script src="{{ asset('user/js/jquery.parallax-1.1.3.js') }}"></script>
		<!-- jquery.countTo -->
        <script src="{{ asset('user/js/jquery-countTo.js') }}"></script>
		<!-- jquery.appear -->
        <script src="{{ asset('user/js/jquery.appear.js') }}"></script>
		<!-- Contact form validation -->
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>
		<!-- Google Map -->
        <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
		<!-- jquery easing -->
        <script src="{{ asset('user/js/jquery.easing.min.js') }}"></script>
		<!-- jquery easing -->
        <script src="{{ asset('user/js/wow.min.js') }}"></script>
		<script>
			var wow = new WOW ({
				boxClass:     'wow',      // animated element css class (default is wow)
				animateClass: 'animated', // animation css class (default is animated)
				offset:       120,          // distance to the element when triggering the animation (default is 0)
				mobile:       false,       // trigger animations on mobile devices (default is true)
				live:         true        // act on asynchronously loaded content (default is true)
			  }
			);
			wow.init();
		</script> 
		<!-- Custom Functions -->
        <script src="{{ asset('user/js/custom.js') }}"></script>
		
		<script type="text/javascript">
			$(function(){
				/* ========================================================================= */
				/*	Contact Form
				/* ========================================================================= */
				
				$('#contact-form').validate({
					rules: {
						name: {
							required: true,
							minlength: 2
						},
						email: {
							required: true,
							email: true
						},
						message: {
							required: true
						}
					},
					messages: {
						name: {
							required: "come on, you have a name don't you?",
							minlength: "your name must consist of at least 2 characters"
						},
						email: {
							required: "no email, no message"
						},
						message: {
							required: "um...yea, you have to write something to send this form.",
							minlength: "thats all? really?"
						}
					},
					submitHandler: function(form) {
						$(form).ajaxSubmit({
							type:"POST",
							data: $(form).serialize(),
							url:"process.php",
							success: function() {
								$('#contact-form :input').attr('disabled', 'disabled');
								$('#contact-form').fadeTo( "slow", 0.15, function() {
									$(this).find(':input').attr('disabled', 'disabled');
									$(this).find('label').css('cursor','default');
									$('#success').fadeIn();
								});
							},
							error: function() {
								$('#contact-form').fadeTo( "slow", 0.15, function() {
									$('#error').fadeIn();
								});
							}
						});
					}
				});
			});
		</script>
    </body>
</html>
