<?php
include("../config/db.php");
?>

<!DOCTYPE html>
<html>
<head>

<title>Search Inmate</title>

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

h2{
text-align:center;
margin-bottom:20px;
}

form{
text-align:center;
margin-bottom:20px;
}

input{
padding:10px;
width:300px;
border:1px solid #ccc;
border-radius:5px;
}

button{
padding:10px 20px;
background:#007bff;
color:white;
border:none;
border-radius:5px;
cursor:pointer;
}

table{
width:100%;
border-collapse:collapse;
background:white;
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

</style>

</head>

<body>

<div class="container">

<h2>Search Inmate</h2>

<form method="GET">

<input type="text" name="search" placeholder="Enter inmate name or ID">

<button type="submit">Search</button>

</form>

<table>

<tr>
<th>ID</th>
<th>Name</th>
<th>Offence</th>
<th>Conviction</th>
<th>Jail Term</th>
<th>Status</th>
</tr>

<?php

if(isset($_GET['search'])){

$search = $_GET['search'];

$query = "SELECT * FROM inmates WHERE name LIKE '%$search%' OR id LIKE '%$search%'";

$result = mysqli_query($conn,$query);

while($row = mysqli_fetch_assoc($result)){

?>

<tr>

<td><?php echo $row['id']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['offence']; ?></td>
<td><?php echo $row['conviction']; ?></td>
<td><?php echo $row['jail_term']; ?></td>
<td><?php echo $row['status']; ?></td>

</tr>

<?php
}
}
?>

</table>

</div>

</body>
</html>