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
					<a class="navbar-brand" href="./"><b>Panther's Rift</b></a>
				</div>

				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav cl-effect-13">
						<li><a href="./#home" class="smoothScroll">Home</a></li>
						<li><a href="./#tournament" class="smoothScroll">Tournament</a></li>
					</ul>

					<!-- Sign In / Sign Up -->
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown"><a href="#signin" data-toggle="modal" data-target=".bs-modal-sm"><span class="icon-lock"></span> Sign Up</a></li>
						<div class="navbar-form pull-left">
							<a class="btn btn-sm btn-theme no-btn">
								<?php 
									// CONNECT TO DB
									include 'config/db-con.php';
									$selectAll = "SELECT user_summoner_name FROM user;";
									if($result = mysqli_query($conn,$selectAll)): 
										echo mysqli_num_rows($result) . ' registrations';
									endif;
									// CLOSE CONNECTION
									mysqli_close($conn);
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
							<li class=""><a href="index.html#signup" data-toggle="tab">Register</a></li>
						</ul>
					</div>
					<div class="modal-body">
						<div id="myTabContent" class="tab-content">
							<!-- Sign In Form -->
							<div class="tab-pane fade active in" id="signin">
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
												<button id="signup" type="button" class="btn btn-theme btn-block">Register Me</button>
											</div>
										</div>

										<div class="form-padding">
											<span class="small">* See rules for specific information regarding registration</span>
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
							  <strong>Error!</strong> Invalid request to create account.
							</div>
						<?php } else if(isset($_GET['nodata'])) { ?>
							<div class="alert alert-warning alert-dismissible" role="alert">
							  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							  <strong>Problem!</strong> Riot has no data on your account.
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
						<img class="img-responsive" src="assets/img/bracket-img.png" alt="">
					</div>

					<div class="col-lg-6">
						<br>
						<!-- Accordion -->
						<div class="accordion ac" id="accordion2">
							<div class="accordion-group active">
								<div class="accordion-heading">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="./#collapseOne">
									The break down
									</a>
								</div><!-- /accordion-heading -->
								<div id="collapseOne" class="accordion-body collapse in">
									<div class="accordion-inner">
									<p>Eight teams will enter the tournament, and one will win. Eight teams will be matched up with one another at random for the first round, which is an elimination round. The four surviving teams of the elimination round will play a best-of-3 match series to advance to the final bracket. Our two finalist teams will compete in a best-of-5 match series to take home the grand prize.</p>
									</div><!-- /accordion-inner -->
								</div><!-- /collapse -->
							</div><!-- /accordion-group -->
							<br>

							<div class="accordion-group">
								<div class="accordion-heading">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="./#collapseTwo">
									<i class="fa fa-map-marker"></i> Venue
									</a> (Click for info)
								</div>
								<div id="collapseTwo" class="accordion-body collapse">
									<div class="accordion-inner">
										<ul>
											<li>The tournament will be hosted at Florida International University Modesto A. Maidique Campus</li>
											<li>Exact location and date are TBA (To Be Announced), however we plan to have the all-day event on a Saturday in
											the first half of March</li>
										</ul>
									</div><!-- /accordion-inner -->
								</div><!-- /collapse -->
							</div><!-- /accordion-group -->
							<br>

							<div class="accordion-group">
								<div class="accordion-heading">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="./#collapseThree">
									<i class="fa fa-warning"></i> Rules
									</a> (Click for info)
								</div>
								<div id="collapseThree" class="accordion-body collapse">
									<div class="accordion-inner">
										<ul>
											<li>You are not in control of the team you are on (we have algorithms for that)</li>
											<li>All matches will be played in 5v5 format on Summoners Rift</li>
											<li>Rage quit and you will be ejected from the tournament</li>
											<li>After you are assigned a team, you have two weeks to prepare as a group</li>
											<li>Registrant account must be on League NA Server</li>
											<li>You are not allowed to use scripts</li>
										</ul>
									</div><!-- /accordion-inner -->
								</div><!-- /collapse -->
							</div><!-- /accordion-group -->
							<br>

							<div class="accordion-group">
								<div class="accordion-heading">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="./#collapseFour">
									<i class="fa fa-trophy"></i> Prizes
									</a> (Click for info)
								</div>
								<div id="collapseFour" class="accordion-body collapse">
									<div class="accordion-inner">
										<ul>
											<li>Pizza and drinks will be available for all attendees</li>
											<li>RP distribution is still being finalized</li>
											<li>The winning team gets a trophy and university-wide bragging rights</li>
											<li>More prizes yet to be announced</li>
										</ul>
									</div><!-- /accordion-inner -->
								</div><!-- /collapse -->
							</div><!-- /accordion-group -->
							<br>
						</div><!-- /accordion -->
					</div>
				</div><!-- /row -->
				<br><br><br>
				<div class="row">
					<h2 class="text-center">Teams</h2>
					<hr><br><br>
					<div class="col-lg-2"></div>
					<div class="col-lg-4">
						<br><br>
						<h4><i class="fa fa-users"></i> Which team will you be a part of?</h4>
						<p>We threw together some random team names that we thought would be funny and entertaining at the same time. There's nothing like a random niche word when it comes to inspiring people to work together!</p>
						<ul>
							<li>Team Bankai</li>
							<li>Team Fuego</li>
							<li>Team Hot Sauce</li>
							<li>Team Mordor</li>
							<li>Team Pollo</li>
							<li>Team Sparta</li>
							<li>Team SSD</li>
							<li>Team Trollo</li>
						</ul>
						<br><br>
					</div>

					<div class="col-lg-6">
						<img class="img-responsive" src="assets/img/teemo-img.png" alt="">
					</div>
				</div>
				<br><br><br>
				<div class="row">
					<h2 class="text-center">Solutions</h2>
					<hr><br><br>
					<div class="col-lg-6">
						<img class="img-responsive" src="assets/img/vayne-img.png" alt="">
					</div>
					<div class="col-lg-6">
						<br><br>
						<h4><i class="li_world"></i> We may not be rocket scientists but...</h4>
						<p>We've assembled a team of Solutions Engineers to develop an algorithm that effectively balances team distribution.
							We can't go into many details at the moment, but this algorithm should level the playing field.</p>
						<br><br>
						<h4><i class="fa fa-question-circle"></i> Did you know?</h4>
						<p>The reason we ask for your Summoner Name is not only for the tournament. We also get your ranked player
							information from Riot in order to provide data for the algorithm we're building.</p>
						<br><br>
						<h4><i class="fa fa-puzzle-piece"></i> But you already have 8 teams?</h4>
						<p>We honestly never foresaw the level of growth our site is currently experiencing, but that's not a bad thing.
							I'm sure we can all agree that League of Legends is a pretty big deal, and we want to show people that. 
							Anyways, that's why we have a Solutions Engineering Team, right?</p>
						<br><br>
					</div>
				</div>
				<br><br><br>
			</div><!-- /container -->
		</div><!-- /featureswrap -->

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
			$("#signup").click(function() {
				$("#summoner_name").val($("#summoner_name").val().replace(" ",""));
				document.forms["userForm"].submit();
			});
		</script>
	</body>
</html>
