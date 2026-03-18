<?php

session_start();   // start session
include("../config/db.php");

$user_id = $_SESSION['user_id'];   // get logged user id

$id = $_GET['id'];

$result = mysqli_query($conn,"SELECT * FROM requests WHERE id='$id' AND user_id='$user_id'");
$row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html>

<head>
<title>Edit Request</title>

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

header h2{
margin:0;
}

.container{
background:rgba(0,0,0,0.6);
padding:40px;
width:350px;
border-radius:15px;
box-shadow:0 0 25px rgba(0,140,255,0.5);
}

label{
display:block;
margin-top:10px;
margin-bottom:5px;
font-size:14px;
}

.container input,
.container select{
width:100%;
padding:12px;
margin-bottom:10px;
border:none;
border-radius:8px;
background:#0a2540;
color:white;
font-size:14px;
}

.container button{
width:100%;
padding:12px;
margin-top:15px;
border:none;
border-radius:8px;
background:linear-gradient(90deg,#0066ff,#00bfff);
color:white;
font-size:16px;
cursor:pointer;
}

.container button:hover{
opacity:0.9;
}

</style>

</head>

<body>

<header>
<h2>Edit Relief Request</h2>
</header>

<div class="container">

<form action="update_request.php" method="POST">

<input type="hidden" name="id" value="<?php echo $row['id']; ?>">

<label>Name</label>
<input type="text" name="name" value="<?php echo $row['user_name']; ?>" required>

<label>Relief Type</label>
<select name="relief_type">
<option value="Food">Food</option>
<option value="Water">Water</option>
<option value="Medicine">Medicine</option>
<option value="Shelter">Shelter</option>
</select>

<label>District</label>
<input type="text" name="district" value="<?php echo $row['district']; ?>" required>

<label>Severity</label>
<select name="severity">

<option value="Low" <?php if($row['severity']=="Low") echo "selected"; ?>>Low</option>

<option value="Medium" <?php if($row['severity']=="Medium") echo "selected"; ?>>Medium</option>

<option value="High" <?php if($row['severity']=="High") echo "selected"; ?>>High</option>

</select>

<button type="submit">Update Request</button>

</form>

</div>

</body>
</html> 