<?php
include("../config/db.php");

if(isset($_POST['submit'])){

$visitor_name = $_POST['visitor_name'];
$inmate_id = $_POST['inmate_id'];
$visit_date = $_POST['visit_date'];
$relationship = $_POST['relationship'];

$query = "INSERT INTO visitors (visitor_name,inmate_id,visit_date,relationship)
VALUES ('$visitor_name','$inmate_id','$visit_date','$relationship')";

mysqli_query($conn,$query);

$message = "Visitor Registered Successfully";

}
?>

<!DOCTYPE html>
<html>
<head>

<title>Register Visitor</title>

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
padding:10px;
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

.success{
color:green;
text-align:center;
margin-bottom:15px;
}

</style>

</head>

<body>

<div class="container">

<h2>Register Visitor</h2>

<?php
if(isset($message)){
echo "<p class='success'>$message</p>";
}
?>

<form method="POST">

<label>Visitor Name</label>
<input type="text" name="visitor_name" required>

<label>Inmate ID</label>
<input type="number" name="inmate_id" required>

<label>Visit Date</label>
<input type="date" name="visit_date" required>

<label>Relationship</label>
<input type="text" name="relationship" required>

<button type="submit" name="submit">Register Visitor</button>

</form>

</div>

</body>
</html>