<!DOCTYPE html>
<html>
	<head>
		<title>Fixed position block</title>
		<meta content="text/html; charset=utf-8" http-equiv="content-type">
		<meta name="description" content="Fixed position block" />
		<meta name="keywords" content="javascript, dynamic, grid, layout, jquery plugin, flex layouts"/>
		<link rel="icon" href="favicon.ico" type="image/x-icon" />
		<link rel="stylesheet" type="text/css" href="css/style2.css" />
		<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
		<script type="text/javascript" src="../freewall.js"></script>
		<style type="text/css">
			html, body {
				margin: 0;
				padding: 0;
			}
			
			.layout {
				width: 920px; /* 300 610 765*/
				/* min-width: 276px; */
				padding-top: 48px;
				margin: 0 auto;
			}
			
			.free-wall {
			}
			
			.brick .cover {
				position:relative;
				overflow:hidden;
				vertical-align:middle;
				background-repeat:no-repeat;
				background-color:transparent;
				background-position: center center;
				background-size: 100% 100%;
				height:100%;
			}
			
			.brick.centro .cover {
				position:relative;
				overflow:hidden;
				vertical-align:middle;
				background-repeat:no-repeat;
				background-color:transparent;
				background-position: center center;
				background-size: 102% 102%;
				-webkit-transition: background-size .15s ease;
				-moz-transition: background-size .15s ease;
				-o-transition: background-size .15s ease;
				-ms-transition: background-size .15s ease;
				transition: background-size .15s ease;
				height:100%;
				border-radius: 0px;
			}
			
			.intext {
				position: absolute;
				top:35%;
				width: 100%;
			}
			
			.brick.centro .cover:hover {
				background-size: 93% 93%;
				border: 20px;
			}
			
			.sizeMNU {
				background-image: url("images/MNU3.png");
			}
			.filter-items {
				padding: 10px 0px;
			}
			.filter-label {
				display: inline-block;
				cursor: pointer;
				background: rgb(205, 149, 12);
			}
			.filter-label.active,
			.filter-label:hover {
				background: rgb(238, 180, 34);
			}
			
			/*
			.menu {
				background: #0e0b0c; #403c3d;
			}
			
			ul.testmenulist {
				margin:0;
				padding:0;
				list-style-type:none;
				display:block;
				width:145px;
				line-height:43px;
				text-align: left;
			}
			
			ul.testmenulist li {
				margin:0;
				padding:0;
			}
			
			ul.testmenulist li a {
				font-size:14px;
				display:block;
				text-decoration:none;
				padding:0 0 0 10px;
				background: url('images/MNU.png');
				margin-bottom: 2px;
			}
			
			ul.testmenulist li a:hover {
				font-size:14px;
				display:block;
				text-decoration:none;
				padding:0 0 0 10px;
				background: url('images/MNU3.png');
			}
			
			.menu ul {
				margin:0;
				padding:0;
				list-style-type:none;
				display:block;
				width:300px;
				line-height:160%;
				text-align: left;
			}
			
			.menu ul.menulist li {
				margin:0;
				padding:0;
				border-top:1px solid #000;
				border-bottom:1px solid #2e2b2c;
			}
			
			.menu ul.menulist li a {
				font-size:14px;
				display:block;
				text-decoration:none;
				color:#858182;
				background:#1a1617;
				padding:0 0 0 20px;
			}
			
			.menu ul.menulist li a:hover {
				background: #0e0b0c;
			}
			
			.menu ul.submenulist li a {
				display:block;
				text-decoration:none;
				color:#858182;
				background:#1a1617;
				padding:0 0 0 40px;
			}
			*/
			
			.size33 {
				background: #fff;
				color: #000;
			}
			
			.sizeVIDEO {
				background: #ddd;
				color: #fff;
			}
			
			.sizeVIDEO .vcover {
				padding-top:4px;
			}
			
			.sizeINFOL {
				background: #fff;
				color: #000;
			}
			
			.header {
				height: 28px;
				background-color: #ffb746;
				color: #444;
				font-size: 12px;
				position: fixed;
				top:0;
				width: 100%;
				z-index: 9999;
				/*box-shadow: 0px 0px 20px 0px rgba(255, 255, 255, .9);
				-moz-box-shadow: 0px 0px 20px 0px rgba(255, 255, 255, .9);
				-webkit-box-shadow: 0px 0px 20px 0px rgba(255, 255, 255, .9);*/
			}
			
			.header div {
				width: 920px;
				margin: 0 auto;
				/*text-align: right;*/
			}
			#headbar {
				list-style:none;
				/*font-weight:bold;*/
				/* Clear floats */
				float:right;
				position:relative;
				padding:5px 0;
			}
			
			#headbar li {
				float: right;
				margin:0 0 0 30px;
			}
			#search-form {
				font: 12px 'Lato';
				background: #ffe0af;
				border: medium none;
				display: inline-block;
				width: 125px;
				height: 20px;
				cursor: pointer;
				color: #444;
				padding: 0 8px;
				margin-top:-2px;
				box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.4) inset;
			}
			#form-submit {
				background: url('images/button_search.png') no-repeat scroll 0px 0px transparent;
				height: 20px;
				width: 20px;
				float:right;
				display:block;
				margin-top:-1px;
				border:0 !important;
				cursor: pointer;
			}
			#logo {
				margin-bottom: 10px;
				width:920px;
			}
			#smlogo {
				float:left;
				visibility: hidden;
			}
			
			/* --------- MAIN STUFF --------- */
			#maincontainer {
				width: 920px; /*Width of main container*/
				margin: 0 auto; /*Center container on page*/
				font-size:13px;
			}
			
			#maincontainer div {
				line-height: 21px;
			}
			
			#maincontainer a {
				color: #0051b5;
			}
			#maincontainer a:hover, #maincontainer a:visited {
				text-decoration: underline;
			}
			#topsection {
				height: 44px; /*Height of top section*/
				border-bottom: 1px solid #ddd;
			}
			#topsection h1 {
				margin: 0;
				padding-top: 15px;
			}
			#contentwrapper {
				float: left;
				width: 100%;
			}
			#contentcolumn {
				margin: 0 230px 0 305px;
				height: 600px;
			}
			#leftcolumn {
				float: left;
				width: 305px;
				height: 600px;
				margin-left: -920px;
				background-color: #eee;
			}
			#rightcolumn {
				float: left;
				width: 230px;
				height: 600px;
				margin-left: -230px;
				background-color: #eee;
			}
			/*TWO*/
			#contentcolumn2 {
				margin: 0 305px 0 305px;
				height: 300px;
			}
			#leftcolumn2 {
				float: left;
				width: 305px;
				height: 300px;
				margin-left: -920px;
				background-color: #eee;
			}
			#rightcolumn2 {
				float: left;
				width: 305px;
				height: 300px;
				margin-left: -305px;
				background-color: #eee;
			}
			#footer {
				clear: left;
				width: 100%;
				height: 50px;
				background: #444;
				text-align: center;
				padding: 10px 0;
				color: #fff;
				font-size: 12px;
			}
			.innertube {
				margin: 20px; /*Margins for inner DIV inside each column (to provide padding)*/
			}
			
			#maincontainer h2 {
				font-size: 18px;
				font-weight: bold;
				padding-bottom: 20px;
				margin-bottom: 24px;
			}

			#maincontainer h2#break {
				padding-top: 10px;
				margin-bottom: 14px;
			}
			
			#contentcolumn h2, #contentcolumn2 h2 {
				border-bottom: 2px solid #eee;
			}
			
			#leftcolumn h2, #rightcolumn h2, #leftcolumn2 h2, #rightcolumn2 h2 {
				border-bottom: 2px solid #fff;
			}
			
			#maincontainer li {
				list-style:none;
				padding: 0 0 20px 0;
			}
			
			div.calendar-date {
				display:inline-block;
				width: 60px;
				vertical-align: top;
			}
			
			div.calendar-info {
				width: 271px;
				display: inline-block;
				vertical-align: top;
				padding-left: 10px;
				border-left: 1px solid #eee;
			}
			
			.news-title {
				font-weight: bold;
				padding-bottom: 5px;
			}
			.news-image {
				display:inline-block;
				width: 60px;
				vertical-align:top;
			}
			.news-info {
				display:inline-block;
				width: 191px;
				vertical-align:top;
				padding-left: 10px;
			}
			
			.moreinfo-link {
				padding-bottom:20px;
				border-bottom: 1px solid #fff;
			}
			.testimonial {
				background: transparent url('images/quote.png') top left no-repeat;
			}
			#testimonial-person {
				padding: 10px 0 0 10px;
			}

			span.linka { 
			  position:absolute; 
			  width:100%;
			  height:100%;
			  top:0;
			  left: 0;

			  /* edit: added z-index */
			  z-index: 1;

			  /* edit: fixes overlap error in IE7/8, 
			     make sure you have an empty gif */
			  background-image: url('empty.gif');
			}  

		</style>
	</head>
	<body>
		<div class="header">
			<div>
				<img src="images/lighthouse_logo_sm.png" id="smlogo">
				<ul id="headbar">
					<li>
						<input id="form-submit" name="op" value="" type="submit">
						<input onfocus="if (this.value == 'SEARCH') {this.value = '';}" onblur="if (this.value == '') {this.value = 'SEARCH'}" id="search-form" name="search_block_form" value="SEARCH" size="60" maxlength="128" class="form-text" type="text">
					</li>
					<li>
						<a href="#">LOGIN »</a>
					</li>
					<li>
						<a href="#">REGISTER</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="layout">
			<div id="logo">
				<img src="images/social_buttons.png" style="float:right; margin-top: 35px">
				<img src="images/lighthouse_logo.png">
			</div>
			<?php include('nav_default.php'); ?>
			<div class="spacing"></div>
			<div id="freewall" class="free-wall">
				<div class="brick size11 centro intro toefl">
					<div class='cover' style='background-image: url("images/toefl.jpg");'>
						<div class=''>
							<a href="toefl.html"><span class="linka"></span></a>
						</div>
					</div>
				</div>
				<div class="brick size11 intro">
					<div class='cover' style='background-image: url("images/stock4.jpg");'>
						<div class='intext'>
							<h2></h2>
						</div>
					</div>
				</div>
				<div class="brick size11 intro centro sat">
					<div class='cover' style='background-image: url("images/sat.jpg");'>
						<div class=''>
							<a href="sat.html"><span class="linka"></span></a>
						</div>
					</div>
				</div>
				<div class="brick size11 centro intro ielts">
					<div class='cover' data-filter=".ielts" style='background-image: url("images/ielts.jpg");'>
						<div class=''>
							<a href="ielts.html"><span class="linka"></span></a>
						</div>
					</div>
				</div>
				<div class="brick size11 intro">
					<div class='cover' style='background-image: url("images/stock2.jpg");'>
						<div class='intext'>
							<h2></h2>
						</div>
					</div>
				</div>
				<div class="brick size11 intro">
					<div class='cover' style='background-image: url("images/stock3.jpg");'>
						<div class='intext'>
							<h2></h2>
						</div>
					</div>
				</div>
				<div class="brick size22 centro intro">
					<div class='cover' data-filter=".book" style='background-image: url("images/publishing.jpg");'>
						<div class=''>
							<a href="books.html"><span class="linka"></span></a>
						</div>
					</div>
				</div>
				<div class="brick size11 intro">
					<div class='cover' style='background-image: url("images/stock1.jpg");'>
						<div class='intext'>
							<h2></h2>
						</div>
					</div>
				</div>
				<div class="brick size11 intro">
					<div class='cover' style='background-image: url("images/stock9.jpg");'>
						<div class='intext'>
							<h2></h2>
						</div>
					</div>
				</div>
				<div class="brick size11 centro intro opi">
					<div class='cover' style='background-image: url("images/opi.jpg");'>
						<div class=''>
							<a href="opi.html"><span class="linka"></span></a>
						</div>
					</div>
				</div>
				<div class="brick size11 intro">
					<div class='cover' style='background-image: url("images/stock7.jpg");'>
						<div class='intext'>
							<h2></h2>
						</div>
					</div>
				</div>
				<div class="brick size11 centro intro bulats">
					<div class='cover' style='background-image: url("images/bulats.jpg");'>
						<div class=''>
							<a href="bulats.html"><span class="linka"></span></a>
						</div>
					</div>
				</div>
				<div class="brick size11 centro intro toeic">
					<div class='cover' data-filter=".toeic" style='background-image: url("images/toeic.jpg");'>
						<div class=''>
							<a href="toeic.html"><span class="linka"></span></a>
						</div>
					</div>
				</div>
				<div class="brick size11 intro">
					<div class='cover' style='background-image: url("images/stock10.jpg");'>
						<div class='intext'>
							<h2></h2>
						</div>
					</div>
				</div>
				<div class="brick size11 centro intro opic">
					<div class='cover' data-filter=".opic" style='background-image: url("images/opic.jpg");'>
						<div class=''>
							<a href="opic.html"><span class="linka"></span></a>
						</div>
					</div>
				</div>
				<div class="brick size11 centro intro lap">
					<div class='cover' data-filter=".lap" style='background-image: url("images/lap.jpg");'>
						<div class=''>
							<a href="lap.html"><span class="linka"></span></a>
						</div>
					</div>
				</div>
				<div class="brick size11 intro">
					<div class='cover' style='background-image: url("images/stock11.jpg");'>
						<div class='intext'>
							<h2></h2>
						</div>
					</div>
				</div>
				<div class="brick size11 intro">
					<div class='cover' style='background-image: url("images/stock6.jpg");'>
						<div class=''>
							<h2></h2>
						</div>
					</div>
				</div>
				<div class="brick size11 intro">
					<div class='cover' style='background-image: url("images/stock8.jpg");'>
						<div class='intext'>
							<h2></h2>
						</div>
					</div>
				</div>
				<div class="brick size21 intro">
					<div class='cover' style='background-image: url("images/stock12.jpg");'>
						<div class='intext'>
							<h2></h2>
						</div>
					</div>
				</div>
				<div class="brick sizeINTRO intro" data-position="0-3">
					<div class='cover' style='background-image: url("images/light_up.jpg");'>
						<div class='intext'>
							<h2></h2>
						</div>
					</div>
				</div>
			</div>
			<div id="maincontainer">
				<div id="topsection">&nbsp;</div>
				<div id="contentwrapper">
					<div id="contentcolumn2">
						<div class="innertube"><h2>English Programs</h2>
							Our instructors have actual business experience in the west. Giving you first hand knowledge and expertise in the industry. We are experts in sales, marketing, and a wide range of engineering expertise. Our programs are designed to fit all your needs, and give you the knowledge required to excel in your field.<br><br>
							
						</div>
					</div>
				</div>
				<div id="leftcolumn2">
					<div class="innertube"><h2>Business English Programs</h2>
						Do you want to emprove your English speaking skills? Or do you need a specific English score for a promotion in your company. Well, we offer a wide range of English programs to meet your needs. Our programs are design by actual English Testers, therefore guaranting your success.<br><br>
						
					</div>
				</div>
				<div id="rightcolumn2">
					<div class="innertube"><h2>Communication &amp; Workshops</h2>
						<p>Our Communication and Expo Workshops are the best in the Industry. We provide Team Building Workshops for new employees or new departments. We have developed some of the best Leadeship Workshops for new managers. Our Expo Workshops will help your employees better understand their products, prepare them for any expo and is guaranteed to bring success.</p>
					</div>
				</div>
				<div id="contentwrapper">
					<div id="contentcolumn">
						<div class="innertube"><h2>Upcoming Programs</h2>
							<ul id="calendar">
								<li>
									<div class="calendar-date">
										Aug. 1
									</div>
									<div class="calendar-info">
										<a href="#">CONVERSATION CLASS</a><br>
										Increase your fluency and learn how to speak like a native speaker.
										Classes begin at the start of every month.
									</div>
								</li>
								<li>
									<div class="calendar-date">
										Aug. 8
									</div>
									<div class="calendar-info">
										<a href="#">MEETINGS &amp; NEGOTIATIONS</a><br>
										Learn how to conduct an effective meeting and western negotiation tactics.
									</div>
								</li>
								<li>
									<div class="calendar-date">
										Aug. 16
									</div>
									<div class="calendar-info">
										<a href="#">PRESENTATION SKILLS</a><br>
										Learn how to captivate your audience with effective books and a strong closing.
										6 week 18 hour presentation program, Saturdays from 9am - 12pm.
									</div>
								</li>
							</ul>
							<a href="#">View Full Calendar »</a>
						</div>
					</div>
				</div>

				<div id="leftcolumn">
					<div class="innertube"><h2>News &amp; Announcements</h2>
						<ul id="news">
							<li>
								<div class="news-title">
									<a href="#">New Book: BULATS Essentials</a>
								</div>
								<div class="news-image">
									<img src="images/new-bulats.jpg">
								</div>
								<div class="news-info">
									A new book that will guide you through all the hidden secrets of the test and give you tips on how to answer all the questions effectively.
								</div>
							</li>
							<li>
								<div class="news-title">
									<a href="#">New Leadership Program</a>
								</div>
								<div class="news-image">
									<img src="images/new-leadership.jpg">
								</div>
								<div class="news-info">
									Designed for executives, this new leadership program covers the fundamentals of effective management and team building skills.
								</div>
							</li>
							<li>
								<div class="news-title">
									<a href="#">Present Continuous vs. Present Perfect</a>
								</div>
								<div class="news-image">
									<img src="images/new-video.jpg">
								</div>
								<div class="news-info">
									Learn the differences between the two tenses and when to use them.
								</div>
							</li>
						</ul>
						<a href="#">View All News »</a>
					</div>
				</div>
				<div id="rightcolumn">
					<div class="innertube"><h2>Test Preparation</h2>
						<ul id="moreinfo" style="float:left">
							<li>
								<div class="moreinfo-link">
									<a href="lap.html">LAP »</a>
								</div>
							</li>
							<li>
								<div class="moreinfo-link">
									<a href="sat.html">SAT »</a>
								</div>
							</li>
							<li>
								<div class="moreinfo-link">
									<a href="tpefl.html">TOEFL »</a>
								</div>
							</li>
							<li>
								<div class="moreinfo-link">
									<a href="toeic.html">TOEIC »</a>
								</div>
							</li>
						</ul>
						<ul id="moreinfo" style="text-align:right">
							<li>
								<div class="moreinfo-link">
									<a href="bulats.html">BULATS »</a>
								</div>
							</li>
							<li>
								<div class="moreinfo-link">
									<a href="ielts.html">IELTS »</a>
								</div>
							</li>
							<li>
								<div class="moreinfo-link">
									<a href="opi.html">OPI »</a>
								</div>
							</li>
							<li>
								<div class="moreinfo-link">
									<a href="opic.html">OPIc »</a>
								</div>
							</li>
						</ul>
						<h2 id="break">Testimonial</h2>
						<ul class="testimonial">
							<li>
								<div>
									<em>“The 3 Day Presenatation program was an excellent way for me to understand the difference between Asian and Western presentation culture.”</em>
								</div>
								<div id="testimonial-person">
									<b>Tae Hyun Kim</b><br>International Sales Department 
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div id="footer">© 2014 Lighthouse Consulting. 
					<ul id="footer-nav">
				<li>
					<a href="#">ABOUT</a>
					
				</li>
				<li>
					<a href="#">PROGRAMS</a>
				</li>
				<li>
					<a href="#">WORKSHOPS</a>
				</li>
				<li>
					<a href="#">TEST PREP</a>
				</li>
				<li>
					<a href="#">PUBLISHING</a>
				</li>
				<li>
					<a href="#">CONTACT</a>
				</li>
			</ul>
				</div>
			</div>
		</div>
		<script type="text/javascript">
			
			$(function() {
				var wall = new freewall("#freewall");
				wall.reset({
					selector: '.brick',
					animate: false,
					gutterX: 0,
					gutterY: 0,
					cellW: 92,
					cellH: 92,
					fixSize: 0,
					onResize: function() {
						wall.refresh();
					}
				});
		
				wall.filter(".intro");
				$(".link").click(function() {
					$(".link").removeClass("active");
					var filter = $(this).addClass('active').data('filter');
					if (filter) {
						wall.filter(filter);
					} else {
						wall.unFilter();
					}
				});
				wall.fitWidth();
		
			});
		</script>
	</body>
</html>