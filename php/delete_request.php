<?php

session_start();
include("../config/db.php");

$user_id = $_SESSION['user_id'];   // logged user
$id = $_GET['id'];                 // request id

mysqli_query($conn,"DELETE FROM requests WHERE id='$id' AND user_id='$user_id'");

header("Location: ../dashboard.html?msg=deleted");
exit();

?>