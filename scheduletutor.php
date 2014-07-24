<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="http://getbootstrap.com/favicon.ico">

		<title>Schedule Tutor</title>

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
			<h1 align="center">Schedule Tutor</h1>

			<p style="align:left;">School</p>
			<input type="text" class="form-control" id="school" placeholder="CS" required autofocus>

			<p style="align:left;">Course Number</p>
			<input type="text" class="form-control" id="coursenumber" placeholder="4400" required>

			<p style="align:left;">Availability: Note - Tutor sessions can only be scheduled for 1 hour per week for a given course.</p>

			<p style="align:left;">Day</p>

			<select class="form-control" id="day">
				<option value="Monday">Monday</option>
				<option value="Tuesday">Tuesday</option>
				<option value="Wednesday">Wednesday</option>
				<option value="Thursday">Thursday</option>
				<option value="Friday">Friday</option>
			</select>

			<select class="form-control" id="time">
				<option value="0">12:00 AM</option>
				<option value="1">1:00 AM</option>
				<option value="2">2:00 AM</option>
				<option value="3">3:00 AM</option>
				<option value="4">4:00 AM</option>
				<option value="5">5:00 AM</option>
				<option value="6">6:00 AM</option>
				<option value="7">7:00 AM</option>
				<option value="8">8:00 AM</option>
				<option value="9">9:00 AM</option>
				<option value="10">10:00 AM</option>
				<option value="11">11:00 AM</option>
				<option value="12">12:00 PM</option>
				<option value="13">1:00 PM</option>
				<option value="14">2:00 PM</option>
				<option value="15">3:00 PM</option>
				<option value="16">4:00 PM</option>
				<option value="17">5:00 PM</option>
				<option value="18">6:00 PM</option>
				<option value="19">7:00 PM</option>
				<option value="20">8:00 PM</option>
				<option value="21">9:00 PM</option>
				<option value="22">10:00 PM</option>
				<option value="23">11:00 PM</option>
			</select>

			<button class="btn btn-lg btn-primary btn-block">Search Tutors</button>

			<a class="btn btn-lg btn-primary btn-block">Exit</a>

		</form>
	</div>



	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>

</body>
</html>