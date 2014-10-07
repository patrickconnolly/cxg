<?php
	require_once 'Mobile_Detect.php';
	$detect = new Mobile_Detect;
	// Removes 'New' from first page
	$today = date('ymd');
	$expDay = '140304';
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="utf-8">
	    <title>CXG</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

	    <meta name="description" content="CXG.A new full service agency. Helping clients design, develop and deliver
		effective brand interactions for Consumers, Customers, Developers and User Groups, Distributors, Press, Investors/Analysts, Sales Organizations and Employee Stakeholders.">
		<meta name="keywords" content="CXG, agency, brands">
	    <meta name="author" content="PowerHouse Creatve">

		<!-- favicon -->
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		<link rel="icon" href="favicon.ico" type="image/x-icon">

		<!-- styles -->
		<link href="css/bootstrap.css" rel="stylesheet">
	    <!-- <link href="css/bootstrap-responsive.css" rel="stylesheet"> -->
		<link href="css/component.css" rel="stylesheet"/>
		<link href="js/videojs/video-js.css" rel="stylesheet" type="text/css">
		<link href="css/main.css" rel="stylesheet" />

		<script src="js/modernizr.custom.js"></script>

		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	    <!--[if lt IE 9]>
	      <script src="js/html5shiv.js"></script>
	    <![endif]-->

	</head>
	<body class="cbp-spmenu-push">
		<?php // Disable Video for mobile devices
			if ( !$detect->isMobile() ) {
				echo '
				<div id="page-cover"></div>
				<video id="cxg-video" class="video-js vjs-default-skin" preload="none" autoplay data-setup="{ }">
					<source src="cxg.mp4" type="video/mp4" />
					<source src="cxg.webm" type="video/webm" />
				</video>';
			}
		?>


		<button class="fixed-btn" id="showLeftPush">Show</button>
		<a href="#top" class="fixed-btn" id="toTop"><span>Back to Top</span></a>

		<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
			<div class="cbp-spmenu-inner">
				<h1>CXG</h1>
				<ul id="sideNav">
					<?php include 'nav.html'; ?>
				</ul>
			</div>
			<div class="cbp-spmenu-cutout"></div>
		</nav>
		<div id="main-content">
			<section id="home">
				<img id="intro-logo" src="img/cxg-logo-lrg.png" alt="CXG Collective-Experience Group" />
				<h4 class="gray-font">A Fresh Take On Brand Engagement</h4>
				<p class="gray-font">info@collective-experience.com<br />
				415 213 4860</p>
			</section><!-- end section HOME -->

			<section id="what-we-do">
				<div class="section-bg">
					<div id="slide1b" class="angle-slide gray-bg right-bg" data-stellar-ratio="1.4"></div>
					<div id="slide1a" class="angle-slide red3-bg left-bg" data-stellar-ratio="2"></div>
				</div>
				<div class="wrap container diagonalRight" data-stellar-ratio="0.9">
					<div class="span7 text-left">
						<h3 class="white-font">A <?php if ($today < $expDay) { echo 'New'; } ?> Full-Service<br /> Communications<br /> and Brand <br />Engagement Agency</h3>
						<p>Fueled by attention-getting creative and advanced technology, we help clients design, develop, and deliver effective brand interactions that transform the relationship between audiences and brands.</p>
					</div>
					<div class="span5 text-left">
						<div id="exciting" class="subsection">
							<span class="point-icons"></span>
							<p>Exciting and inspiring audience engagements that generate measurable business results.</p>
						</div>
						<div id="online-spaces" class="subsection">
							<span class="point-icons"></span>
							<p>Staged in stunning live and online spaces infused with advanced technology, interactive and social media.</p>
						</div>
						<div id="inspiring" class="subsection">
							<span class="point-icons"></span>
							<p>Partnering with change agents and stakeholders who desire bolder, better, different.</p>
						</div.>
					</div>
				</div>
			</section><!-- end section WHAT WE DO -->

			<section id="change-agents">
				<div class="section-bg">
					<div id="slide2b" class="angle-slide black-bg left-bg" data-stellar-ratio="1.4"></div>
					<div id="slide2a" class="angle-slide white-bg right-bg" data-stellar-ratio="2"></div>
				</div>
				<div class="wrap">
					<div id="xrain1" class="diagonalRight" data-stellar-ratio="-0.7"></div>
					<div id="xrain2" class="diagonalRight" data-stellar-ratio="-1.2"></div>
					<div class="tag-wrap" data-stellar-ratio="1">
						<h2 class="red-font">Change Agents</h2>
						<h3 class="gray-font">For</h3>
						<h2 class="red-font">Change Agents</h2>
					</div>
					<div id="xrain3" class="diagonalRight" data-stellar-ratio="-2.4"></div>
					<!--
					<div id="cutout-wrap" data-stellar-ratio="1">
						<div class="cutout" data-stellar-ratio="0.4">
						</div>
					</div>
					-->
				</div>
			</section><!-- end section CHANGE-AGENTS -->

			<section id="your-side">
				<div class="section-bg">
					<div id="slide3b" class="angle-slide red2-bg right-bg" data-stellar-ratio="2"></div>
					<div id="slide3a" class="angle-slide gray-bg left-bg" data-stellar-ratio="1.6"></div>
				</div>
				<div class="wrap">
					<div id="x1-white" class="diagonalRight" data-stellar-ratio="1.5"></div>
					<div id="x2-white" class="diagonalRight" data-stellar-ratio="-1.5"></div>
					<h2>We're on <span class="red-font">Your Side</span></h2>
					<div id="subslides-wrap">
						<div id="subslide1" class="sub-slide">
							<div class="container" data-stellar-ratio="1.5">
								<h5 class="gray-font">We created this agency to work with people who desire <span class="red-font">bolder</span>, <span class="red-font">better</span>, <span class="red-font">different</span>.  The restless, the inquisitive, the despisers of the status quo.</h5>
								<hr />
							</div>
						</div><!-- end slide1 -->
						<div id="subslide2" class="sub-slide black-bg">
							<div id="x1-gray" class="diagonalRight" data-stellar-ratio="-0.5"></div>
							<div id="x2-gray" class="diagonalRight" data-stellar-ratio="-2"></div>
							<div class="container" data-stellar-ratio="1.5">
								<h5 class="white-font">We exist to advance <span class="red2-bg">opportunities</span> that matter. Energizing stakeholders, optimizing corporate innovation and creativity, <span class="red2-bg">connecting</span> audiences with brands and products in active, personal and transformational ways.</h5>
								<hr />
							</div>
						</div><!-- end slide2 -->
						<div id="subslide3" class="sub-slide red-bg">
							<div class="container" data-stellar-ratio="1.5">
								<h5 class="white-font">Integrated product launches, <span class="underline">branded experiences</span>, technology-driven experiential events, employee and sales channel engagement, stakeholder engagement; these are the types of fundamental marketing challenges on which our <span class="underline">Collective Experience</span> is actively focused.</h5>
								<hr />
							</div>
						</div>
						<div id="subslide4" class="sub-slide white-bg">
							<div class="container" data-stellar-ratio="1.5">
								<h5 class="gray-font">Relentlessly <span class="red2-bg white-font">client focused</span>, tenacious and inspired by big ideas that drive innovation, we live for the solve, for the <span class="red2-bg white-font">brilliant solution</span> to the toughest challenge.</h5>
								<hr class="gray-bg"/>
							</div>
						</div>
					</div>
				</div>
			</section><!-- end section WE'RE ON YOUR SIDE -->

			<section id="call-us-when">
				<div class="section-bg">
					<div id="slide4b" class="angle-slide black-bg left-bg" data-stellar-ratio="1.4"></div>
					<div id="slide4a" class="angle-slide gray-bg right-bg" data-stellar-ratio="2"></div>
				</div>
				<div class="wrap">
					<h2 data-stellar-ratio="0.8" class="diagonalRight">Our Clients Call Us When</h2>
					<h3 class="gray-font diagonalRight" data-stellar-ratio="0.9">They <span class="red-font">Need</span> / <span class="red-font">Wish</span> / <span class="red-font">Want</span> / To...</h3>
					<ul class="text-left" id="magnify-list" data-stellar-ratio="1">
						<li><span class="red">Launch</span> a new product or a big <span class="black">idea</span></li>
						<li><span class="red">Amaze</span> <span class="black">prospects, customers, partners or employees</span></li>
						<li><span class="red">Improve</span> <span class="black">brand awareness and opinion</span></li>
						<li><span class="red">Transform</span> an environment into a <span class="black">memorable brand immersion</span></li>
						<li><span class="red">Grow</span> <span class="black">market share</span></li>
						<li><span class="red">Redefine</span> their <span class="black">brand</span></li>
						<li><span class="red">Communicate</span> effectively with <span class="black">one voice</span></li>
						<li><span class="red">Breach</span> <span class="black">new markets</span></li>
						<li><span class="red">Improve</span> their <span class="black">customer experience</span></li>
					</ul>

				</div>
			</section><!-- end section CALL US WHEN... -->

			<section id="approach">
				<div class="section-bg">
					<div id="slide5b" class="angle-slide white-bg right-bg" data-stellar-ratio="2"></div>
					<div id="slide5a" class="angle-slide red2-bg left-bg" data-stellar-ratio="1.6"></div>
				</div>
				<div class="wrap white-font">
					<h2 data-stellar-ratio="0.8" class="diagonalRight">Our Approach</h2>
					<!-- <div class="approach-key-words" data-stellar-ratio="0.9">
						<p>Targeted <span class="pill-break"></span> Personalized <span class="pill-break"></span> Interactive <span class="pill-break"></span> Productive<br />Memorable <span class="pill-break"></span> Sharable <span class="pill-break"></span> Results-Driven Solutions</p>
					</div>-->
					<div id="approach-points" data-stellar-ratio="1.1">
						<div class="container">
							<div class="span6 text-left">
								<div class="subrow" id="subrow1">
									<h3 id="insight" class="approach-header"><span></span>Insight</h3>
									<p>Research to better understand audience’s needs, beliefs and attitudes.  Planning to create strategic experience architecture and design.</p>
								</div>
								<div class="subrow" id="subrow2">
									<h3 id="execution" class="approach-header"><span></span>Execution</h3>
									<p>A convergence of modern environments, media and technology to amp the experience to new levels and in turn create deep, lasting connections.</p>
								</div>
							</div>
							<div class="span6 text-left">
								<div class="subrow" id="subrow3">
									<h3 id="inspiration" class="approach-header"><span></span>Inspiration</h3>
									<p>Amazing creativity and ideas that engage, immerse and spur action.</p>
								</div>
								<div class="subrow" id="subrow4">
									<h3 id="metrics" class="approach-header"><span></span>Metrics</h3>
									<p>Real world data and analytics that showcase results and fuel new insights.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section id="experience">
				<div class="section-bg">
					<div id="slide6b" class="angle-slide white-bg left-bg" data-stellar-ratio="1.6"></div>
					<div id="slide6a" class="angle-slide black-bg right-bg" data-stellar-ratio="2"></div>
				</div>
				<div class="wrap white-font">

					<div id="x1-darkgray" class="diagonalRight" data-stellar-ratio="3"></div>
					<div id="x2-darkgray" class="diagonalRight" data-stellar-ratio="-1.8"></div>

					<h4 data-stellar-ratio="0.8">The</h4>
					<h2 data-stellar-ratio="0.8" id="exp1">Collective</h2>
					<h2 data-stellar-ratio="0.8" id="exp2">Experience</h2>
					<div class="line-wrap" data-stellar-ratio="0.8">
						<hr />
					</div>
					<div class="exp-content" data-stellar-ratio="1">
						<div class="container">
							<p>We at CXG are a collection of <span class="red-font semi-bold">deeply experienced industry professionals</span> who have found each other by way of a shared love of life, humor, craftsmanship and unpretentious excellence.</p>
							<p>Tireless imaginations, endless questions...a need to know ‘why’ more than ‘what.’ With this irrepressible, insatiable curiosity about what makes people, organizations, brands and gadgets tick, <span class="red-font semi-bold">we use the right tools</span> for the right job.</p>
							<p>The collective professional experience of the <span class="red-font semi-bold">CXG leadership</span> team encompasses development and activation of multi-faceted brand- and business-advancing programs for brands including...</p>
						</div>
					</div>
					<div id="client-display" data-stellar-ratio="1.4">
						<div class="client-wrap">

							<div id="coca-cola-active" class="active-logo"></div>
							<div id="cisco-active" class="active-logo"></div>
							<div id="motorola-active" class="active-logo"></div>
							<div id="nissan-active" class="active-logo"></div>
							<div id="xerox-active" class="active-logo"></div>
							<div id="pfizer-active" class="active-logo"></div>
							<div id="ibm-active" class="active-logo"></div>
							<div id="shell-active" class="active-logo"></div>
							<div id="panasonic-active" class="active-logo"></div>
							<div id="frito-lay-active" class="active-logo"></div>
							<div id="lexus-active" class="active-logo"></div>
							<div id="oracle-active" class="active-logo"></div>
							<div id="fifa-active" class="active-logo"></div>
							<div id="olympics-active" class="active-logo"></div>

							<img id="logos-inactive" class="inactive-logo" src="img/client-map.png" width="1040px" height="400px" usemap="#client-map">

							<map id="client-map" name="client-map">
								<area id="area-coca-cola" shape="poly" coords="130,80,260,0,390,80,260,160" alt="Coca-Cola">
								<area id="area-cisco" shape="poly" coords="390,80,520,0,650,80,520,160" title="Cisco">
								<area id="area-motorola" shape="poly" coords="650,80,780,0,910,80,780,160" alt="Motorola">
								<area id="area-nissan" shape="poly" coords="0,160,130,80,260,160,130,240" alt="Nissan">
								<area id="area-xerox" shape="poly" coords="260,160,390,80,520,160,390,240" alt="Xerox">
								<area id="area-pfizer" shape="poly" coords="520,160,650,80,780,160,650,240" alt="Pfizer">
								<area id="area-ibm" shape="poly" coords="780,160,910,80,1040,160,910,240" alt="IBM">
								<area id="area-shell" shape="poly" coords="130,240,260,160,390,240,260,320" alt="Shell">
								<area id="area-panasonic" shape="poly" coords="390,240,520,160,650,240,520,320" alt="Panasonic">
								<area id="area-frito-lay" shape="poly" coords="650,240,780,160,910,240,780,320" alt="Frito Lay">
								<area id="area-lexus" shape="poly" coords="0,320,130,240,260,320,130,400" alt="Lexus">
								<area id="area-oracle" shape="poly" coords="260,320,390,240,520,320,390,400" alt="Oracle">
								<area id="area-fifa" shape="poly" coords="520,320,650,240,780,320,650,400" alt="Fifa">
								<area id="area-olympics" shape="poly" coords="780,320,910,240,1040,320,910,400" alt="Olympics">
							</map>

						</div>
					</div>
				</div>
			</section>

			<section id="team">
				<div class="section-bg">
					<div id="slide7b" class="angle-slide red2-bg right-bg" data-stellar-ratio="2"></div>
					<div id="slide7a" class="angle-slide white-bg left-bg" data-stellar-ratio="1.8"></div>
				</div>
				<div class="wrap container gray-font">
					<ul id="bio-photo-wrap" class="white-font" data-stellar-ratio="0.9">
						<li id="photo-nan-lyons" class="active">
							<span><h4>Nan Lyons</h4></span>
						</li>
						<!--li id="photo-julie">
							<span><h4>Julie Julie</h4></span>
						</li-->
						<li id="photo-patrick-connolly">
							<span><h4>Patrick Connolly</h4></span>
						</li>
						<li id="photo-don-moss">
							<span><h4>Don Moss</h4></span>
						</li>
						<li id="photo-mike-burgess">
							<span><h4>Mike Burgess</h4></span>
						</li>
					</ul>

					<div id="bio-detail-wrap" data-stellar-ratio="1">
						<div class="bio-details" id="bio-patrick-connolly">
							<h2 class="black-font">Patrick <span class="red-font">Connolly</span></h2>
							<h4>Executive Technology Director</h4>
							<hr />
							<p>For Patrick, technology is an addiction.  Whether at work or at home, Patrick seeks out the latest and the greatest, embracing those technologies on the cutting edge, yet not quite the bleeding edge. With over twenty years of entrepreneurial experience mixed with hands-on technology experience, Patrick offers the unique ability to understand a client’s challenge, develop a solution and to architect what is possible.  His resume is vast, from creating the world’s largest interactive touchscreen housing half a million images to executing full-motion video on an entire NYC block.  For many clients, innovation can be nail biting and frightening.  Yet major brands in the technology, financial, consumer, government and retail markets have trusted Patrick to create and deliver rock-solid immersive experiences, interactive customer technologies and integrated mobile solutions. Whether it is creating a virtual environment for the Sheihk in Dubai or re-designing the in-store experience for a world-wide entertainment brand, Patrick brings a fresh perspective to applying technological solutions to solve real-world marketing challenges.</p>
						</div>

						<div class="bio-details" id="bio-don-moss">
							<h2 class="black-font">Don <span class="red-font">Moss</span></h2>
							<h4>Executive Creative Director</h4>
							<hr />
							<p>Executive Creative Director Don Moss thrives on the big ideas that change the way people think, act and believe. His award-winning creative leadership has inspired major global initiatives for brands in sectors ranging from automotive soft drinks and technology to, pharmaceuticals and sports. Don is known for delivering the seemingly impossible tasks. Need to launch hybrid cars in the oil-rich middle-east? Don’s done it. Need to stage the world’s largest vehicle immersion for a major press event? Done. Starting with a keen understanding of the audience, Don embraces digital, social media and immersive environments in conjunction with the usual marketing staples. Every brand assignment is infused with excitement and energy whether it is an online product launch, live press event, tradeshow, lead development program or worldwide sales meeting. </p>
						</div>

						<div class="bio-details active" id="bio-nan-lyons">
							<h2 class="black-font">Nan <span class="red-font">Lyons</span></h2>
							<h4>Account Director</h4>
							<hr />
							<p>Collaborative, accountable, known for doing the right thing; Nan’s account management acumen has less to do with style and ego and everything to do with moving things toward success. With a proven track record, Nan and her teams’ work have changed the way many industries market today. Their work in the financial sector brought e-commerce to the big league. In collaboration with the world’s largest retailer, she helped launch and promote some pretty legendary entertainment careers. In the energy sector, her innovative product launches helped fuel a new category for the consumer. Nan offers solutions that are grounded in the real world of sales, nothing theoretical here. For her it’s simply got to work – for the client, the stakeholder and ultimately the consumer. Pharma, technology and global brands round out her work. With this broad range of successful brand engagement, her work is additive and she suitably fulfills on the promise of ‘collective’ in Collective Experience.</p>
						</div>

						<div class="bio-details" id="bio-mike-burgess">
							<h2 class="black-font">Mike <span class="red-font">Burgess</span></h2>
							<h4>President</h4>
							<hr />
							<p>President Mike Burgess could be called the Ghidorah of the team, having worn three hats, during his career in the event marketing industry. His time working as a Creative Director, Head of Production and Client Services Director has given him a deep seated empathy for the role each plays in creating a spectacular result. Mike began his career in London where due to a dire paucity of TV channels at the time, he developed his love for theater and concert experiences. The rush of seeing an audience react enthusiastically to a well-orchestrated performance or experience has never left him. He has had the privilege to work with some of the world's most exciting brands on some of their most important event marketing initiatives. Mike is less a three headed-monster and more a three headed-matchmaker, bringing people and brands together in perfect harmony.</p>
						</div>

						<!--div class="bio-details" id="bio-julie">
							<h2 class="black-font">Julie <span class="red-font">Julie</span></h2>
							<h4>Special Ops</h4>
							<hr />
							<p>Julie is a ninja who kills it. Sometimes she rides a dragon to work. Also this text needs to be long enough to wrap. Hopefully it does. Sometimes you have to do things like this.</p>
						</div-->
					</div>
				</div>

			</section>

			<section id="targeted">
				<div class="section-bg">
					<!--
					<div id="slide8b" class="angle-slide black-bg left-bg" data-stellar-ratio="2"></div>
					<div id="slide8a" class="angle-slide gray-bg right-bg" data-stellar-ratio="1.6"></div>
					-->
				</div>
				<div class="tagline-wrap" data-stellar-ratio="0.7">
					<div class="container black-font">
						<h3>Targeted <span class="black-pill"></span> <span class="red-font">Personalized</span><br />
							Interactive <span class="black-pill"></span> Productive<br />
							Memorable <span class="black-pill"></span> Sharable<br />
							Results-Driven<br />
							Brand-Engagement
						</h3>
					</div>
				</div>
			</section>

			<section id="contact">

				<div class="wrap container gray-font">
					<div id="contact-logo-wrap" data-stellar-ratio="0.8">
						<img src="img/cxg-contact-logo.png" alt="CXG Collective Experience Group" />
					</div>
					<div id="contact-city-wrap" data-stellar-ratio="0.9">
						<h4>SF / LA / ATL</h4>
					</div>
					<div id="contact-info-wrap" data-stellar-ratio="1">
						<p class="contact-instructions">To see our work and discuss how we can help you connect your brand with your most important stakeholders, contact us at:</p>
						<p>Collective-Experience Group</p>
						<p>1280 Civic Drive, Suite 200</p>
						<p>Walnut Creek, CA 94596</p>
						<p>415.213.4860</p>
						<p><a href="mailto:info@collective-experience.com">info@collective-experience.com</a></p>
						<!--
						<ul id="social-media">
							<li id="ico-facebook"><a href="#"><span>Facebook</span></a></li>
							<li id="ico-twitter"><a href="#"><span>Twitter</a></span></li>
							<li id="ico-linkedin"><a href="#"><span>LinkedIn</a></span></li>
							<li id="ico-instagram"><a href="#"><span>Instagram</a></span></li>
						</ul>
						-->
					</div>
				</div>
			</section>

			<section id="about">
				<div id="about-wrap" class="black-bg">
					<div data-stellar-vertical-offset="-130" data-stellar-ratio="1.5" class="skyline" id="ny-skyline"></div>
					<div data-stellar-vertical-offset="-220" data-stellar-ratio="1.8" class="skyline" id="chi-skyline"></div>
					<div data-stellar-vertical-offset="-280" data-stellar-ratio="2.1" class="skyline" id="sf-skyline"></div>
					<div class="container">
						<h2 class="white-font" data-stellar-ratio="0.6">About Us</h2>
						<div class="about-info" data-stellar-ratio="0.8">
							<h5 class="white-font">CXG is wholly owned by InVision Communications Inc., (<a href="http://www.iv.com" target="_blank">www.iv.com</a>) an award winning event marketing and communications company with offices in San Francisco, Chicago, and New York.</h5>
							<hr />
						</div>
					</div>
				</div>
			</section>

		</div><!-- end main content -->


		<script src="http://code.jquery.com/jquery.min.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<?php // Disable Video for mobile devices
			if ( !$detect->isMobile() ) {
				echo '<script src="js/stellar.js"></script>';
			}
		?>
		<!-- Classie - class helper functions by @desandro https://github.com/desandro/classie -->
		<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showRightPush = document.getElementById( 'showRightPush' ),
				body = document.body;
				//overall = document.getElementById('overall');

			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
				classie.toggle( document.getElementById('our-team'), 'shift' );
				classie.toggle( document.getElementById('your-side'), 'shift' );
			};

			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
		<script src="js/videojs/video.js"></script>
		<script src="js/main.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-46334441-1', 'collective-experience.com');
  ga('send', 'pageview');

</script>
	</body>
</html>
