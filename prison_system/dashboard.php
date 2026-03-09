<?php
session_start();

if(!isset($_SESSION['admin'])){
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Prison Management Dashboard</title>

<style>

body{
margin:0;
font-family:Arial;
background:#ecf0f1;
}

/* Sidebar */

.sidebar{
position:fixed;
width:220px;
height:100%;
background:#2c3e50;
color:white;
padding-top:20px;
}

.sidebar h2{
text-align:center;
margin-bottom:30px;
}

.sidebar a{
display:block;
color:white;
padding:12px;
text-decoration:none;
}

.sidebar a:hover{
background:#34495e;
}

/* Topbar */

.topbar{
margin-left:220px;
background:#34495e;
color:white;
padding:15px;
font-size:18px;
}

/* Main Content */

.content{
margin-left:220px;
padding:20px;
}

/* Cards */

.cards{
display:flex;
gap:20px;
margin-bottom:20px;
}

.card{
flex:1;
background:white;
padding:20px;
border-radius:5px;
box-shadow:0 0 5px rgba(0,0,0,0.1);
text-align:center;
}

/* Table */

table{
width:100%;
background:white;
border-collapse:collapse;
}

table th, table td{
padding:12px;
border:1px solid #ddd;
text-align:left;
}

table th{
background:#3498db;
color:white;
}

</style>

</head>

<body>

<!-- Sidebar -->

<div class="sidebar">

<h2>Prison System</h2>

<a href="dashboard.php">Dashboard</a>
<a href="inmates/register_inmate.php">Register Inmate</a>
<a href="inmates/view.php">Manage Inmates</a>
<a href="visitors/register_visitor.php">Register Visitor</a>
<a href="visitors/visitor_records.php">Visitor Records</a>
<a href="inmates/all_inmates.php">All Inmates</a>
<a href="inmates/search_inmate.php">Search Inmate</a>
<a href="logout.php">Logout</a>

</div>

<!-- Topbar -->

<div class="topbar">
Welcome <?php echo $_SESSION['admin']; ?> | Admin Dashboard
</div>

<!-- Main Content -->

<div class="content">

<h2>Dashboard Overview</h2>

<div class="cards">

<div class="card">
<h3>Total Inmates</h3>
<p>120</p>
</div>

<div class="card">
<h3>Total Visitors</h3>
<p>58</p>
</div>

<div class="card">
<h3>Active Prisoners</h3>
<p>100</p>
</div>

<div class="card">
<h3>Released</h3>
<p>20</p>
</div>

</div>

<h3>Recent Inmates</h3>

<table>

<tr>
<th>ID</th>
<th>Name</th>
<th>Offence</th>
<th>Jail Term</th>
<th>Status</th>
</tr>

<tr>
<td>1</td>
<td>John Doe</td>
<td>Robbery</td>
<td>5 Years</td>
<td>Active</td>
</tr>

<tr>
<td>2</td>
<td>Alex Sam</td>
<td>Fraud</td>
<td>2 Years</td>
<td>Active</td>
</tr>

<tr>
<td>3</td>
<td>David Mark</td>
<td>Assault</td>
<td>3 Years</td>
<td>Active</td>
</tr>

</table>

</div>

</body>
</html>