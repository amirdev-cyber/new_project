<?php

include('doc_db.php');

$doc_id=$_POST["doc_id"];
$name=$_POST["name"];
$jobs=$_POST["jobs"];

$request="UPDATE doctors  SET name='$name', j_type='$jobs'
WHERE id='$doc_id'
";
$status=$conn->query($request);

$conn->close();

header("location:doctor2.php");









?>