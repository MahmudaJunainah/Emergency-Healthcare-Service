<?php
    error_reporting(0);
    session_start();
    session_destroy();
    if($_SESSION['notes']){
        $notes=$_SESSION['notes'];
        echo "<script type='text/javascript'> alert ('$notes');
        </script>";
    }

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Emergency Healthcare</title>
	<link rel="stylesheet" type="text/css" href="style.css">

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>

	<nav>
		<label class="logo">Emergency Healthcare</label>

		<ul>
			<li><a href="patienthome.php">Dashboard</a></li>
			<li><a href="../ES/contact.php">Contact</a></li>
			<li><a href="logout.php" class="btn btn-primary">Logout</a></li>
		</ul>
	</nav>


	<div class="section1">
		
		<label class="img_text">Everyday or life-changing care. We're here when you need us.</label>
		<img class="main_img" src="images/25.jpg">
	</div>

    <center>
		<h1 class="adm">Ambulance Reservation Form</h1>

	</center>


	<div align="center" class="admission_form">

		<form action="data_chech.php" method="POST">
			
		<div class="adm_int">
			<label class="label_text">Name</label>
			<input class="input_deg" type="text" name="name"required>
		</div>

		<div class="adm_int">
			<label class="label_text">Phone</label>
			<input class="input_deg" type="text" name="phone"required>
		</div>

        <div class="adm_int">
			<label class="label_text">Email</label>
			<input class="input_deg" type="text" name="email"required>
		</div>
        <div class="adm_int">
			<label class="label_text">Reservation Date</label>
			<input class="input_deg" type="date" name="date"required>
		</div>
        <div class="adm_int">
			<label class="label_text">Pick-up Location</label>
			<input class="input_deg" type="text" name="pickup"required>
		</div>
        <div class="adm_int">
			<label class="label_text">Drop-off Location</label>
			<input class="input_deg" type="text" name="dropoff"required>
		</div>
		<div class="adm_int">
			<label class="label_text">Notes</label>
			<textarea class="input_txt" name="notes"></textarea>
		</div>

		<div class="adm_int" >
			
			<input class="btn btn-primary" id="submit" type="submit" value="apply" name="submit" >
		</div>


		</form>
		
	</div>

</body>
</html>
