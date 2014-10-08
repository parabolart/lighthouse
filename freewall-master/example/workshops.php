<!DOCTYPE html>
<html>
	<head>
		<title>Lighthouse Publishing</title>
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
				background-size: 95% 95%;
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
				padding-bottom: 10px;
				
			}
			#topsection h1 {
				margin: 0;
				padding-top: 15px;
				font-weight: bold;
			}
			#contentwrapper {
				float: left;
				width: 100%;
			}
			#contentcolumn {
				margin: 0 305px 0 305px;
				padding: 2px;
			}
			#leftcolumn {
				float: left;
				width: 305px;
				margin-left: -920px;
				background-color: #eee;
			}
			#rightcolumn {
				float: left;
				width: 305px;
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

			#maincontainer h2#testi {
				padding-top: 10px;
				margin-bottom: 14px;
			}
			
			#contentcolumn h2 {
				border-bottom: 2px solid #eee;
			}
			
			#leftcolumn h2, #rightcolumn h2 {
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
				<a href="index.php"><!--<img src="images/lighthouse_logo_sm.png" id="smlogo"></a>-->
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
				<a href="index.php"><img src="images/lighthouse_logo.png"></a>
			</div>
			<?php include('nav_default.php'); ?>
			<div class="spacing"></div>
			<div  class="free-wall">

			</div>
			<div id="maincontainer">
				<div id="topsection"><h1>Workshops</h1></div>
				<div><p>Lighthouse Consulting offers a wide range of programs and workshops to help your company perform on the international stage. We offer English and Business English programs. We have designed some outstanding and creativity Team Bulding and Leadership workshops. We also have some fantastic Expo workshops to prepare employees to be sucessfully in the international market.</p></div>
				<div id="contentwrapper">
					<div id="contentcolumn">
						<div class="innertube">
							<h2>Intensive English Speaking Program<br><br><img src="images/pages/workshop1.png" width="265"></h2><b>4 week Intensive English Program</b>
							<p><b>Objective:</b> To improve overall English speaking ability. Participates in this program will advance one sub-level within their level. For example, a novice high would move to an intermediate low level.</p>
							<p><b>Global Tasks:</b> Please refer our Assessment Speaking Criteria.</p>
							<p><b>Course Requirements:</b> This program is adaptable for novice and intermediate level English speakers. The material is alternated pending the level.</p>

							<h2 id="break">Presentation Essentials Workshop<br><br><img src="images/pages/workshop4.png" width="265"></h2><b>3 Day Intensive Presentation Skills Program</b>
							<p><b>Objective:</b> To prepare students to make successful presentations according to International standards.</p>
							<p><b>Global Tasks:</b> Students will be able to successfully deliver a presentation based on their job, product, or service.</p>
							<p><b>Course Requirements:</b> Intermediate English Proficiency Level or Successful completion of IES Program.</p>

							<h2 id="break">Leadership Workshop<br><br><img src="images/pages/workshop7.png" width="265"></h2><b>3 Day Effective Management Workshop</b>
							<p><b>Objective:</b> To prepare managers to with the necessary skills, knowledge and techniques to organize  their team for success.</p>
							<p><b>Global Tasks:</b> Managers will be able to successfully be able to understand what drives and motivates their team, how to create and environment where the entire team is involved in the processes . The manager will create a foundation for real teamwork by helping their staff understand their roles and the purpose of the project.</p>
							<p><b>Course Requirements:</b> Intermediate English Proficiency Level or Successful completion of IES   Program.</p>

							<h2 id="break">COEX Expo<br><br><img src="images/pages/workshop10.png" width="265"></h2><b>5 Day Business English &amp; Business Skills Presenation Workshop</b>
							<p><b>Objective:</b> This workshop is designed to improve employees English skills, business skills, and give employees the opportunity to discuss and present a product process or service in relationship to their job.</p>
							<p><b>Global Tasks:</b> Employees will be able to use business language and discuss daily work routines. They will learn the necessary skills to write emails, make a presentation, conduct a meeting and learn negotiation skills.</p>
							<p><b>Course Requirements:</b> Intermediate high English Proficiency Level or Successful completion of BE Program</p>
						</div>
					</div>
				</div>
				<div id="leftcolumn">
					<div class="innertube">						
							<h2>Business English Program<br><br><img src="images/pages/workshop2.png" width="265"></h2><b>4 week Business Skill Program</b>
							<p><b>Objective:</b> To improve overall English speaking ability to successfully perform in a Business Environment.</p>
							<p><b>Global Tasks:</b> Participates will be able to describe their company, their company organization, products, and business performance. As well as giving opinions and predictions, discussing processes and procedures and reporting on progress. They will also be able to suggest requirements, compare and outline plans and schedules.</p>
							<p><b>Course Requirements:</b> This program is most suitable for intermediate level English speakers or participates who have completed the IESP.</p>

							<h2 id="break">Meeting &amp; Negotiation Workshop<br><br><img src="images/pages/workshop5.png" width="265"></h2><b>3 Day Intensive Business Skills</b>
							<p><b>Objective:</b> To prepare employees to successfully conduct effective meetings and learn western negotiation tactics, language and strategies.</p>
							<p><b>Global Tasks:</b> Employees will be able to effectively conduct a meeting and negotiation in English. As well as understand the cultural differences between east and west.</p>
							<p><b>Course Requirements:</b> Intermediate English Proficiency Level or Successful completion of IES Program.</p>

							<h2 id="break">Team Building Workshop<br><br><img src="images/pages/workshop8.png" width="265"></h2><b>3 Day Effective Communication Workshop</b>
							<p><b>Objective:</b> To prepare new employees to with the necessary understand and skills to work successfully within a team, to develop new relationships that will last a lifetime, and trust their fellow coworkers.</p>
							<p><b>Global Tasks:</b> New employees will go through a series of structured and stimulating exercises , and conversations with fellow coworkers to prepare them for their new job or team and successfully work effectively within their new team.</p>
							<p><b>Course Requirements:</b> No requirements.</p>

							<h2 id="break">Knowledge Expo<br><br><img src="images/pages/workshop11.png" width="265"></h2><b>5 Day Information Share Expo</b>
							<p><b>Objective:</b> Employees will have the opportunity to present and share their products, processes and services. This workshop is designed to allow all members to better understand the final product or service, and to create and easier work flow within the company.</p>
							<p><b>Global Tasks:</b> This workshop allows employees to share their products, processes, knowledge, difficulties, and strengths &amp; weaknesses with other members of the company.</p>
							<p><b>Course Requirements:</b> Intermediate high English Proficiency Level or Successful completion of IESP/BE Program.</p>
						</div>
				</div>
				<div id="rightcolumn">
					<div class="innertube">
							<h2>Advanced Business Training Program<br><br><img src="images/pages/workshop3.png" width="265"></h2><b>2 Week Business Skills Program</b>
							<p><b>Objective:</b> To prepare students for real life business situations in the international market.</p>
							<p><b>Global Tasks:</b> Upon successful completion of this program students will be able to make telephone calls, write emails, conduct meetings and negotiations, and make presentations in English, and understand the western culture of business.</p>
							<p><b>Course Requirements:</b> Intermediate High English Proficiency Level or Successful completion of The BE Program.</p>

							<h2 id="break">Correspondence Workshop<br><br><img src="images/pages/workshop6.png" width="265"></h2><b>3 Day Email and Telephoning Workshop</b>
							<p><b>Objective:</b> To prepare students with the necessary language and techniques to correspond and make telephone calls with International clients.</p>
							<p><b>Global Tasks:</b> Students will be able to successfully write emails and make phone calls based on a variety of different business situations.</p>
							<p><b>Course Requirements:</b> Intermediate English Proficiency Level or Successful completion of IES Program.</p>

							<h2 id="break">ESP Expo<br><br><img src="images/pages/workshop9.png" width="265"></h2><b>5 Day English Speaking and Presentation Expo Workshop</b>
							<p><b>Objective:</b> This workshop is designed to improve employees English skills, and teach employees the fundamentals of a good presentation. Employees will also have the opportunity to discuss and present a product process or service in relationship to their job.</p>
							<p><b>Global Tasks:</b> Employees will be able to discuss daily routines, talk about their jobs, give short speeches. They will also learn the necessary skills to make a presentation.</p>
							<p><b>Course Requirements:</b> Intermediate Low English Proficiency Level</p>

							<h2 id="break">Global Expo Staff Preparation Program<br><br><img src="images/pages/workshop12.png" width="265"></h2><b>5 Day Preparation and Training for Overseas or International Expos</b>
							<p><b>Objective:</b> To prepare company employees with the necessary skills, language, knowledge and techniques to prepare and succeed at an international expo.</p>
							<p><b>Global Tasks:</b> Employees will be able to establish pre show strategies and tactics, prepare ROI and goals, learn best and worst booth practices, learn how to successfully perform post-show follow-ups and emails, and handle Q&amp;A from visitors.</p>
							<p><b>Course Requirements:</b> Intermediate high English Proficiency Level or Successful completion of BE Program.</p>
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