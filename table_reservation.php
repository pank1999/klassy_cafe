<?php

$con=new mysqli("localhost:3308","root","","Klassy_cafe") or die(mysqli_error($con));

$Name=$_POST['name'];
$email=$_POST['email'];
$Phone=$_POST['phone'];
$Number_of_guests=$_POST['number-guests'];
$date=$_POST['date'];
$timing=$_POST['time'];
$text_message=$_POST['message'];

$insertquery1="INSERT INTO `table_reservation` (`Name`, `Email`, `Phone_number`, `Number_of_guests`, `date`, `time`, `text_message`) VALUES ( '$Name', '$email', '$Phone', '$Number_of_guests', '$date', '$timing', '$text_message')";
#$insertquery="INSERT INTO `table_reservation`('id','Name','Email','Phone_number','Number_of_guests','date','time','text_message') VALUES('1','$Name','$email','$Phone','$Number_of_guests','$date','$timing','$text_message')";
$run=mysqli_query($con,$insertquery1) or die(mysqli_error($con));

if($run){
    echo "<script> alert('Table Reservation Successfully') </script>";
    echo"<script> location.href='index.php' </script>";
}
else{
    echo "<script> alert('Table Reservation  Unsuccessfully !') </script>";
    echo"<script> location.href='index.php' </script>";

}
 





?>