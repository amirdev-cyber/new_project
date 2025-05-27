<?php 
include('dob_db.php');
$image=$_POST['image'];
$author=$_POST['author'];
$subject=$_POST['subject'];
$information=$_POST['information'];

$request="UPDATE docmedd SET image ='$image', 
author='$author',subject='$subject',information='$information WHERE id='$id'";

$respond=$conn->query($request);
$messege;
$error;
if(isset($respond)){
    $messege= "success";
}
else{
    $error = "error".$respond."</br>". $conn->error;
}

$conn->close();
header('location:news.php? messege='$messege' && error='$error'');
?>