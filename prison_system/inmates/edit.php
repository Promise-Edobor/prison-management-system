<?php
include("../config/db.php");

$id = $_GET['id'];

$query = "SELECT * FROM inmates WHERE id='$id'";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
<title>Edit Inmate</title>

<style>

body{
font-family: Arial;
background:#f4f6f9;
margin:0;
padding:0;
}

.container{
width:500px;
margin:60px auto;
background:white;
padding:30px;
border-radius:8px;
box-shadow:0 0 10px rgba(0,0,0,0.1);
}

h2{
text-align:center;
margin-bottom:20px;
}

input{
width:100%;
padding:10px;
margin:8px 0;
border:1px solid #ccc;
border-radius:5px;
}

button{
width:100%;
padding:12px;
background:#007bff;
color:white;
border:none;
border-radius:5px;
font-size:16px;
cursor:pointer;
}

button:hover{
background:#0056b3;
}

.back{
display:block;
text-align:center;
margin-top:15px;
text-decoration:none;
color:#555;
}

</style>

</head>

<body>

<div class="container">

<h2>Edit Inmate</h2>

<form method="POST" action="update.php">

<input type="hidden" name="id" value="<?php echo $row['id']; ?>">

Name
<input type="text" name="name" value="<?php echo $row['name']; ?>" required>

Offence
<input type="text" name="offence" value="<?php echo $row['offence']; ?>" required>

Conviction
<input type="text" name="conviction" value="<?php echo $row['conviction']; ?>" required>

Jail Term
<input type="text" name="jail_term" value="<?php echo $row['jail_term']; ?>" required>

Address
<input type="text" name="address" value="<?php echo $row['address']; ?>" required>

Status
<input type="text" name="status" value="<?php echo $row['status']; ?>" required>

<button type="submit">Update Inmate</button>

</form>

<a class="back" href="manage_inmates.php">⬅ Back to Manage Inmates</a>

</div>

</body>
</html>