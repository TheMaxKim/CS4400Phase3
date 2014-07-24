<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="http://getbootstrap.com/favicon.ico">

		<title>Student Home</title>

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
	
	<div class="container">
		<form class="form-signin" method="GET" action="./" role="form" style="max-width:400px;">
			<h1 align="center">Student Rate Tutor</h1>

			<p style="align:left;">School</p>
			<input type="text" class="form-control" id="school" name="schoolname" placeholder="CS" required autofocus>

			<p style="align:left;">Course Number</p>
			<input type="text" class="form-control" id="coursenumber" name="coursenumber" placeholder="4400" required>

			<p style="align:left;">Tutor Name</p>
			<input type="text" class="form-control" id="tutorname" name="tutorname">


			<p align="left">Descriptive Evaluation:</p>
			<textarea style="width:400px;" rows="4" maxlength="300"></textarea>
			<br></br>

			<p align="left">Numeric Evaluation:</p>

			<div style="text-align:left;">
				<div class="radio">
			  		<label>
			    		<input type="radio" name="optionsRadios" id="optionsRadios1" value="4" checked>
		    			4 Highly Recommend
				  </label>
				</div>
				<div class="radio">
					<label>
						<input type="radio" name="optionsRadios" id="optionsRadios2" value="3">
						3 Recommend
					</label>
				</div>
				<div class="radio">
					<label>
						<input type="radio" name="optionsRadios" id="optionsRadios3" value="2">
						2 Recommend with Reservations
					</label>
				</div>
				<div class="radio">
					<label>
						<input type="radio" name="optionsRadios" id="optionsRadios3" value="1">
						1 Do Not Recommend
					</label>
				</div>
			</div>
			<button class="btn btn-lg btn-primary btn-block" id="login" type="submit">Submit</button>			

			<a href="studenthome.php" class="btn btn-lg btn-primary btn-block">Exit</a>

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
	mysql_select_db('cs4400_Group_21');


	if (isset($_POST['submit'])) {

		if(!$_POST['GTID'] | !$_POST['password']) {

 			die('You did not fill in a required field.');

 		}


		$tutoredcheck = mysql_query("SELECT * FROM Hires WHERE UnderGradGTID = '".$_POST['GTID']."'") or die(mysql_error());

		$tutorednumberfound = mysql_num_rows($finduser);

		if ($numberfound == 0) {
			die('That GTID does not exist in our database.');
		}

		while($info = mysql_fetch_array($finduser))

		{

			if ($_POST['password'] != $info['Password']) {

				die('Incorrect password, please try again.');

			} else {
				header("Location: studenthome.php"); 
			}

		}
	}

	mysql_close($link);
?>