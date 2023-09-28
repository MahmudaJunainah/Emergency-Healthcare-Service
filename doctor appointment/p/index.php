<?php
$insert = false;
if(isset($_POST['name'])){
  
    $server = "localhost";
    $username = "root";
    $password = "";
    $con = mysqli_connect($server, $username, $password);
    
    if(!$con){
        die("connection to this database failed due to". mysqli_connect_error());

    }
    //echo "Success connecting to the db";
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $sql = "INSERT INTO `db_healthcare`.`appointment` (`name`, `age`, `gender`, `email`, `phone`, `other`, `date`,`time`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc','$date','$time');";
    //echo $sql;

    if($con->query($sql)==true){
        //echo "Succesfully inserted";
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }
    $con->close();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Form</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1> Book your appointment</h1>
        <p>Enter your detatils to book your appointment.Please insert correct information</p>
        <?php
            if($insert==true){
                echo "<p class='submitMsg'>Appointment booked</p>";
            }
        ?>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your age">
            <input type="text" name="gender" id="gender" placeholder="Enter your Gender">
            <input type="email" name="email" id="email" placeholder="Enter your Email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
            <input type="date" name="date" id="date" placeholder="Enter a date according to the schedule">
            <input type="time" name="time" id="time" placeholder="Enter time">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter your symptoms"></textarea>
            <button class="btn">Submit</button>
            <button class="btn">Reset</button>


        </form>
    </div>
    <script src="index.js"></script>
    <!--INSERT INTO `trip` (`sno`, `name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('1', 'Test Case', '23', 'Male', 'omuk@gmail.com', '13415161312', 'This is first', current_timestamp());-->

</body>

</html>