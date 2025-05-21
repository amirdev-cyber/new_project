<?php

$server_name="localhost";
$password="";
$user_name="root";
$db_name="doc_db";

$conn=new mysqli($server_name,$user_name,$password,$db_name);

if($conn->connect_error){
    die("ulanmadi".$conn->connect_error);

}


?>