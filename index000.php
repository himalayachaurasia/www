		
<!DOCTYPE html>
<?php 
	if(isset($_GET["success"])){
		echo "<script type='text/javascript'>alert('Your feedback has been submitted successfully. We will contact you very soon')</script>";
	}
?>

<html>
<head>
	<title> Vishwa Green Realtors || Business Commercial Space in Nerul Navi mumbai, Navi Mumbai Builders and Developer</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta name="Description" content=" First Green certified  Commercial Space Plans S at Nerul , Commercial Real Estate Agents, Commercial Property Consultants, Office Space Plan S Modern Amenities , Close to Navi Mumbai Up Coming Airport , Close to Navi Mumbai Up Coming Airport , Modern amenities Nerul .  Planned and state of the art construction Plans S Nerul  and futuristic location makes these projects viable in terms of affordable and day to day connectivity, Close to JNPT Port , Vishwa Green Realtors , Navi Mumbai , Dronagiri , Kharghar Residential project  ">
	<meta name="Keywords" content=" Vishwa Green Realtors Plan S Commercial Space in Nerul Vishwa Green Realtors , First Green certified  Commercial Space Plans S at Nerul , Commercial Real Estate Agents, Commercial Property Consultants, Plan S Modern Amenities , Close to Navi Mumbai Up Coming Airport , Residential Projects at Dronagiri Kharghar ">
	<meta name="google-site-verification" content="gBKl6tzggW7b8ZnjaDkKTf1PbESBv7G2Z91qEHWcd-0" />
	<link rel="shortcut icon" href="wccontent/images/favicon.jpg">
	<link rel="stylesheet" type="text/css" href="wccontent/css/main.css"/>
	<link rel="stylesheet" type="text/css" href="wccontent/css/style.css"/>
	<link rel="stylesheet" type="text/css" href="wccontent/css/other css/fonts.css"/>
	<link rel="stylesheet" type="text/css" href="wccontent/css/desktop.css" media="only screen and (max-width: 1200px) and (min-width: 990px)">
	<link rel="stylesheet" type="text/css" href="wccontent/css/tablet.css" media="only screen and (max-width: 989px) and (min-width: 600px)">
	<link rel="stylesheet" type="text/css" href="wccontent/css/mobile.css" media="only screen and (max-width: 599px) and (min-width: 320px)">
	<style type="text/css">
		header .row .col{
			/*border:1px solid black;*/
		}
		.paragraph{
			text-align: justify;
		}
		.bullet{
			display: inline-block;
			border:1px solid rgb(150,150,150);
			width: 10px !important;
			height: 10px !important;
			border-radius: 100px;
			background-color: white;
			margin: 5px;
			cursor: pointer;
		}
		.popup h1{
			color: #cfb75b;
		}
		.popup{
			height: 445px;
			width: 860px;
			display: inline-block;
			position: fixed;
			top: 100px;
			left: 100px;
			right: 100px;
			bottom: 100px;
			margin: auto;
			background-repeat: no-repeat;
			background-image: url('plans.jpg');
			background-size:  100% 100%;
		}
		.popup .frm{
			padding: 25px;
		}
		.popup .frm .row{
			margin: 10px 0px;
		}
		.popup input, .popup textarea{
			color: #cfb75b;
			background-color: #0c0f17;
			resize: none;
			border:none;
			border-radius: 7px;
			width: 100%;
			padding: 8px;
			font-size: 20px;
			box-sizing: border-box;
		}
		.popup input[type="submit"]{
			background-color: #6a6869;
			width: initial;
		}
		.popup input::-webkit-input-placeholder, .popup textarea::-webkit-input-placeholder{
			color: #cfb75b;
		}
		/*media query for popup starts*/
		@media (min-width: 100px) and (max-width: 414.5px){
			.popup h1{
				color: #cfb75b;
				font-size: 20px;
				position: relative;
				top: 16vh;
			}
			.popup{
				height: 445px;
				width: 100%;
				display: inline-block;
				position: fixed;
				top: 100px;
				left: 10px;
				bottom: 100px;
				margin: auto;
				background-repeat: no-repeat;
				background-image: url('plans.jpg');
				background-size:  100% 40%;
			}
			.popup .frm{
				padding: 25px;
			}
			.popup .frm .row{
				margin: 10px 0px;
			}
			.popup input, .popup textarea{
				color: #cfb75b;
				/*background-color: #0c0f17;*/
				background-color: #fff;
				resize: none;
				border:none;
				border-radius: 7px;
				width: 100%;
				/*padding: 8px;*/
				font-size: 15px;
				box-sizing: border-box;
				position: relative;
				top: 16vh;
			}
			.popup input[type="submit"]{
				background-color: #6a6869;
				width: initial;
			}
			.popup input::-webkit-input-placeholder, .popup textarea::-webkit-input-placeholder{
				color: #cfb75b;
			}
			#closePopup{
				position: relative;
				right: 10px;
			}
			.pagination .left{
				position: absolute;
				top: -2vh;
				left: -10px;
				height: 5vh;
				background-repeat: no-repeat;
			}
			.pagination .right{
				position: absolute;
				top: -2vh;
				right: -10px;
				height: 5vh;
				background-repeat: no-repeat;
			}
		}
		@media (min-width: 415px) and (max-width: 550.5px){
			.popup h1{
				color: #cfb75b;
				font-size: 20px;
				position: relative;
				top: 22vh;
			}
			.popup{
				height: 445px;
				width: 100%;
				display: inline-block;
				position: fixed;
				top: -50px;
				left: 10px;
				/*bottom: 100px;*/
				margin: auto;
				background-repeat: no-repeat;
				background-image: url('plans.jpg');
				background-size:  96% 50%;
			}
			.popup .frm{
				padding: 25px;
			}
			.popup .frm .row{
				margin: 10px 0px;
			}
			.popup input, .popup textarea{
				color: #cfb75b;
				/*background-color: #0c0f17;*/
				background-color: #fff;
				resize: none;
				border:none;
				border-radius: 7px;
				width: 80%;
				/*padding: 8px;*/
				font-size: 16px;
				box-sizing: border-box;
				position: relative;
				top: 22vh;
			}
			.popup input[type="submit"]{
				background-color: #6a6869;
				width: initial;
			}
			.popup input::-webkit-input-placeholder, .popup textarea::-webkit-input-placeholder{
				color: #cfb75b;
			}
			#closePopup{
				position: relative;
				right: 20px;
				top: 2px;
				width: 5% !important;
			}
			.pagination .left{
				position: absolute;
				top: -2vh;
				left: -10px;
				height: 5vh;
				background-repeat: no-repeat;
			}
			.pagination .right{
				position: absolute;
				top: -2vh;
				right: -10px;
				height: 5vh;
				background-repeat: no-repeat;
			}
		}
		@media (min-width: 551px) and (max-width: 600.5px){
			.popup h1{
				color: #cfb75b;
				font-size: 20px;
				position: relative;
				top: 29vh;
			}
			.popup{
				height: 445px;
				width: 100%;
				display: inline-block;
				position: fixed;
				top: -50px;
				left: 10px;
				/*bottom: 100px;*/
				margin: auto;
				background-repeat: no-repeat;
				background-image: url('plans.jpg');
				background-size:  96% 60%;
			}
			.popup .frm{
				padding: 25px;
			}
			.popup .frm .row{
				margin: 10px 0px;
			}
			.popup input, .popup textarea{
				color: #cfb75b;
				/*background-color: #0c0f17;*/
				background-color: #fff;
				resize: none;
				border:none;
				border-radius: 7px;
				width: 80%;
				/*padding: 8px;*/
				font-size: 16px;
				box-sizing: border-box;
				position: relative;
				top: 29vh;
			}
			.popup input[type="submit"]{
				background-color: #6a6869;
				width: initial;
			}
			.popup input::-webkit-input-placeholder, .popup textarea::-webkit-input-placeholder{
				color: #cfb75b;
			}
			#closePopup{
				position: relative;
				right: 25px;
				top: 2px;
				width: 5% !important;
			}
			.pagination .left{
				position: absolute;
				top: -2vh;
				left: -15px;
				height: 4vh;
				background-repeat: no-repeat;
			}
			.pagination .right{
				position: absolute;
				top: -2vh;
				right: -15px;
				height: 4vh;
				background-repeat: no-repeat;
			}
		}
		@media (min-width: 601px) and (max-width: 720.5px){
			.popup h1{
				color: #cfb75b;
				font-size: 20px;
				position: relative;
				top: 29vh;
			}
			.popup{
				height: 445px;
				width: 100%;
				display: inline-block;
				position: fixed;
				top: -50px;
				left: 10px;
				/*bottom: 100px;*/
				margin: auto;
				background-repeat: no-repeat;
				background-image: url('plans.jpg');
				background-size:  96% 63%;
			}
			.popup .frm{
				padding: 25px;
			}
			.popup .frm .row{
				margin: 10px 0px;
			}
			.popup input, .popup textarea{
				color: #cfb75b;
				/*background-color: #0c0f17;*/
				background-color: #fff;
				resize: none;
				border:none;
				border-radius: 7px;
				width: 80%;
				/*padding: 8px;*/
				font-size: 16px;
				box-sizing: border-box;
				position: relative;
				top: 29vh;
			}
			.popup input[type="submit"]{
				background-color: #6a6869;
				width: initial;
			}
			.popup input::-webkit-input-placeholder, .popup textarea::-webkit-input-placeholder{
				color: #cfb75b;
			}
			#closePopup{
				position: relative;
				right: 25px;
				top: 2px;
				width: 5% !important;
			}
		}
		@media (min-width: 721px) and (max-width: 766.5px){
			.popup h1{
				color: #cfb75b;
				font-size: 20px;
				position: relative;
				top: 0vh;
			}
			.popup{
				height: 445px;
				width: 100%;
				display: inline-block;
				position: fixed;
				top: -50px;
				left: 10px;
				/*bottom: 100px;*/
				margin: auto;
				background-repeat: no-repeat;
				background-image: url('plans.jpg');
				background-size:  96% 80%;
			}
			.popup .frm{
				padding: 25px;
			}
			.popup .frm .row{
				margin: 10px 0px;
			}
			.popup input, .popup textarea{
				color: #cfb75b;
				background-color: #0c0f17;
				resize: none;
				border:none;
				border-radius: 7px;
				width: 90% !important;
				/*padding: 8px;*/
				font-size: 16px;
				box-sizing: border-box;
				position: relative;
				top: 0vh;
			}
			.popup input[type="submit"]{
				background-color: #6a6869;
				width: 40% !important;
			}
			.popup input::-webkit-input-placeholder, .popup textarea::-webkit-input-placeholder{
				color: #cfb75b;
			}
			#closePopup{
				position: relative;
				right: 25px;
				top: 2px;
				width: 5% !important;
			}
		}
		@media (min-width: 767px) and (max-width: 768.5px){
			.popup h1{
				color: #cfb75b;
				font-size: 20px;
				position: relative;
				top: 0vh;
			}
			.popup{
				height: 445px;
				width: 100%;
				display: inline-block;
				position: fixed;
				top: -50px;
				left: 10px;
				/*bottom: 100px;*/
				margin: auto;
				background-repeat: no-repeat;
				background-image: url('plans.jpg');
				background-size:  96% 80%;
			}
			.popup .frm{
				padding: 25px;
			}
			.popup .frm .row{
				margin: 10px 0px;
			}
			.popup input, .popup textarea{
				color: #cfb75b;
				background-color: #0c0f17;
				resize: none;
				border:none;
				border-radius: 7px;
				width: 90% !important;
				/*padding: 8px;*/
				font-size: 16px;
				box-sizing: border-box;
				position: relative;
				top: 0vh;
			}
			.popup input[type="submit"]{
				background-color: #6a6869;
				width: 40% !important;
			}
			.popup input::-webkit-input-placeholder, .popup textarea::-webkit-input-placeholder{
				color: #cfb75b;
			}
			#closePopup{
				position: relative;
				right: 25px;
				top: 2px;
				width: 5% !important;
			}
		}
	</style>
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TNR82NM');</script>
<!-- End Google Tag Manager -->


	<script type="text/javascript">
� (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
� (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
� m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
� })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

� ga('create', 'UA-91633724-1', 'auto');
� ga('send', 'pageview');

</script>
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TNR82NM"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

	<header>
		<div class="header">
			<div class="row">
				<div class="col lg-2 lp-12 tb-12 mb-12 tb-offset-1 lg-offset-1 dt-offset-1 logo">
					<img src="wccontent/images/vishhwagreen.png" alt="Vishwa Green Realtors - Logo">
					<div class="col fl-rt mobile-only">
						<span class="menu-trigger"></span>
					</div>
				</div>
				<div class="col lg-8 dt-8 lp-12 tb-12 mb-12 tb-offset-1 ele-right" id="asy98s09">
					<div class="row social-iox">
						<ul>
							<li>
								<a class="facebook" href="https://www.facebook.com/siddharth.khanna88"></a>
							</li>
							<li>
								<a class="instagram" href="https://www.instagram.com/vishwagreenrealtors/"></a>
							</li>
							<li>
								<a class="twitter" href="https://twitter.com/vishwagreenreal"></a>
							</li>
							<li>
								<a class="linkedin" href="https://www.linkedin.com/in/vishwa-green-realtors-a0734a137/"></a>
							</li>
						</ul>
					</div>
					<nav>
						<ul>
							<li class="active"><a href="">HOME</a></li>
							<li class="dropdown"	>
								<a href="">ABOUT US</a>
								<ul class="submenu">
									<li><a href="AboutUs/Profile/">Company Profile</a></li>
									<li><a href="AboutUs/VisionMission/">Vision & Mission</a></li>
									<li><a href="AboutUs/OurTeam/">Our Team</a></li>
									<div class="clear-prefix"></div>
								</ul>
							</li>
							<li class="dropdown">
								<a href="">PROJECTS</a>
								<ul class="submenu">
									<li><a href="Projects/Ongoing/">Ongoing</a></li>
									<li><a href="Projects/Completed/">Completed</a></li>
									<li><a href="Projects/Upcoming/">Upcoming</a></li>
									<div class="clear-prefix"></div>
								</ul>
							</li>
							<li><a href="BuyersGuide/">BUYERS GUIDE</a></li>
							<li><a href="FAQ/">FAQ'S</a></li>
							<li class="dropdown">
								<a href="">DOWNLOAD</a>
								<ul class="submenu">
									<!--<li><a href="../wccontent/Company-profile.pdf" target="_blank">Company Profile</a></li> -->
									<li><a href="../wccontent/brochures/Plan S Brochure 9 x 13 inches.pdf" target="_blank">Vishwa Plan S</a></li>	
									<li><a target="_blank" href="../wccontent/brochures/Vishwa-Abha-e-brochure.pdf">Vishwa Abha</a></li>
									<li><a target="_blank" href="../wccontent/brochures/Vishwa-Hans-e-brochure.pdf">Vishwa Hans</a></li>
									<li><a href="../wccontent/brochures/Vishwa Siyona-e-brochure.pdf" target="_blank">Vishwa Siyona</a></li>
									<!--<li><a href="../wccontent/brochures/Vishwa-Nidhi-Brochure.pdf" target="_blank">Vishwa Nidhi</a></li> -->
									<div class="clear-prefix"></div>
								</ul>
							</li>
							<li><a href="Career/">CAREER</a></li>
							<li><a href="ContactUs/">CONTACT US</a></li>
							<li><a href="https://vishwagreenrealtors.wordpress.com/" target="_blank">Blog</a></li>
							<div class="clear-prefix"></div>
						</ul>
					</nav>
				</div>
			</div>
		</div>
		<div id="slider">
			<div id="sliderBox" class="projects">
				<div id="slideContainer">
					<div class="slide" data-bg-target="wccontent/images/slide_1.jpg" data-target="wccontent/images/slide_1m.jpg">
						
					</div>
					<div class="slide" data-bg-target="wccontent/images/slide-2m.jpg" data-target="wccontent/images/slide-2m.jpg">
						
					</div>
					<div class="slide" data-bg-target="wccontent/images/slide_3.jpg" data-target="wccontent/images/slide_3m.jpg">
						
					</div>
					<div class="slide" data-bg-target="wccontent/images/slide_4.jpg" data-target="wccontent/images/slide_4m.jpg">
						
					</div>
					<div class="slide" data-bg-target="wccontent/images/slide-5m.jpg" data-target="wccontent/images/slide-5m.jpg">
						
					</div>
					<!-- <div class="slide" data-bg-target="wccontent/images/slide_6.jpg">
						
					</div> -->
				</div>
				<div class="pagination" style="position: relative; top: -50%; color:white;">
					<!-- <div class="bullet"></div>
					<div class="bullet"></div>
					<div class="bullet"></div>
					<div class="bullet"></div>
					<div class="bullet"></div> -->
					<div class="left"></div>
					<div class="right"></div>
				</div>
				<div class="clear-prefix"></div>
			</div>
			<div class="row">
				<div id="enquiry">
					<div class="row title">
						<label>ENQUIRY</label>
					</div>
					<form method="POST" action="mailer/">
					<div class="enquiryForm">
						<div class="row inlinetf">
							<div class="col">
								<input type="text" name="visitorName" data-accept="alphabet" placeholder="YOUR NAME" required minlength="3">
							</div>
							<div class="col">
								<input type="text" name="visitorContactNumber" data-accept="number" placeholder="MOBILE NUMBER" required minlength="10" maxlength="10">
							</div>
							<div class="col">
								<input type="email" name="visitorEmail" placeholder="EMAIL ADDRESS" required="">
							</div>
						</div>
						<!-- <div class="row message">
							<textarea placeholder="MESSAGE" name="visitorFeedback" required minlength="10"></textarea>
						</div> -->
						<div class="row">
							<div class="ele">
								<input type="submit" name="submit" value="Send">
							</div>
						</div>
					</div>
					</form>
				</div>
			</div>
		</div>
	</header>
	<section>
		<div class="row info">
			<div class="col text lg-5 dt-5 lp-5 tb-10 mb-10 lg-offset-2 dt-offset-2 lp-offset-1 tb-offset-1 mb-offset-1 home-info">
			    <h1>WHO WE ARE?</h1>
			    <p class="paragraph">
				     Vishwa Green Realtors is Eminent Real Estate Company who promotes and maintains the highest standard of Concrete Infrastructure that has enjoyed an immense success and increasing customer support. We are into crafting affordable residential and commercial properties in the prime localities of Navi Mumbai and having different strata of clientele. We are now among the successful builders with projects across different localities mainly at Nerul, Kharghar, Dronagiri and Ulwe in Navi Mumbai and have set new dimensions in Real Estate development.
			    </p>
			    <p class="paragraph">
				     Vishwa Green Realtors dreams of being the most admired Real Estate Company and is committed towards constant innovation in design, technology and environmental sustainability contributing to overall customer satisfaction. 
			    </p>
			    <p class="paragraph">
				     The Eco-friendly measures remain to be company's special favour with a focus on environmentally sustainable developments aimed to meet the 'Leadership in Energy and Environmental Design (LEED)' Standards.
			    </p>
		   	</div>
		   	<div class="col lg-4 dt-4 lp-5 tb-10 mb-10 tb-offset-1 mb-offset-1 highlight">
		    	<img src="wccontent/images/theme/02.jpg" alt="vishwa green realtors - conference room" />
		   	</div>
		</div>
	</section>
	<footer>
		<div class="container-pack">
			<div class="col fl-rt">Designed By <a href="http://www.kcresst.com">Kcresst Communication</a></div>
			<div class="clear-prefix"></div>
		</div>
	</footer>
	<div class="popupContainer">
		<div class="popup">
			<div class="panel">
				<div class="row" style="height: 0px">
					<span id="closePopup" style="float: right; display: inline-block; width: 30px; height: 30px; color:white; font-weight: 900; font-size: 22px; background-image: url('wccontent/images/close-icon.png'); background-size: 100% 100%;">  </span>
				</div>
				<div class="row">
					<div class=" elevation839 col mb-12 tb-12 lp-6 lg-6 ">
						&nbsp;
					</div>
					<div class=" frm col mb-12 tb-12 lp-5 lg-5 lp-offset-1 lg-offset-1 ">
						<div class="row">
							<h1>ENQUIRE NOW</h1>
						</div>
						<form method="POST" action="mailmain.php">
						<div class="row">
							<input type="text" data-accept="alphabet" name="name" placeholder="Name">
						</div>
						<div class="row">
							<input type="email" name="email" placeholder="Email">
						</div>
						<div class="row">
							<input type="text" name="contact" data-accept="number" placeholder="Mobile">
						</div>
						<!-- <div class="row">
							<textarea name="visitorFeedback" placeholder="Message"></textarea>
						</div> -->
						<div class="row">
							<input type="submit" name="submit">
						</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- <a href="#" class="btn highlight"><div class="outer"><span class="inner">VISIT</span></div></a> -->
	<script type="text/javascript" src="wccontent/js/jquery.min.js"></script>
	<script type="text/javascript" src="wccontent/js/behavior.js"></script>
	<script type="text/javascript" src="wccontent/js/slider.js"></script>
	<script type="text/javascript" src="wccontent/js/validation.js"></script>

	<script type="text/javascript">
		$("#closePopup").click(function(){
			$(".popupContainer").css({"display":"none"})
		})
	</script>
	<!-- Google Code for Query fills Conversion Page -->
	<script type="text/javascript">
	/* <![CDATA[ */
	var google_conversion_id = 860424875;
	var google_conversion_language = "en";
	var google_conversion_format = "3";
	var google_conversion_color = "ffffff";
	var google_conversion_label = "QKsXCPj8ynUQq5WkmgM";
	var google_conversion_value = 1.00;
	var google_conversion_currency = "INR";
	var google_remarketing_only = false;
	/* ]]> */
	</script>
	<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
	</script>
	<noscript>
	<div style="display:inline;">
	<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/860424875/?value=1.00&amp;currency_code=INR&amp;label=QKsXCPj8ynUQq5WkmgM&amp;guid=ON&amp;script=0" alt="javascript-component" />
	</div>
	</noscript>
</body>
</html>