<?php

include("../config/db.php");
echo "<script src='../js/script.js'></script>";
$id=$_GET['id'];

mysqli_query($conn,"DELETE FROM users WHERE id='$id'");

echo "<script>
alert('User deleted');
window.location='../dashboard.html';
</script>";

?>