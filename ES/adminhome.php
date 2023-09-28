<?php
session_start();
    if(!isset($_SESSION['username'])){
        header("location:login.php");
    }
    elseif($_SESSION['usertype']=='patient'){
        header("location:login.php");
    }

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
		
		<h1>Welcome Admin</h1>

		<p>This is your Dashboard. Select tabs from the left hand side as per your needs.</p>

	</div>

</body>
</html>
