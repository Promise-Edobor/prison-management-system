<<?php
include("../config/db.php");

$query = "SELECT * FROM inmates";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
<title>Manage Inmates</title>

<style>

body{
font-family: Arial;
background:#f4f6f9;
}

table{
width:90%;
margin:40px auto;
border-collapse:collapse;
background:white;
}

th,td{
padding:10px;
border:1px solid #ddd;
text-align:center;
}

th{
background:#007bff;
color:white;
}

a{
text-decoration:none;
padding:6px 10px;
border-radius:4px;
}

.edit{
background:green;
color:white;
}

.delete{
background:red;
color:white;
}

</style>

</head>

<body>

<h2 style="text-align:center;">Manage Inmates</h2>

<table>

<tr>
<th>ID</th>
<th>Name</th>
<th>Offence</th>
<th>Conviction</th>
<th>Jail Term</th>
<th>Address</th>
<th>Status</th>
<th>Action</th>
</tr>

<?php while($row = mysqli_fetch_assoc($result)) { ?>

<tr>

<td><?php echo $row['id']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['offence']; ?></td>
<td><?php echo $row['conviction']; ?></td>
<td><?php echo $row['jail_term']; ?></td>
<td><?php echo $row['address']; ?></td>
<td><?php echo $row['status']; ?></td>

<td>

<a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>

<a class="delete" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>

</td>

</tr>

<?php } ?>

</table>

</body>
</html>