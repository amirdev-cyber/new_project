<?php
include("doc_db.php");
$information =$_POST['information'];
$author=$_POST['author'];
$subject=$_POST['subject'];
$image="1.jpg";
$news="INSERT INTO  docmedd(image,author, subject, news_body )
VALUES('$image' , '$author' , '$subject'  , '$information')";
$message;
$error;
if ($conn->query($news) === TRUE) {
  $message="New record created successfully";
} else {
  $error= "Error: " . $news . "<br>" . $conn->error;
}
$conn->close();

header("location:news.php? message=$message && error=$error");

?>