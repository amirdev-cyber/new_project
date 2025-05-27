<?php
include("doc_db.php");

$name = $_POST['name'];
$j_type = $_POST['j_type'];
$image = "1.jpg";

$news = "INSERT INTO doctors (image, name, j_type)
VALUES ('$image', '$name', '$j_type')";

$message = '';
$error = '';

if ($conn->query($news) === TRUE) {
  $message = "New record created successfully";
} else {
  $error = "Error: " . $news . "<br>" . $conn->error;
}

$conn->close();

header("Location: doctor2.php?message=$message&error=$error");
exit;
?>
