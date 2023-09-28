<?php
session_start();

$host="localhost";
$user="root";
$password="";
$db="amb";
$data=mysqli_connect($host,$user,$password,$db);

if ($data===false){
    die("connection error");
}
    if (isset($_POST['submit'])){
        $data_name=$_POST['name'];
        $data_phone=$_POST['phone'];
        $data_email=$_POST['email'];
        $data_date=$_POST['date'];
        $data_pickup=$_POST['pickup'];
        $data_dropoff=$_POST['dropoff'];
        $data_notes=$_POST['notes'];
         
        $sql="INSERT INTO form(name,phone,email,date,pickup,dropoff,notes) VALUES('$data_name','$data_phone','$data_email','$data_date','$data_pickup','$data_dropoff','$data_notes')";
         
        $result=mysqli_query($data,$sql);
        if($result){
            $_SESSION['notes']="Your Application Sent Successfully";
            header("location:amb.php");
        }
        else{
            echo "Submission Failed";
        }
     }

?>