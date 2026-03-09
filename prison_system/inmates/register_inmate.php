<?php
session_start();
include("../config/db.php");

if(!isset($_SESSION['admin'])){
    header("Location: ../login.php");
    exit();
}

if(isset($_POST['register'])){

$name = $_POST['name'];
$offence = $_POST['offence'];
$conviction = $_POST['conviction'];
$jail_term = $_POST['jail_term'];
$address = $_POST['address'];
$status = $_POST['status'];

$sql = "INSERT INTO inmates (name, offence, conviction, jail_term, address, status)
VALUES (?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssss",$name,$offence,$conviction,$jail_term,$address,$status);

if($stmt->execute()){
$message = "Inmate Registered Successfully";
}else{
$error = "Error registering inmate";
}

}
?>

<!DOCTYPE html>
<html>
<head>

<title>Register Inmate</title>

<style>

body{
font-family: Arial;
background:#f4f6f9;
}

.container{
width:500px;
margin:60px auto;
background:white;
padding:30px;
border-radius:8px;
box-shadow:0 0 10px rgba(0,0,0,0.1);
}

input,textarea,select{
width:100%;
padding:10px;
margin:8px 0;
border:1px solid #ccc;
border-radius:5px;
}

button{
background:#007bff;
color:white;
padding:10px;
border:none;
width:100%;
border-radius:5px;
}

h2{
text-align:center;
}

</style>

</head>

<body>

<div class="container">

<h2>Register Inmate</h2>

<?php
if(isset($message)){
echo "<p style='color:green;'>$message</p>";
}

if(isset($error)){
echo "<p style='color:red;'>$error</p>";
}
?>

<form method="POST">

<input type="text" name="name" placeholder="Inmate Name" required>

<input type="text" name="offence" placeholder="Offence" required>

<input type="text" name="conviction" placeholder="Conviction" required>

<input type="text" name="jail_term" placeholder="Jail Term (e.g 5 Years)" required>

<textarea name="address" placeholder="Address"></textarea>

<select name="status">

<option value="Active">Active</option>
<option value="Released">Released</option>

</select>

<button type="submit" name="register">Register Inmate</button>

</form>

</div>

</body>
</html>