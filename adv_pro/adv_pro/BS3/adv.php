<!doctype html>
<html lang="en">
<head>
	<title>Lawyer Appointment</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- font files -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<!-- /font files -->
	<!-- css files -->
	<link href="css/style.css" rel='stylesheet' type='text/css' media="all" />
	<!-- /css files -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script src="js/jquery.vide.min.js"></script>
</head>

<style>

.navbar {
	margin-bottom: 0;
	background-color: #000000;
	z-index: 9999;
	border: 0;
	font-size: 12px !important;
	line-height: 3 !important;
	letter-spacing: 1px;
	border-radius: 0;
	font-family: Montserrat, sans-serif;
}
.kk
{
	padding-top: 00px;
}
.navbar li a, .navbar .navbar-brand {
	color: #fff !important;
}
.navbar-nav li a:hover, .navbar-nav li.active a {
	color: #525252 !important;
	background-color: #fff !important;
}
.navbar-default .navbar-toggle {
	border-color: transparent;
	color: #fff !important;
}
</style>

<body >
<?php 
if($_GET['case']=="divorce")
$case="DIVORCE CASE";
else if($_GET['case']=="land")
$case="LAND CASE";
else
$case="PROPERTY CASE";
?>

	<div>
		<div data-vide-bg="video/pt1">
			<div class="center-container">
				<h1 class="header-w3ls">Lawyer Appointment Form<br><?php echo $case;?></h1>

				<div class="content-top">
					<div class="content-w3ls">
						<div class="form-w3ls">
							<form action="AddAppointment.php" method="post">
								<input type="text" name="case" value="<?php echo $_GET['case'];?>" hidden="">
								<div class="content-wthree1">
									<div class="grid-agileits1">
										<div class="form-control"> 
											<label class="header">Name <span>*</span></label>
											<input type="text" id="name" name="name" placeholder="Name" title="Please enter your Full Name" required="">
										</div>
										<div class="form-control">	
											<label class="header">Email <span>*</span></label>
											<input type="email" id="email" name="email" placeholder="Mail@example.com" title="Please enter a Valid Email Address" required="">
										</div>
										<div class="form-control">	
											<label class="header">Mobile Number <span>*</span></label>
											<input type="text" id="name" name="mobile" placeholder="Mobile Number" title="Please enter your Phone Number" required="">
										</div>
									</div>
								</div>
							</div>
							<div class="form-w3ls-1">

								<div class="form-control"> 
									<label class="header">Address <span>*</span></label>
									<input type="text" id="name" name="add_line1" placeholder="Address Line 1" title="Please enter your Address" required="">
									<input type="text" id="name" name="add_line2" placeholder="Address Line 2" title="">
									<input type="text" id="name" name="city" placeholder="City" title="Please enter your City" required="">
									<input type="text" id="name" name="zip" placeholder="Zip code" title="Please enter your Zip code" required="">
									
								</div>
								<div class="form-control">
									<label class="header">Date <span>*</span></label>
									<input type="date" id="name" name="date" placeholder="Enter date in this month" title="Please enter approprate date in this month" required="">		
								</div>
								


							</div>
							<div class="clear"></div>
						</div>
						<div class="content-w3ls">
							<div class="form-w3ls">
								<div class="content-wthree2">
									<div class="grid-w3layouts1">
										<div class="w3-agile1">
											<label class="rating">Select the appointment time<span>*</span></label>
											<ul>
												<li>
													<input type="radio" id="a-option" name="selector1" value="10:30 AM">
													<label for="a-option">10:30 AM </label>
													<div class="check"></div>
												</li>
												<li>
													<input type="radio" id="b-option" name="selector1" value="11:00 AM">
													<label for="b-option">11:00 AM</label>
													<div class="check"><div class="inside"></div></div>
												</li>
												<li>
													<input type="radio" id="c-option" name="selector1" value="11:30 AM">
													<label for="c-option">11:30 AM<ACRONYM></ACRONYM></label>
													<div class="check"><div class="inside"></div></div>
												</li>
											</ul>
										</div>	
									</div>

									<div class="clear"></div>
								</div>
							</div>
							<div class="form-w3ls-1">
								<div class="grid-w3layouts1">
									<div class="w3-agile1">
										<label class="rating"><span>*</span></label>
										<ul>
											<br>
											<li>					
												<div class="wthree`aits">
												<input id="myButton" type="submit" name="submit" value="Submit">
												
											</div>
										</li>

									</ul>
								</div>	
							</div>		
						</div>

						<div class="clear"></div>


					</div>
				</div>	


			</div>
		</div>
	</div>
</form>
</body>
</html>
