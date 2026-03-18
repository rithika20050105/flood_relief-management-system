<?php

session_start();
include("../config/db.php");

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) > 0){

$user = mysqli_fetch_assoc($result);

$_SESSION['user_id'] = $user['id'];
$_SESSION['role'] = $user['role'];

if($user['role'] == "admin"){

header("Location: ../admin-dashboard.html");

}else{

header("Location: ../dashboard.html");

}


}else{

header("Location: ../login.html?msg=loginfail");
exit();

}

?>