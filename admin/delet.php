<?php

include('doc_db.php');


$d_id=$_POST["docmed1"];

$remove = "DELETE FROM docmedd WHERE id='$d_id'";
$messege ;
$error;
if ($conn->query($remove) === TRUE) {
  $messege= "Ma'lumotlar ochirildi";
} else {
  $error="Error deleting record: " . $remove."</br>". $conn->error;
}

$conn->close();

 header("location:news.php? messege=$messege && error =$error");

?>