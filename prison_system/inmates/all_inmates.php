<?php
include("../config/db.php");

$query = "SELECT * FROM inmates";
$result = mysqli_query($conn,$query);
?>

<!DOCTYPE html>
<html>
<head>

<title>All Inmates</title>

<style>

body{
font-family: Arial;
background:#f4f6f9;
margin:0;
padding:0;
}

.container{
width:95%;
margin:40px auto;
}

h2{
text-align:center;
margin-bottom:20px;
}

table{
width:100%;
border-collapse:collapse;
background:white;
box-shadow:0 0 10px rgba(0,0,0,0.1);
}

th,td{
padding:12px;
border:1px solid #ddd;
text-align:center;
}

th{
background:#007bff;
color:white;
}

tr:hover{
background:#f1f1f1;
}

</style>

</head>

<body>

<div class="container">

<h2>All Inmates</h2>

<table>

<tr>
<th>ID</th>
<th>Name</th>
<th>Offence</th>
<th>Conviction</th>
<th>Jail Term</th>
<th>Address</th>
<th>Status</th>
</tr>

<?php

while($row = mysqli_fetch_assoc($result)){

?>

<tr>

<td><?php echo $row['id']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['offence']; ?></td>
<td><?php echo $row['conviction']; ?></td>
<td><?php echo $row['jail_term']; ?></td>
<td><?php echo $row['address']; ?></td>
<td><?php echo $row['status']; ?></td>

</tr>

<?php
}
?>

</table>

</div>

</body>
</html>