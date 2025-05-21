<?php
include("doc_db")
$name=$_POST ['name'];

$position =$_POST['position'];
$office =$_POST['office'];
$age =$_POST['age'];
$start =$_POST['start_date'];
$salary =$_POST['salary'];

$create = "INSERT INTO docmed(name,position,office,age,start_date,salary)
VALUES ('$name','$position ','$office','$age','$start','$salary')";

if($conn->query($create) === TRUE){
   echo "malumotlar qo'shildi";
}
else{
    echo "Error".$create."<br>".$conn->error;
}
$conn->close();


?>