<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="http://getbootstrap.com/favicon.ico">

		<title>Login</title>

		<!-- Bootstrap core CSS -->
		<link href="css/bootstrap.css" rel="stylesheet">

		<!-- Custom styles for this template -->
		<link href="css/custom.css" rel="stylesheet">
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
<body>
	
	<div class="container" style="text-align:center;">
		<form class="form-signin" method="GET" action="./" role="form" style="max-width:400px;">
			<h1 align="center">Login</h1>
			<p align="left">GTID:</p>
			<input type="text" class="form-control" id="GTID" placeholder="GTID" required autofocus>
			<br></br>
			<p align="left">Password:</p>
			<input type="password" class="form-control" id="password" placeholder="Password">
			<br></br>
			<button class="btn btn-lg btn-primary btn-block" id="loginsubmit" name="submit" type="submit">Log In</button>
		</form>
	</div>



	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>

</body>
</html>

<?php

	$link = mysql_connect('localhost', 'cs4400_Group_21', 'Z8TqPp8P');
	if (!$link) {
		die('Could not connect: ' . mysql_error());
	}
	mysql_select_db(‘cs4400_Group_21’);

	mysql_close($link);


	if (isset($_POST['submit'])) {

		if(!$_POST['username'] | !$_POST['pass']) {

 			die('You did not fill in a required field.');

 		}


		$findusername = mysql_query("SELECT * FROM users WHERE username = '".$_POST['GT_ID']."'") or die(mysql_error());

		$numberfound = mysql_num_rows($check);

		if ($numberfound == 0) {
			die('That GTID does not exist in our database.');
		}

		while($info = mysql_fetch_array( $check )) 	

		{

			if ($_POST['password'] != $info['Password']) {

				die('Incorrect password, please try again.');

			} else {
				header("Location: studenthome.php"); 
			}


		}
	}
?>