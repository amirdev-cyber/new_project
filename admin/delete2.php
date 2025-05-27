<?php

include('doc_db.php');


$d_id=$_POST["docmed3"];

$remove = "DELETE FROM doctors WHERE id='$d_id'";
$messege ;
$error;
if ($conn->query($remove) === TRUE) {
  $messege= "Ma'lumotlar ochirildi";
} else {
  $error="Error deleting record: " . $remove."</br>". $conn->error;
}

$conn->close();

 header("location:doctor2.php? messege=$messege && error =$error");

?>