<?php

include("../config/db.php");

$id = $_POST['id'];
$name = $_POST['name'];
$type = $_POST['relief_type'];
$district = $_POST['district'];
$severity = $_POST['severity'];

$sql = "UPDATE requests SET

user_name='$name',
relief_type='$type',
district='$district',
severity='$severity'

WHERE id='$id'";

$result = mysqli_query($conn,$sql);

if($result){

header("Location: view_request.php?msg=updated");
exit();

}else{

header("Location: view_request.php?msg=error");
exit();

}

?>