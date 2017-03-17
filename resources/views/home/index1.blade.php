<!DOCTYPE html>
<html>
	<head>
		<title>Endorphin</title>
		<meta charset="UTF-8">
		<meta property="og:url" content="http://endorphin.az/" />
		<meta property="og:type" content="profile" />
		<meta property="og:title" content="Endorphin Website" />
		<meta property="og:description" content="Welcome to Endorphin Website" />
		<meta property="og:image" content={{ url("/images/LOGO.png") }} />
		<meta name="keywords" content="Endorphin EndorphinBaku Digital AGENCY" />
		<meta name="description" content="Endorphin Website" />			
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="../fancy/jquery.fancybox.css">
		<link href="../css/owl.carousel.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="../css/animate.css">
		<link rel="stylesheet" type="text/css" href="../css/style.css">
	</head>
	<body>
		<div id="preloader">
			<div id="status"></div>
		</div>
		<nav class = "navbar navbar-default container-fluid navmenuen navbar-fixed-top" role = "navigation">
			<div class="container">
				<div class = "navbar-header col-md-2">
					<button type = "button" class = "navbar-toggle"
					data-toggle = "collapse" data-target = "#example-navbar-collapse">
					<span class = "sr-only"></span>
					<span class = "icon-bar"></span>
					<span class = "icon-bar"></span>
					<span class = "icon-bar"></span>
					</button>
					<img src={{ url("../images/logo1.png") }} class="scroll logo pull-right" data-section='header' >
				</div>
				<div class = "collapse navbar-collapse uldiv"  id = "example-navbar-collapse">
					<ul class = "nav navbar-nav navul">
						<li class="navli scroll swing_nav" data-section='header' ><span class="s header">ABOUT</span></li>
						<li class="navli scroll swing_nav" data-section='services' ><span class="s services">SERVICES</span></li>
						<li class="navli scroll swing_nav" data-section='portfolio' ><span class="s portfolio">PORTFOLIO</span></li>
						<li class="navli scroll swing_nav" data-section='staff' ><span class="s staff">STAFF</span></li>
						<li class="navli scroll swing_nav" data-section='clients' ><span class="s clients">CLIENTS</span></li>
						<li class="navli scroll swing_nav" data-section='contact' ><span class="s contact">CONTACT</span></li>
					</ul>
				</div>
			</div>
		</nav>
		<section id="header" data-color="0" class="comSec" data-offset>
			<div class="container mainheader module">
				<div class="row">
					<div class="header-a">
						<span class="module" >WE ARE A CREATIVE, DIGITAL & <br> MARKETING AGENCY BASED IN<br> BAKU, AZERBAIJAN</span>
					</div>
					<div class="header-b">
						<span class="module ">As the Social Media Networks, where everyone is connected with each other grow, marketing <br> becomes highly differentiated in the Digital Age. Endorphin is the expert of marketing on <br> Social Networks and  is in charge of the details.<br> Using  contemporary  technology and digital tools, Endorphin shapes your marketing strategy, <br>brings you exact results, and helps you reaching your marketing goals.</span>
					</div>
					<div class="headericon">
						<ul>
							<li class="module"><a href={{ url("https://www.facebook.com/EndorphinBaku/?ref=br_rs") }} target="_blank"><img src={{ url("../images/FACEBOOK.png") }} class="facebook"></a></li>
							<li class="module"><a href={{ url("https://www.instagram.com/endorphinbaku/") }} target="_blank"><img src={{ url("../images/INSTAGRAM.png") }} class="instagram"></a></li>
							<li class="module"><a href={{ url("https://twitter.com/endorphinbaku") }} target="_blank"><img src={{ url("../images/TWITTER.png") }} class="twitter"></a></li>
							<li class="module"><a href={{ url("https://www.youtube.com/channel/UCXLyfuvpSN4BM4EY7ZmyvHQ") }}><img src={{ url("../images/YOUTUBE.png") }} class="youtube" target="_blank"></a></li>
							<li class="module"><a href={{ url("https://www.linkedin.com/company/endorphin-baku") }}><img src="../images/linkedin.png" class="linkedin" target="_blank"></a></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<section id="services" data-color="1"  class="comSec" data-offset>
			<div class="clearfix"></div>
			<div class="container mainservices">
				<div class="row">
					<div class="module">
						<span class="heade_text">SERVICES</span>
					</div>
					<div class="col-md-4 servipadd">
						<div class="module ">
							<img src="../images/creative icon.png" alt="" class="service_icons">
						</div>
						<div class="module">
							<span>Creative</span>
						</div>
						<div class="toggle module">
							<div class="clicktogle1 fulltoggle">
								<div></div>
								<ul class="toggleCreate">
									@foreach($creative as $key)
										<li>{{ $key->text }}</li>
									@endforeach		
								</ul>
								<div></div>
							</div>
						</div>
					</div>
					<div class="col-md-4 servipadd">
						<div class="module">
							<img src="../images/digital icon.png" alt="" class="service_icons">
						</div>
						<div class="module">
							<span>Digital</span>
						</div>
						<div class="toggle module">
							<div class="clicktogle2 fulltoggle">
								<div></div>
								<ul class="toggleDig">
									@foreach($digital as $key)
										<li>{{ $key->text}}</li>
									@endforeach	
								</ul>
								<div></div>
							</div>
						</div>
					</div>
					<div class="col-md-4 servipadd">
						<div class="module">
							<img src="../images/marketing icon.png" alt="" class="service_icons">
						</div>
						<div class="module">
							<span>Marketing</span>
						</div>
						<div class="toggle module">
							<div class="clicktogle3 fulltoggle">
								<div></div>
								<ul class="toggleMark">
									@foreach($marketing as $key)
										<li>{{ $key->text}}</li>
									@endforeach	
								</ul>
								<div></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="portfolio"  data-color="0" class="comSec" data-offset>
			<div class="clearfix"></div>
			<div class=" mainportfolio">
				<div class="module portfolio-header">
					<span>PORTFOLIO</span>
				</div>
				<div class="port-slider-main" >
					<div id="owl-portfolio" class="owl-carousel module">
						@foreach($portfolio as $key)
							<div class="item">
								<a class="fancybox" rel="group" href= {{ url("../images/" . $key->photo) }} >
									<img src={{ url("../images/" . $key->photo) }} class="img-responsive">
									<div class="port-absolute">
										<h3>{{$key->title}}</h3>
									</div>
								</a>
							</div>
						@endforeach									
					</div>
					<div class="prev module"><img src={{ url("../images/prev-port.png" ) }} alt=""></div>
					<div class="next module"><img src={{ url("../images/next-port.png") }} alt=""></div>
				</div>
			</div>
		</section>
		<section id="staff" data-color="1"  class="comSec" data-offset>
			<div class="clearfix"></div>
			<div class="container mainstaff">
				<div class="row">
					<div class="module staff-header">
						<span class="heade_text">STAFF</span>
					</div>
					<div class="clearfix"></div>
					<div class="staff-content">
						@foreach($staff as $key)
							<div class="staffcon">
								<div class="img module">
									<img src={{ url("../images/" . $key->photo) }}>
								</div>
								<div class="stafftext module">
									<span>{{$key->name.' '.$key->surname}}</span><br>
									<span>{{$key->position}}</span>
								</div>
							</div>
						@endforeach							
					</div>
				</div>
				<div class="staff-slider-padding">
					<div id="staff-slider-mine" class="owl-carousel module">
						@foreach($staff as $key)
							<div>
								<div class="staff-slide-image">
									<img src="../images/{{$key->photo}}" alt="">
								</div>
								<div class="staff-slide-text">
									<p>{{$key->name.' '.$key->surname}}</p>
								</div>
							</div>
						@endforeach
					</div>
				</div>
			</div>
		</section>
		<section id="clients" data-color="0"  class="comSec" data-offset>
			<div class="clearfix"></div>
			<div class="container mainclients ">
				<div class="row">
					<div class="module">
						<span>
							CLIENTS
						</span>
					</div>
					<div class="clients-list">
						<ul>
							@foreach($client as $key)
								<li class="module"><a href="{{ $key->link }}" target="_blank"><img src="../images/{{$key->photo}}"></li>
							@endforeach							
						</ul>
						<div class="clearfix">
						</div>
					</div>
					<div>
					</div>
					<div id="clients-slider-mine" class="owl-carousel module">
						@foreach($client as $key)
								<div class="item">
									<a href="{{ $key->link }}"><img src="../images/{{$key->photo}}" alt=""></a>
								</div>
						@endforeach					
					</div>
				</div>
			</div>
		</section>
		<section id="contact" data-color="1"  class="comSec" data-offset>
			<div class="clearfix"></div>
			<div class="container maincontact ">
				<div class="row">
					<div class="contactheader module">
						<span class="heade_text">
							CONTACT
						</span>
					</div>
					<div class="col-md-5">
						<div class="contact-left">
							<div class="module">
								<div class="contactcontent">
									<a href={{ url("mailto:info@endorphin.az") }} title=""><img src="../images/email.png" class="email"></a>
									<a href={{ url("mailto:info@endorphin.az") }} title=""><p>info@endorphin.az</p></a>
								</div>
							</div>
							<div class="module">
								<div class="contactcontent-a">
									<a href={{ url("https://www.google.com/maps/place/Endorphin/@40.385134,49.8258933,17z/data=!4m5!3m4!1s0x0:0xb1b4ae08a0541630!8m2!3d40.385134!4d49.828082?hl=ru-RU") }} title=""><img src="../images/location.png" class="location"></a>
									<a class="map-link" href={{ url("https://www.google.com/maps/place/Endorphin/@40.385134,49.8258933,17z/data=!4m5!3m4!1s0x0:0xb1b4ae08a0541630!8m2!3d40.385134!4d49.828082?hl=ru-RU") }} title=""><p >Globus Center floor 11 <br>Ofis N 11.05</p></a>
								</div>
							</div>
							<div class="module">
								<div class="contactcontent">
									<a href="call:+994 12 408 79 31" title=""><img src={{ url("../images/telephone.png") }} class="telephone"></a>
									<a href="call:+994 12 408 79 31" title=""><p class="phone">(012) 408 79 31</p></a>
								</div>
							</div>
						</div>
						
					</div>
					
					<div class="col-md-7">
						<div class="main-form">
							<form action={{ url("/email") }} method="post" accept-charset="utf-8">
								{!! csrf_field() !!}
								<input type="email" name="email" placeholder="Email" class="input module flip_flap">
								<input type="Text" name="subject" placeholder="Subject" class="input module flip_flap">
								<textarea name="message" class="textarea module flip_flap" placeholder="Message"></textarea>
								<button type="submit" class="button module">Send</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		<div class="up">
			<i class="fa fa-chevron-left" aria-hidden="true"></i>
		</div>
	</body>
	<script src ={{ url("../js/jquery.js") }}></script>
	<script src ={{ url("../js/bootstrap.js") }}></script>
	<script src={{ url("../fancy/jquery.fancybox.js") }}></script>
	<script src={{ url("../js/owl.carousel.js") }}></script>
	<script src={{ url("../js/jquery.nicescroll.js") }}></script>
	<script src={{ url("../js/main.js") }}></script>
</html>