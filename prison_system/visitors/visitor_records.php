<?php
include("../config/db.php");

$query = "SELECT * FROM visitors";
$result = mysqli_query($conn,$query);
?>

<!DOCTYPE html>
<html>
<head>

<title>Visitor Records</title>

<style>

body{
font-family: Arial;
background:#f4f6f9;
margin:0;
padding:0;
}

.container{
width:90%;
margin:40px auto;
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

h2{
text-align:center;
margin-bottom:20px;
}

</style>

</head>

<body>

<div class="container">

<h2>Visitor Records</h2>

<table>

<tr>
<th>ID</th>
<th>Visitor Name</th>
<th>Inmate ID</th>
<th>Visit Date</th>
<th>Relationship</th>
</tr>

<?php

while($row = mysqli_fetch_assoc($result)){

?>

<tr>

<td><?php echo $row['id']; ?></td>
<td><?php echo $row['visitor_name']; ?></td>
<td><?php echo $row['inmate_id']; ?></td>
<td><?php echo $row['visit_date']; ?></td>
<td><?php echo $row['relationship']; ?></td>

</tr>

<?php
}
?>

</table>

</div>

</body>
</html>