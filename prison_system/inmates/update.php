<?php
include("../config/db.php");

$id = $_POST['id'];
$name = $_POST['name'];
$offence = $_POST['offence'];
$conviction = $_POST['conviction'];
$jail_term = $_POST['jail_term'];
$address = $_POST['address'];
$status = $_POST['status'];

$query = "UPDATE inmates SET
name='$name',
offence='$offence',
conviction='$conviction',
jail_term='$jail_term',
address='$address',
status='$status'
WHERE id='$id'";

mysqli_query($conn,$query);
?>

<!DOCTYPE html>
<html>
<head>
<title>Update Successful</title>

<style>

body{
font-family:Arial;
background:#f4f6f9;
display:flex;
justify-content:center;
align-items:center;
height:100vh;
}

.box{
background:white;
padding:40px;
border-radius:8px;
box-shadow:0 0 10px rgba(0,0,0,0.1);
text-align:center;
}

a{
display:inline-block;
margin-top:15px;
padding:10px 20px;
background:#28a745;
color:white;
text-decoration:none;
border-radius:5px;
}

</style>

</head>

<body>

<div class="box">

<h2>✅ Inmate Updated Successfully</h2>

<a href="view.php">Back to Manage Inmates</a>

</div>

</body>
</html>