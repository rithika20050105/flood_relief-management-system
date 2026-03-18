<?php
session_start();
include("../config/db.php");

$user_id = $_SESSION['user_id'];
$role = $_SESSION['role'];

if($role == "admin"){

$result = mysqli_query($conn,"SELECT * FROM requests");

}else{

$result = mysqli_query($conn,"SELECT * FROM requests WHERE user_id='$user_id'");

}
?>

<!DOCTYPE html>
<html>

<head>
<title>View Requests</title>

<style>

body{
margin:0;
font-family:Arial, Helvetica, sans-serif;
background:linear-gradient(135deg,#000000,#021b3a);
color:white;
display:flex;
flex-direction:column;
align-items:center;
padding:30px;
}

header{
text-align:center;
margin-bottom:20px;
}

header img{
width:70px;
margin-bottom:10px;
}

.container{
background:rgba(0,0,0,0.6);
padding:40px;
width:80%;
max-width:900px;
border-radius:15px;
box-shadow:0 0 25px rgba(0,140,255,0.5);
}

h3{
text-align:center;
margin-bottom:20px;
}

table{
width:100%;
border-collapse:collapse;
}

table th{
background:#0a2540;
padding:12px;
border-bottom:1px solid #1a3f6b;
}

table td{
padding:12px;
text-align:center;
border-bottom:1px solid #1a3f6b;
}

table tr:hover{
background:rgba(0,140,255,0.1);
}

a{
color:#00bfff;
text-decoration:none;
font-weight:bold;
}

a:hover{
text-decoration:underline;
}

.deleteBtn{
color:#ff6b6b;
}

.backBtn{
display:inline-block;
margin-top:20px;
padding:10px 20px;
background:linear-gradient(90deg,#0066ff,#00bfff);
border-radius:8px;
color:white;
text-decoration:none;
}

</style>

<script src="../js/script.js"></script>

</head>

<body>

<header>
<img src="usjp-logo.png">
<h2>View Relief Requests</h2>
</header>

<div class="container">

<h3>Your Submitted Requests</h3>

<table>

<tr>
<th>Name</th>
<th>Relief</th>
<th>District</th>
<th>Severity</th>
<th>Action</th>
</tr>

<?php while($row=mysqli_fetch_assoc($result)){ ?>

<tr>

<td><?php echo $row['user_name']; ?></td>
<td><?php echo $row['relief_type']; ?></td>
<td><?php echo $row['district']; ?></td>
<td><?php echo $row['severity']; ?></td>

<td>
<a href="edit_request.php?id=<?php echo $row['id']; ?>">Edit</a> |
<a href="delete_request.php?id=<?php echo $row['id']; ?>" class="deleteBtn">Delete</a>
</td>

</tr>

<?php } ?>

</table>

<br><br>

<a href="../dashboard.html" class="backBtn">Back to Dashboard</a>

</div>

</body>
</html> 