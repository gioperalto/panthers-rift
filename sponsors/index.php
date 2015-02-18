<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Panther's Rift - The biggest League of Legends tournament of the year for Florida International University Students">
		<meta name="keywords" content="Panther's Rift, Tournament, League of Legends, Panther, Rift, FIU, Florida International University, STARS, FIU STARS">
		<meta name="author" content="Gio Peralto-Pritchard">
		<link rel="shortcut icon" href="../assets/img/favicon.ico">
		<title>Panther's Rift - An FIU Summoners Gathering</title>

		<!-- Bootstrap core CSS -->
		<link href="../assets/css/bootstrap.min.css" rel="stylesheet">
		<!-- Custom styles for this template -->
		<link href="../assets/css/style.css" rel="stylesheet">
		<link href="../assets/css/responsive.css" rel="stylesheet">
		<link href="../assets/css/linecons.css" rel="stylesheet">
		<link href="../assets/css/social-icons.css" rel="stylesheet">
		<link href="../assets/css/font-awesome.min.css" rel="stylesheet">
		<link rel="stylesheet" href="../assets/css/overrides.css">
		<!-- Web Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<script src="../assets/js/modernizr.custom.js"></script>
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
					<a class="navbar-brand" href="../"><b>Panther's Rift</b></a>
				</div>

				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav cl-effect-13">
						<li class="dropdown">
						  <a href="" id="homeLabel" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						    Home
						    <span class="caret"></span>
						  </a>
						  <ul class="dropdown-menu" role="menu" aria-labelledby="homeLabel">
						    <li><a href="../#home">Home</a></li>
							<li><a href="../#tournament">Tournament</a></li>
							<li><a href="../#teams">Teams</a></li>
							<li><a href="../#solutions">Solutions</a></li>
							<li><a href="../#sponsors">Sponsors</a></li>
						  </ul>
						</li>
						<li><a href="./#home" class="smoothScroll">Become a Sponsor</a></li>						
					</ul>

					<!-- Sign In / Sign Up -->
					<ul class="nav navbar-nav navbar-right">
						<div class="navbar-form pull-left">
							<a class="btn btn-sm btn-warning no-btn">
								<?php 
									// CONNECT TO DB
									include '../config/db-con.php';
									$registrations = 0;
									$selectAll = "SELECT user_id FROM competitor;";
									if($result = mysqli_query($conn,$selectAll)): 
										$registrations = mysqli_num_rows($result);
										echo $registrations . '/80 qualifiers';
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

		<section id="home" name="home"></section>
		<div id="headerwrap" class="sponsor-bg">
			<div class="container">
				<div class="row text-center">
					<div class="col-lg-12">
						<?php if(isset($_GET['success'])){ ?>
							<div class="alert alert-success alert-dismissible" role="alert">
							  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							  <strong>Success!</strong> Your email has been sent.
							</div>
						<?php } else if(isset($_GET['fail'])) { ?>
							<div class="alert alert-danger alert-dismissible" role="alert">
							  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							  <strong>Error!</strong> Your mail failed to send.
							</div>
						<?php } ?>
					</div>
					<div class="col-lg-3">
						<img class="img-responsive" src="../assets/img/shen-img.png" alt="">
					</div>
					<div class="col-lg-9 hidden-xs hidden-sm hidden-md ice">
						<br>
						<h1>Want to be a Sponsor?</h1>
						<h3>With your help we can make Panther's Rift irresistable to every League of Legends player in South Florida.</h3>
						<br>
						<a href="./#join" type="button" class="btn btn-lg btn-theme2 smoothScroll">Learn How</a>
					</div>
				</div>
			</div> <!-- /container -->
		</div><!-- /headerwrap -->

		<!-- Join Wrap -->
		<section id="join" name="features"></section>
		<div id="featureswrap" class="sponsor-section">
			<div class="container">
				<div class="row">
					<h2 class="text-center">Join us as a sponsor</h2>
					<hr><br><br>
					<div class="col-lg-2"></div>
					<div class="col-lg-4">
						<br><br>
						<h4><i class="fa fa-heart"></i> Taking things from great to amazing</h4>
						<p>Since we can't award our contestants money, we're not asking for your money! We're just as interested in
						things we can give out to the winning team, the top two teams, the top four teams or even lucky attendees.</p>
						<div class="accordion-group">
							<div class="accordion-heading">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="./#collapseOne">
								<i class="fa fa-level-up"></i> Sponsor Benefits
								</a> (Click for info)
							</div>
							<div id="collapseOne" class="accordion-body collapse">
								<div class="accordion-inner">
									<ul>
										<li>Presence on our site (sponsors section)</li>
										<li>Exposure through our <a href="https://www.facebook.com/panthersrift" target="_blank">Facebook Page</a></li>
										<li>Shoutouts at our two events and our streams</li>
										<li>Make a direct impact on over 100 people</li>
										<li>Immense involvement in community building</li>
									</ul>
								</div><!-- /accordion-inner -->
							</div><!-- /collapse -->
						</div><!-- /accordion-group -->		
						<br>
						<div class="accordion-group">
							<div class="accordion-heading">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="./#collapseTwo">
								<i class="fa fa-signal"></i> Sponsorship Levels
								</a> (Click for info)
							</div>
							<div id="collapseTwo" class="accordion-body collapse">
								<div class="accordion-inner">
									<ul>
										<li>Diamond (over $500 in sponsorship)</li>
										<li>Platinum (over $250 in sponsorship)</li>
										<li>Gold (over $100 in sponsorship)</li>
									</ul>
								</div><!-- /accordion-inner -->
							</div><!-- /collapse -->
						</div><!-- /accordion-group -->							
						<br>
						<div class="accordion-group">
							<div class="accordion-heading">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="./#collapseThree">
								<i class="fa fa-truck"></i> Eligible Criteria
								</a> (Click for info)
							</div>
							<div id="collapseThree" class="accordion-body collapse">
								<div class="accordion-inner">
									<ul>
										<li>Shirts</li>
										<li>Caps/Hats</li>
										<li>Stickers</li>
										<li>Anything cool that we can give away</li>
									</ul>
								</div><!-- /accordion-inner -->
							</div><!-- /collapse -->
						</div><!-- /accordion-group -->		
						<br>
						<a href="" type="button" class="btn btn-md btn-theme" data-toggle="modal" data-target="#emailModal">Contact Us</a>
						<br><br>
					</div>

					<div class="col-lg-6">
						<img class="img-responsive" src="../assets/img/zed-img.png" alt="">
					</div>
				</div>
			</div>
		</div>

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

		<!-- Send Email Modal -->
		<div class="modal fade bs-modal-sm" id="emailModal" tabindex="-1" role="dialog" aria-labelledby="EmailModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-sm">
				<div class="modal-content">
					<br>
					<div class="bs-example bs-example-tabs">
						<ul id="myTab" class="nav nav-tabs nav-justified">
							<li class=""><a href="index.html#signup" data-toggle="tab">Contact Us</a></li>
						</ul>
					</div>
					<div class="modal-body">
						<form method="post" action="send-email.php">
							<fieldset>
								<div class="control-group">
									<label class="control-label" for="sponsor_name">Company Name:</label>
									<div class="controls">
										<input name="sponsor_name" class="form-control" type="text" placeholder="Name of your company / your name" class="input-large" required="">
									</div>
								</div>

								<div class="control-group">
									<label class="control-label" for="sponsor_email">Email:</label>
									<div class="controls">
										<input name="sponsor_email" class="form-control" type="email" placeholder="Enter your email" class="input-large" required="">
									</div>
								</div>

								<div class="control-group">
									<label class="control-label" for="message">Content:</label>
									<div class="controls">
										<textarea name="message" class="form-control" placeholder="How are you interested in sponsoring our event?" rows="6" required=""></textarea>
									</div>
								</div>

								<div class="control-group">
									<label class="control-label" for="signup"></label>
									<div class="controls">
										<button type="submit" class="btn btn-theme btn-block">Send Email</button>
									</div>
								</div>

							</fieldset>
						</form>
					</div><!-- /modal-body -->

					<div class="modal-footer">
						<center>
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</center>
					</div>
				</div><!-- /modal-content -->
			</div><!-- /modal-dialog -->
		</div><!-- /modal -->

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="../assets/js/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="../assets/js/bootstrap.min.js"></script>
		<script src="../assets/js/smoothscroll.js"></script>
	</body>
</html>
