<?php
	// AUTHENTICATION
	if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['summoner_name'])) {
		$name 			= $_POST['name'];
		$email 			= $_POST['email'];
		$summoner_name 	= $_POST['summoner_name'];
	} else {
		// IF AUTHENTICATION FAILED
		header("Location: ../?invalid");
		die();
	}
?>
<!DOCTYPE html>
<html>
	<head>
		
	</head>
	<body>
		<form name="submitForm" method="post" action="create.php">
			<input id="name" name="name" type="hidden" value="<?php echo $name; ?>">
			<input id="email" name="email" type="hidden" value="<?php echo $email ?>">
			<input id="summoner_name" name="summoner_name" type="hidden" value="<?php echo $summoner_name; ?>">
			<input id="summoner_rank" name="summoner_rank" type="hidden" value="<?php echo $summoner_rank; ?>">
		</form>
		
		<script src="../assets/js/jquery.min.js"></script>
		<script src="../user/api.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				var name 			= $("#name").val();
				var email 			= $("#email").val();
				var summoner_name 	= $("#summoner_name").val();
				var key 			= <?php include '../config/api-con.php'; echo '"' . $api_key . '"'; ?>;
				$("#summoner_rank").val(getTier(getId(summoner_name,key),key));
				document.forms["submitForm"].submit();
			});
		</script>
	</body>
</html>
