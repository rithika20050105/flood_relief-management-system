<?php
include("../config/db.php");

$users = mysqli_fetch_array(mysqli_query($conn,"SELECT COUNT(*) FROM users"));
$high = mysqli_fetch_array(mysqli_query($conn,"SELECT COUNT(*) FROM requests WHERE severity='High'"));
$food = mysqli_fetch_array(mysqli_query($conn,"SELECT COUNT(*) FROM requests WHERE relief_type='Food'"));
$medicine = mysqli_fetch_array(mysqli_query($conn,"SELECT COUNT(*) FROM requests WHERE relief_type='Medicine'"));
?>

<!DOCTYPE html>
<html>

<head>
<title>System Summary Report</title>
</head>

<body style="
margin:0;
font-family: Arial, sans-serif;
background: linear-gradient(135deg,#000000,#001f3f,#003366);
color:white;
text-align:center;
">

<header style="padding-top:40px;">
<img src="../images/logo.png" style="width:80px;"><br><br>
<h2 style="font-size:28px;">Admin Reports</h2>
</header>

<div style="
width:420px;
margin:auto;
margin-top:40px;
background:#050d1a;
padding:30px;
border-radius:15px;
box-shadow:0 0 25px rgba(0,150,255,0.5);
">

<h2 style="margin-bottom:25px;">System Summary Report</h2>

<table style="
width:100%;
border-collapse:collapse;
">

<tr style="background:#0a2a4a;">
<th style="padding:12px;border-bottom:1px solid #0ff;">Report</th>
<th style="padding:12px;border-bottom:1px solid #0ff;">Value</th>
</tr>

<tr>
<td style="padding:12px;border-bottom:1px solid #333;">Total Registered Users</td>
<td style="padding:12px;border-bottom:1px solid #333;"><?php echo $users[0]; ?></td>
</tr>

<tr>
<td style="padding:12px;border-bottom:1px solid #333;">High Severity Households</td>
<td style="padding:12px;border-bottom:1px solid #333;"><?php echo $high[0]; ?></td>
</tr>

<tr>
<td style="padding:12px;border-bottom:1px solid #333;">Food Requests</td>
<td style="padding:12px;border-bottom:1px solid #333;"><?php echo $food[0]; ?></td>
</tr>

<tr>
<td style="padding:12px;">Medicine Requests</td>
<td style="padding:12px;"><?php echo $medicine[0]; ?></td>
</tr>

</table>

<br><br>

<a href="../admin-dashboard.html" style="
display:inline-block;
padding:12px 25px;
background:linear-gradient(90deg,#007bff,#00c6ff);
color:white;
text-decoration:none;
border-radius:8px;
font-weight:bold;
box-shadow:0 0 10px rgba(0,150,255,0.8);
">
Back to Admin Dashboard
</a>

</div>

</body>
</html>