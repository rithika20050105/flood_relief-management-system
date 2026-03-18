<?php

$conn = mysqli_connect("localhost", "root", "", "flood_relief");

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

?>
