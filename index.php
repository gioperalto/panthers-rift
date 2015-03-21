<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Panther's Rift - The biggest League of Legends tournament of the year for Florida International University Students">
		<meta name="keywords" content="Panther's Rift, Tournament, League of Legends, Panther, Rift, FIU, Florida International University, STARS, FIU STARS">
		<meta name="author" content="Gio Peralto-Pritchard">
		<link rel="shortcut icon" href="assets/img/favicon.ico">
		<title>Panther's Rift - An FIU Summoners Gathering</title>

		<!-- Bootstrap core CSS -->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet">
		<!-- Custom styles for this template -->
		<link href="assets/css/style.css" rel="stylesheet">
		<link href="assets/css/responsive.css" rel="stylesheet">
		<link href="assets/css/linecons.css" rel="stylesheet">
		<link href="assets/css/social-icons.css" rel="stylesheet">
		<link href="assets/css/font-awesome.min.css" rel="stylesheet">
		<link rel="stylesheet" href="assets/css/overrides.css">
		<!-- Web Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<script src="assets/js/modernizr.custom.js"></script>
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		  ga('create', 'UA-54461709-2', 'auto');
		  ga('send', 'pageview');
		</script>
	</head>
	<body data-spy="scroll" data-offset="0" data-target="#navigation">

		<!-- Fixed navbar -->
		<div id="navigation" class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="./">
						<b>Panther's Rift</b>
					</a>
				</div>

				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav cl-effect-13">
						<li class="dropdown">
						  <a href="" id="homeLabel" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						    Home
						    <span class="caret"></span>
						  </a>
						  <ul class="dropdown-menu" role="menu" aria-labelledby="homeLabel">
						    <li><a href="./#home" class="smoothScroll">Home</a></li>
							<li><a href="./#tournament" class="smoothScroll">Tournament</a></li>
							<li><a href="./#teams" class="smoothScroll">Teams</a></li>
							<li><a href="./#rules" class="smoothScroll">Rules</a></li>
							<li><a href="./#lineup" class="smoothScroll">Lineup</a></li>
							<li><a href="./#sponsors" class="smoothScroll">Sponsors</a></li>
						  </ul>
						</li>
						<li><a href="sponsors/">Become a Sponsor</a></li>						
					</ul>

					<!-- Sign In / Sign Up -->
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#signin" data-toggle="modal" data-target=".bs-modal-sm">
								Sign Up
							</a>
						</li>
						<div class="navbar-form pull-left">
							<a class="btn btn-sm btn-warning no-btn">
								<?php 
									// CONNECT TO DB
									include 'config/db-con.php';
									$registrations = 0;
									$selectAll = "SELECT user_id FROM competitor;";
									if($result = mysqli_query($conn,$selectAll)): 
										$registrations = mysqli_num_rows($result);
										echo $registrations . '/80 qualifiers';
									endif;
								?>
							</a>
						</div>
					</ul>
				</div><!--/nav-collapse -->
			</div><!-- /container -->
		</div><!-- /fixed-navbar -->

		<!-- Sign In / Sign Up Modal -->
		<div class="modal fade bs-modal-sm" id="myModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-sm">
				<div class="modal-content">
					<br>
					<div class="bs-example bs-example-tabs">
						<ul id="myTab" class="nav nav-tabs nav-justified">
							<li class="active"><a href="index.html#signup" data-toggle="tab">Register</a></li>
							<li class=""><a href="index.html#signin" data-toggle="tab">Admin?</a></li>
						</ul>
					</div>
					<div class="modal-body">
						<div id="myTabContent" class="tab-content">
							<!-- Sign Up Form -->
							<div class="tab-pane fade active in" id="signup">
								<form name="userForm" method="post" action="user/submit.php">
									<fieldset>
										<!-- Text input-->
										<div class="control-group">
											<label class="control-label" for="name">Name:</label>
											<div class="controls">
												<input id="name" name="name" class="form-control" type="text" placeholder="Your first and last name" class="input-large" required="">
											</div>
										</div>

										<!-- Text input-->
										<div class="control-group">
											<label class="control-label" for="email">Email:</label>
											<div class="controls">
												<input id="email" name="email" class="form-control" type="text" placeholder="Your email address" class="input-large" required="">
											</div>
										</div>

										<!-- Text input-->
										<div class="control-group">
											<label class="control-label" for="summoner_name">*Summoner Name:</label>
											<div class="controls">
												<input id="summoner_name" name="summoner_name" class="form-control" type="text" placeholder="Your summoner name" class="input-large" required="">
											</div>
										</div>

										<!-- Button -->
										<div class="control-group">
											<label class="control-label" for="signup"></label>
											<div class="controls">
												<button id="signupButton" type="button" class="btn btn-theme btn-block">Register Me</button>
											</div>
										</div>

										<div class="form-padding">
											<span class="small">* See rules for specific information regarding registration</span>
										</div>

									</fieldset>
								</form>
							</div><!-- /signup -->
							<!-- Sign In Form -->
							<div class="tab-pane fade in" id="signin">
								<form class="form-horizontal" method="post" action="admin/login.php">
									<fieldset>
										<!-- Text input-->
										<div class="control-group">
											<label class="control-label" for="adminEmail">Email:</label>
											<div class="controls">
												<input id="adminEmail" name="adminEmail" class="form-control input-large" type="email" placeholder="Your email address" required="">
											</div>
										</div>

										<!-- Password input-->
										<div class="control-group">
											<label class="control-label" for="adminPassword">Password:</label>
											<div class="controls">
												<input id="adminPassword" name="adminPassword" class="form-control input-medium" type="password" placeholder="********" required="">
											</div>
										</div>

										<!-- Button -->
										<div class="control-group">
											<label class="control-label" for="signin"></label>
											<div class="controls">
												<button type="submit" class="btn btn-theme btn-block">Sign In</button>
											</div>
										</div>
									</fieldset>
								</form>
							</div><!-- /signin -->
						</div><!-- /tab-content -->
					</div><!-- /modal-body -->

					<div class="modal-footer">
						<center>
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</center>
					</div>
				</div><!-- /modal-content -->
			</div><!-- /modal-dialog -->
		</div><!-- /modal -->

		<!-- Header Wrap -->
		<section id="home" name="home"></section>
		<div id="headerwrap">
			<div class="container">
				<div class="row text-center">
					<div class="col-lg-12">
						<?php if(isset($_GET['success'])){ ?>
							<div class="alert alert-success alert-dismissible" role="alert">
							  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							  <strong>Success!</strong> You have registered for the tournament.
							</div>
						<?php } else if(isset($_GET['fail'])) { ?>
							<div class="alert alert-warning alert-dismissible" role="alert">
							  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							  <strong>Problem!</strong> This user has already entered the tournament.
							</div>
						<?php } else if(isset($_GET['invalid'])) { ?>
							<div class="alert alert-danger alert-dismissible" role="alert">
							  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							  <strong>Error!</strong> Invalid user data.
							</div>
						<?php } else if(isset($_GET['nodata'])) { ?>
							<div class="alert alert-warning alert-dismissible" role="alert">
							  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							  <strong>Problem!</strong> Riot has no data on your account.
							</div>
						<?php } else if(isset($_GET['confirmed'])) { ?>
							<div class="alert alert-warning alert-dismissible" role="alert">
							  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							  <strong>Warning!</strong> You have already been confirmed as a competitor or sub for this tournament.
							</div>
						<?php } else if(isset($_GET['main'])) { ?>
							<div class="alert alert-success alert-dismissible" role="alert">
							  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							  <strong>Success!</strong> You have been successfully added as a guarenteed competitor for the qualifier.
							</div>
						<?php } else if(isset($_GET['sub'])) { ?>
							<div class="alert alert-warning alert-dismissible" role="alert">
							  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							  <strong>Success, Maybe?</strong> Unfortunately we couldn't add you as a guarenteed competitor, but if anything happens you could get in.
							</div>
						<?php } ?>
						
						<h1>Welcome To <b>Panther's Rift</b></h1>
						<h3>Become a part of the most epic League of Legends Tournament in FIU history.</h3>
						<br>
					</div>

					<div class="col-lg-2 hidden-xs hidden-sm hidden-md">
						<h5>8 teams to rule them all</h5>
						<p>We plan to have an all day tournament with food, a big venue and all that good stuff.</p>
					</div>
					<div class="col-lg-8">
						<img class="img-responsive" src="assets/img/ali-bg.png" alt="">
						<!--<h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h4>
						<a href="index.html#tournament" type="submit" class="btn btn-lg btn-theme smoothScroll">LEARN MORE</a>-->
					</div>
					<div class="col-lg-2 hidden-xs hidden-sm hidden-md">
						<br>
						<h5>Bring the madness</h5>
						<p>We'll have pizza, prizes and tons of incentives for you to come to this event.</p>
					</div>
				</div>
			</div> <!-- /container -->
		</div><!-- /headerwrap -->


		<!-- Intro Wrap -->
		<div id="intro">
			<div class="container">
				<div class="row text-center">
					<h2>A Different Kind of Innovation</h2>
					<hr>
					<br>
					<br>
					<div class="col-lg-3">
						<licon class="li_food"></licon>
						<h3>Tons of Food</h3>
						<p>We will be placing a lot of pizza and food orders for our attendees.</p>
					</div>
					<div class="col-lg-3">
						<licon class="li_banknote"></licon>
						<h3>Free</h3>
						<p>Did we forget to mention that this tournament is free to participate in?</p>
					</div>
					<div class="col-lg-3">
						<licon class="li_display"></licon>
						<h3>Entertainment</h3>
						<p>We are planning awesome activities to make this event even more fun.</p>
					</div>
					<div class="col-lg-3">
						<a href="https://www.facebook.com/panthersrift" target="_blank"><licon class="li_like"></licon></a>
						<h3>Like on Facebook</h3>
						<p>Join our Facebook page and see all the crazy things leading up to the event.</p>
					</div>
				</div>
				<br>
			</div> <!-- /container -->
		</div><!-- /introwrap -->


		<!-- Features Wrap -->
		<section id="tournament" name="features"></section>
		<div id="featureswrap">
			<div class="container">
				<div class="row">
					<h2 class="text-center">Tournament</h2>
					<hr>
					<br>
					<br>
					<div class="col-lg-6">
						<img class="img-responsive" src="assets/img/logo.png" alt="">
					</div>

					<div class="col-lg-6">
						<h4>The break down</h4>
						<p>Sixteen teams enter the qualifier, eight teams will enter the official tournament and one team wins. Eight teams
						 will be matched in a best of one match for the first round, which is also an elimination round. The four surviving teams
						  of the elimination round will play a best-of-3 match series to advance to the final bracket. Our two finalist teams
						   will compete in a best-of-5 match series to take home the grand prize.</p>
						<br>
						<div class="accordion-group">
							<div class="accordion-heading">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion4" href="./#collapseFour">
								<i class="fa fa-trophy"></i> Prizes
								</a> (Click for info)
							</div>
							<div id="collapseFour" class="accordion-body collapse in">
								<div class="accordion-inner">
									<ul>
										<li>1st Place - 3200 RP and Triumphant Ryze Skin for every player</li>
										<li>2nd Place - 2400 RP per player</li>
										<li>3rd Place - 1600 RP per player</li>
										<li>4th Place - 800 RP per player</li>
									</ul>
								</div><!-- /accordion-inner -->
							</div><!-- /collapse -->
						</div><!-- /accordion-group -->
						<br>
					</div><!-- /accordion -->
				</div><!-- /row -->
			</div><!-- /container -->
		</div><!-- /featureswrap -->


		<!-- Features Wrap -->
		<section id="teams" name="features"></section>
		<div id="featureswrap">
			<div class="container">
				<div class="row">
					<h2 class="text-center">Teams</h2>
					<hr>
					<p class="text-center">
						Below are the official teams to enter the Panther's Rift Main Event!
					<br>Based on the results, we believe any team could come out on top.
					<br>Summoners highlighted in <span class="glow">yellow</span> are subject to change
					</p>
		
					<div class="row text-center paper">
						<div class="col-sm-3">
							<span class="text-center power serious push-right">Team A</span>
							<ol>
								<li>ddthorn</li>
								<li>Daltherion</li>
								<li>Xenusus</li>
								<li>pronetiger</li>
								<li>Enmanuelgg</li>
							</ol>
						</div>
						<div class="col-sm-3">
							<span class="text-center power serious push-right">Team B</span>
							<ol>
								<li>Poisoneye</li>
								<li>faldin</li>
								<li>zreize</li>
								<li>OhGeeNivi</li>
								<li>Deadopolis</li>
							</ol>
						</div>
						<div class="col-sm-3">
							<span class="text-center power serious push-right">Team C</span>
							<ol>
								<li>Chimera41</li>
								<li>PaleoEpic</li>
								<li>ReddLaw</li>
								<li>Exelight</li>
								<li>Galeonez</li>
							</ol>
						</div>
						<div class="col-sm-3">
							<span class="text-center power serious push-right">Team D</span>
							<ol>
								<li>Jabkal</li>
								<li>Saggytitis</li>
								<li>Inzinity</li>
								<li>jasodysseus</li>
								<li>leeroyj123</li>
							</ol>
						</div>
					</div>
					<br>
					<div class="row text-center paper">
						<div class="col-sm-3">
							<span class="text-center power serious push-right">Team E</span>
							<ol>
								<li>Secretic</li>
								<li>LOMO420</li>
								<li>skulledg2</li>
								<li>Aerodon</li>
								<li>Nickymaree0490</li>
							</ol>
						</div>
						<div class="col-sm-3">
							<span class="text-center power serious push-right">Team G</span>
							<ol>
								<li>NicolastehGreat</li>
								<li>raccoonlove</li>
								<li>LucidNightmare</li>
								<li>mathmonkey</li>
								<li>Livan</li>
							</ol>
						</div>
						<div class="col-sm-3">
							<span class="text-center power serious push-right">Team H</span>
							<ol>
								<li>Daylight</li>
								<li>Trishoryuken</li>
								<li>Tripwire305</li>
								<li>Devinfuture</li>
								<li>aurology</li>
							</ol>
						</div>
						<div class="col-sm-3">
							<span class="text-center power serious push-right">Team F</span>
							<ol>
								<li>MrSuperior</li>
								<li>Tunabarrage</li>
								<li>Panconpeenga</li>
								<li>mikinator5</li>
								<li>ZerkerMiner</li>
							</ol>
						</div>
						
					</div>
				</div>
			</div>
		</div><!-- /featureswrap -->


		<!-- Features Wrap -->
		<section id="tournament" name="rules"></section>
		<div id="featureswrap">
			<div class="container">
				<div class="row">
					<h2 class="text-center">Rules</h2>
					<p class="text-center">By attending this tournament you agree to the following rules:</p>
					<hr>
					<br>
					<br>

					<div class="col-lg-6">
						<h2><i class="fa fa-warning"></i> Tournament Rules </h2>
						<div class="tournament-item">
							<h4>1. Tournament Organizer(s)</h4>
							<p>A Tournament Organizer cannot enter the tournament his/her self.</p>
							<p>Tournament organizers are responsible for:
								<ul>
									<li>Food needs as described by organizer</li>
									<li>A suitable venue for you to compete or spectate in</li>
									<li>Providing tournament officials of various roles to operate event</li>
									<li>Providing subs for teams in the event that a player fails to make it</li>
								</ul>
							</p>
						</div>
						<div class="tournament-item">
							<h4>2. Referees</h4>
							<p>Referees will be appointed by tournament organizer(s) to ensure the appropriate
								handling of delicate circumstances. Referee responsibilities include dealing
								with the breach of any specified tournament rules, the breaking of any policy
								rule violations brought to his attention and issuing penalties when players break
								these rules.</p>
							<p>These rules include (but are not limited to):
								<ul>
									<li>Using scripts (not provided by LoL) to enhance gameplay</li>
									<li>Leaving a game during a match (rage quitting)</li>
									<li>Treating fellow teammates disrepectfully</li>
									<li>Bartering for another match style than what was specified</li>
									<li>Entering the tournament under a smurf account</li>
								</ul>
							</p>
							<p>Penalties that can be issued (but are not limited to):
								<ul>
									<li>The repetition of a match in order to ensure fairness</li>
									<li>Removing a player from play for 1 minute</li>
									<li>Removing a player from play for 5 minutes</li>
									<li>Disqualification from a match</li>
									<li>Ejection from tournament</li>
								</ul>
							</p>
						</div>
						<div class="tournament-item">
							<h4>3. Shoutcasters</h4>
							<p>Shoutcasters are tournament support staff charged with providing commentary to spectators.
							Shoutcasters are appointed by tournament official(s) and are responsible for providing engaging
							commentaries of matches without jeopardizing the fairness of the tournament matches in progress.</p>
							<p>The following is classification of jeopardizing a tournament match in progress:
								<ul>
									<li>Suggesting specified improvements to gameplay style of an active player</li>
									<li>Predicting future trends of an active match that may alter the outcome</li>
									<li>Signaling in any way to a player as they are playing</li>
								</ul>
							</p>
						</div>
						<div class="tournament-item">
							<h4>4. Players</h4>
							<p>The most important rule with any player is that they need to represent good sportsmanship at
								all times. </p>
							<p>These are some essential rules we need you to follow as a contestant in Panther's Rift:
								<ul>
									<li>Arrive on time to your match</li>
									<li>Bring any infraction to the notice of a referee or tournament official</li>
									<li>Bring any discrepencies in match record to attention immediately</li>
									<li>Inform Riot of any discrepencies in match history or rankings as soon as you become
									 aware of it</li>
								 	<li>We recommend you bring your own equipment, however if necessary equipment will
								 		be provided</li>
								</ul>
							</p>
						</div>
						<div class="tournament-item">
							<h4>5. Team Captain</h4>
							<p>Every team will be responsible with electing a team captain. Captains are the main point
								of contact between players on their team and tournament officials.</p>
							<p>Some responsibilities of the Team Captain include:
								<ul>
									<li>Communicate with tournament officials on behalf of your team</li>
									<li>Communicate with other teams on behalf of your team</li>
									<li>Act as final authority for team decisions during the tournament</li>
									<li>Communicate all required information to the entire team</li>
									<li>Accurately represent the opinions of the team as a whole</li>
								</ul>
							</p>
						</div>
						<div class="tournament-item">
							<h4>6. Spectators</h4>
							<p>Spectators are more than welcome to this tournament. We plan to have a lot of excitement
								and activities, however you follow the same set of rules as our commentators. We want a
								fun, unified environment without breaking the balance of our tournament.</p>
						</div>
					</div>

					<div class="col-lg-6">
						<h2><i class="fa fa-sitemap"></i> Tournament Mechanics </h2>
						<div class="tournament-item">
							<h4>General Rules</h4>
							<p>All matches will be played on Summoner's Rift. Your team will have 5 minutes to prepare
								for the match.</p>
						</div>
						<div class="tournament-item">
							<h4>Panther's Rift Qualifier</h4>
							<p>The Panther's Rift Qualifier will be a Single-Elimination tournament. This means a team
								that loses once is eliminated. This tournament will also consist of 8 matches, reducing
								16 teams to 8.</p>
							<p>The <strong>Panther's Rift Qualifier</strong> will be held from 12-6pm on March 7th, 2015 at FIU (Florida
								International University) MMC (Modesto A. Modique Campus) in CP (Chemistry & Physics) building
								room 145</p>
						</div>
						<div class="tournament-item">
							<h4>Panther's Rift Main Event</h4>
							<p>The Panther's Rift Main event will consist of three bracket styles: Single, Double and Triple
								Elimination.
								<ul>
									<li>The 8 entering teams will have a Single-Elimination round (4 will advance)</li>
									<li>The 4 advancing teams will have a Double-Elimination round (2 will advance)</li>
									<li>The final 2 teams will have a Triple-Elimination round to determine our winner</li>
								</ul>
							</p>
							<p>The <strong>Panther's Rift Main Event</strong> will be held from 12-6pm on March 21st, 2015 at FIU (Florida
								International University) MMC (Modesto A. Modique Campus) in CP (Chemistry & Physics) building
								room 145</p>
						</div>
					</div>
				</div><!-- /row -->
				
			</div><!-- /container -->
		</div><!-- /featureswrap -->


		<!-- Features Wrap -->
		<section id="lineup" name="features"></section>
		<div id="featureswrap">
			<div class="container">
				<h2 class="text-center">Saturday Lineup</h2>
				<hr>
				<p class="text-center">Below are the remaining matches for the tournament:
					<br><span class="small">* matches may end later than expected</span></p>
				<br>
				<br>
				<div class="row text-center paper">
					<ol>
						<li class="power serious">Match 1 - Team A vs Team G - 12-1PM*</li>
						<li class="power serious">Match 2 - Team E vs Team H - 12-1PM*</li>
						<li class="power serious">Match 3 - Team B vs Team C - 1-2PM*</li>
						<li class="power serious">Match 4 - Team D vs Team F - 1-2PM*</li>
						<li class="power serious">Team 1 vs Team 4 - 2:30-5PM*</li>
						<li class="power serious">Team 2 vs Team 3 - 2:30-5PM*</li>
						<li class="power serious">Final Match - Starts at 5:30PM*</li>
					</ol>
				</div>
			</div>
		</div>
	

		<!-- Footer Wrap -->
		<section id="sponsors"></section>
		<div id="footerwrap">
			<div class="container">
				<div class="row">
					<h1>Diamond Sponsors</h1>
				</div><!-- /row -->
				<div class="row">
					<div class="col-lg-4">
					</div>
					<div class="col-lg-4">
						<a href="sponsors/"><h1>Become a Diamond Sponsor</h1></a>
						<!-- INSERT SPONSOR HERE -->
					</div>
					<div class="col-lg-4">
						<!-- INSERT SPONSOR HERE -->
					</div>
				</div>
				<div class="row">
					<h2>Platinum Sponsors</h2>
					<div class="col-lg-3">
					</div>
					<div class="col-lg-3">
						<!-- INSERT SPONSOR HERE -->
					</div>
					<div class="col-lg-3">
						<a href="sponsors/"><h2>Become a Platinum Sponsor</h2></a>
						<!-- INSERT SPONSOR HERE -->
					</div>
					<div class="col-lg-3">
						<!-- INSERT SPONSOR HERE -->
					</div>
				</div><!-- /row -->
				<div class="row">
					<h3>Gold Sponsors</h3>
					<div class="col-lg-2">
					</div>
					<div class="col-lg-2">
						<!-- INSERT SPONSOR HERE -->
					</div>
					<div class="col-lg-2">
						<!-- INSERT SPONSOR HERE -->
					</div>
					<div class="col-lg-2">
						<!-- INSERT SPONSOR HERE -->
					</div>
					<div class="col-lg-2">
						<a href="sponsors/"><h3>Become a Gold Sponsor</h3></a>
						<!-- INSERT SPONSOR HERE -->
					</div>
					<div class="col-lg-2">
						<!-- INSERT SPONSOR HERE -->
					</div>
				</div><!-- /row -->

			</div><!-- /container -->
		</div><!-- /footerwrap -->


		<!-- Divider 2 Section -->
		<div id="divider02">
			<div class="container text-center">
				<h3>Hosted by <a class="grey" target="_blank" href="http://stars.cs.fiu.edu">FIU STARS</a> and <a class="grey" target="_blank" href="http://cs.fiu.edu/acm">FIU ACM</a>.</h3>
			</div>
		</div><!-- /divider02 -->


		<!-- Copyright Wrap -->
		<div id="copywrap">
			<div class="container">
				<div class="row">
					<div class="col-lg-10">
						<p>Copyright &copy; <?php echo date('Y'); ?> Panther's Rift. All Rights Reserved.</p>
					</div>
				</div><!-- /row -->
			</div><!-- /container -->
		</div><!-- /copywrap (copyright) -->


		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="assets/js/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/smoothscroll.js"></script>
		<!-- Inline script -->
		<script type="text/javascript">
			$("#signupButton").click(function() {
				$("#summoner_name").val($("#summoner_name").val().replace(" ",""));
				document.forms["userForm"].submit();
			});
		</script>
	</body>
</html>
