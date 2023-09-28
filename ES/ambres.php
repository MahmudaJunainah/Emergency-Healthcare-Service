<?php
session_start();
    if(!isset($_SESSION['username'])){
        header("location:login.php");
    }
    elseif($_SESSION['usertype']=='patient'){
        header("location:login.php");
    }
	$host="localhost";
    $user="root";
    $password="";
    $db="amb";
    $data=mysqli_connect($host,$user,$password,$db);
	$sql="SELECT * from form";
	$result=mysqli_query($data,$sql);

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin Dashboard</title>
	<?php
	include 'admin_css.php';
	?>

	
</head>
<body>

	<?php
	include 'admin_sidebar.php';
	?>

	<div class="content">
		<center>
		<h1>Applied for Ambulace Reservation</h1>
		<br></br>
		<table border="1px">
			<tr>
				<th style="padding:20px; font-size:15px;">Name</th>
				<th style="padding:20px; font-size:15px;">Phone</th>
				<th style="padding:20px; font-size:15px;">Email</th>
				<th style="padding:20px; font-size:15px;">Reservation Date</th>
				<th style="padding:20px; font-size:15px;">Pickup</th>
				<th style="padding:20px; font-size:15px;">Dropoff</th>
				<th style="padding:20px; font-size:15px;">Notes</th>
			</tr>
			<?php
			while($info=$result->fetch_assoc()){
			
			?>
			<tr>
				<td style="padding:20px;"><?php echo "{$info['name']}";?></td>
				<td style="padding:20px;"><?php echo "{$info['phone']}";?></td>
				<td style="padding:20px;"><?php echo "{$info['email']}";?></td>
				<td style="padding:20px;"><?php echo "{$info['date']}";?></td>
				<td style="padding:20px;"><?php echo "{$info['pickup']}";?></td>
				<td style="padding:20px;"><?php echo "{$info['dropoff']}";?></td>
				<td style="padding:20px;"><?php echo "{$info['notes']}";?></td>
			</tr>
			<?php
			}
			?>
		</table>
		</center>

		<!--<p>This is your Dashboard. Select tabs from the left hand side as per your needs.</p>-->

	</div>

</body>
</html>
