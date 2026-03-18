<?php

session_start();
include("../config/db.php");

$user_id = $_SESSION['user_id'];

$name=$_POST['name'];
$type=$_POST['relief_type'];
$district=$_POST['district'];
$ds=$_POST['ds_division'];
$gn=$_POST['gn_division'];
$number=$_POST['contact_number'];
$address=$_POST['address'];
$family=$_POST['family_members'];
$severity=$_POST['severity'];
$desc=$_POST['description'];

$sql="INSERT INTO requests
(user_id,user_name,relief_type,district,ds_division,gn_division,contact_number,address,family_members,severity,description)

VALUES
('$user_id','$name','$type','$district','$ds','$gn','$number','$address','$family','$severity','$desc')";

$result=mysqli_query($conn,$sql);

if($result){

header("Location: ../dashboard.html?msg=created");
exit();

}else{

header("Location: ../create_request.html?msg=error");
exit();

}

?>