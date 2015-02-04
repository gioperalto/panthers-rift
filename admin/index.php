<?php include 'authenticate.php'; ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="keywords" content="">
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
					<a class="navbar-brand" href="./"><b>Panther's Rift</b> <span class="small">Admin</span></a>
				</div>

				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav cl-effect-13">
						<li><a href="./#home" class="smoothScroll">Home</a></li>
						<li><a href="./#registrants" class="smoothScroll">Registrants</a></li>
						<li><a href="" data-toggle="modal" data-target="#emailModal">Send Email</a></li>
						<li><a href="" data-toggle="modal" data-target="#adminModal">Add Admin</a></li>
					</ul>

					<!-- Sign In / Sign Up -->
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown"><a href="./logout.php"><span class="icon-lock"></span> Log Out</a></li>
						<div class="navbar-form pull-left">
							<a class="btn btn-sm btn-theme no-btn">
								<?php 
									// CONNECT TO DB
									include '../config/db-con.php';
									$selectAll = "SELECT user_summoner_name FROM user;";
									if($result = mysqli_query($conn,$selectAll)): 
										echo mysqli_num_rows($result) . ' registrations';
									endif;
								?>
							</a>
						</div>
					</ul>
				</div><!--/nav-collapse -->
			</div><!-- /container -->
		</div><!-- /fixed-navbar -->

		<!-- Header Wrap -->
		<section id="home" name="home"></section>
		<div id="headerwrap" class="admin-wrap">
			<div class="container">
				<div class="row text-center">
					<div class="col-lg-12">
						<?php if(isset($_GET['success'])){ ?>
							<div class="alert alert-success alert-dismissible" role="alert">
							  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							  <strong>Success!</strong> Your message was successfully sent.
							</div>
						<?php } else if(isset($_GET['fail'])) { ?>
							<div class="alert alert-danger alert-dismissible" role="alert">
							  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							  <strong>Error!</strong> Your mail could not be sent.
							</div>
						<?php } else if(isset($_GET['created'])) { ?>
							<div class="alert alert-success alert-dismissible" role="alert">
							  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							  <strong>Success!</strong> Your have created an admin account.
							</div>
						<?php } else if(isset($_GET['exists'])) { ?>
							<div class="alert alert-danger alert-dismissible" role="alert">
							  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							  <strong>Error!</strong> An admin with this email already exists.
							</div>
						<?php } ?>
						<h1>Welcome To <b>The Admin Panel</b></h1>
						<br>
					</div>

					<div class="col-lg-2 hidden-xs hidden-sm hidden-md">
						<h5>Come to the dark side</h5>
						<p>Look at all the data you desire. It's power may overwhelm you, causing you to slowly turn</p>
					</div>
					<div class="col-lg-8">
						<img class="img-responsive" src="../assets/img/mord-bg.png" alt="">
					</div>
					<div class="col-lg-2 hidden-xs hidden-sm hidden-md">
						<br>
						<h5>We have cookies</h5>
						<p>Although we lied about the cookies, we have email sending functionalities</p>
					</div>
				</div>
			</div> <!-- /container -->
		</div><!-- /headerwrap -->


		<!-- Registrants Wrap -->
		<section id="registrants" name="registrants"></section>
			<div id="featureswrap">
				<div class="container">
					<div class="row text-center">
						<h2>Registrants</h2>
						<hr>
						<br>
						<br>
						<div class="col-lg-12">
							<table class="table table-bordered">
							  <thead>
							  	<th>Name</th>
							  	<th>Email</th>
							  	<th>Summoner Name</th>
							  	<th>Tier</th>
							  	<th>Joined</th>
							  </thead>
							  <tbody>
							  	<?php
							  		$selectRegistrants = "SELECT user_name,user_email,user_summoner_name,user_summoner_rank,created_at
							  		FROM user ORDER BY created_at DESC;";
							  		if($result = mysqli_query($conn,$selectRegistrants)):
							  			while($row = mysqli_fetch_assoc($result)):
							  	?>
							  	<tr>
							  		<td><?php echo $row['user_name']; ?></td>
							  		<td><?php echo $row['user_email']; ?></td>
							  		<td><?php echo $row['user_summoner_name']; ?></td>
							  		<td><?php if($row['user_summoner_rank'] == '') echo 'UNDETERMINED'; else echo $row['user_summoner_rank']; ?></td>
							  		<td><?php echo date('D jS M, Y',strtotime($row['created_at'])); ?></td>
							  	</tr>
							  	<?php
							  			endwhile;
							  		endif;
							  		// CLOSE CONNECTION
									mysqli_close($conn);
							  	?>
							  </tbody>
							</table>
						</div>
					</div>
					<br>
				</div> <!-- /container -->
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

		<!-- Send Email Modal -->
		<div class="modal fade bs-modal-sm" id="emailModal" tabindex="-1" role="dialog" aria-labelledby="EmailModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-sm">
				<div class="modal-content">
					<br>
					<div class="bs-example bs-example-tabs">
						<ul id="myTab" class="nav nav-tabs nav-justified">
							<li class=""><a href="index.html#signup" data-toggle="tab">Coming Soon</a></li>
						</ul>
					</div>
					<!--<div class="modal-body">
						<div id="myTabContent" class="tab-content">
							<div class="tab-pane fade active in" id="signin">
								<form name="userForm" method="post" action="user/submit.php">
									<fieldset>
										<div class="control-group">
											<label class="control-label" for="name">Name:</label>
											<div class="controls">
												<input id="name" name="name" class="form-control" type="text" placeholder="Your first and last name" class="input-large" required="">
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="email">Email:</label>
											<div class="controls">
												<input id="email" name="email" class="form-control" type="text" placeholder="Your email address" class="input-large" required="">
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="summoner_name">*Summoner Name:</label>
											<div class="controls">
												<input id="summoner_name" name="summoner_name" class="form-control" type="text" placeholder="Your summoner name" class="input-large" required="">
											</div>
										</div>

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
							</div>
						</div>
					</div>--><!-- /modal-body -->

					<div class="modal-footer">
						<center>
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</center>
					</div>
				</div><!-- /modal-content -->
			</div><!-- /modal-dialog -->
		</div><!-- /modal -->

		<!-- Add Admin Modal -->
		<div class="modal fade bs-modal-sm" id="adminModal" tabindex="-1" role="dialog" aria-labelledby="EmailModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-sm">
				<div class="modal-content">
					<br>
					<div class="bs-example bs-example-tabs">
						<ul id="myTab" class="nav nav-tabs nav-justified">
							<li class=""><a href="index.html#signup" data-toggle="tab">Add Admin</a></li>
						</ul>
					</div>
					<div class="modal-body">
						<div id="myTabContent" class="tab-content">
							<div class="tab-pane fade active in" id="signin">
								<form name="userForm" method="post" action="create.php">
									<fieldset>

										<div class="control-group">
											<label class="control-label" for="adminEmail">Email:</label>
											<div class="controls">
												<input name="adminEmail" class="form-control" type="email" placeholder="Enter email address" class="input-large" required="">
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="adminPassword">Password:</label>
											<div class="controls">
												<input id="adminPassword" name="adminPassword" class="form-control" type="password" placeholder="Enter password" class="input-large" required="">
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="adminPassword">Confirm Password:</label>
											<div class="controls">
												<input id="confirmPassword" class="form-control" type="password" placeholder="Confirm password" class="input-large" required="">
											</div>
										</div>

										<div class="control-group" id="confirmButton" style="display:none;">
											<label class="control-label" for="signup"></label>
											<div class="controls">
												<button type="submit" class="btn btn-theme btn-block">Add Admin</button>
											</div>
										</div>

									</fieldset>
								</form>
							</div>
						</div>
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

		<script type="text/javascript">
			$("#confirmPassword").keyup(function() {
				var password 			= $("#adminPassword").val();
				var confirmPassword 	= $("#confirmPassword").val();
				if(password == confirmPassword) {
					$("#confirmButton").show();
				} else {
					$("#confirmButton").hide();
				}
			});
		</script>
	</body>
</html>