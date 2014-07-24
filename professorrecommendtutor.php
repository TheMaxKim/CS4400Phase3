<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="http://getbootstrap.com/favicon.ico">

		<title>Professor</title>

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
			<h1 align="center">Tutor Reccomendation</h1>
			<p align="left">Student GTID:</p>
			<input type="text" class="form-control" id="GTID" placeholder="GTID" required autofocus>
			<br></br>
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

		</form>
	</div>




	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>

</body>
</html>