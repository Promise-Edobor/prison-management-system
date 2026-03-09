<?php
session_start();
include("config/db.php");

if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM admins WHERE username=? AND password=?";
    $stmt = $conn->prepare($sql);

    if($stmt === false){
        die("Prepare failed: " . $conn->error);
    }

    $stmt->bind_param("ss",$username,$password);
    $stmt->execute();
    $stmt->store_result();

    if($stmt->num_rows > 0){
        $_SESSION['admin'] = $username;
        header("Location: dashboard.php");
        exit();
    }else{
        $error = "Invalid login details";
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Admin Login</title>

<style>
body{
    margin:0;
    padding:0;
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    font-family:Arial, Helvetica, sans-serif;
}

.login-box{
    background:#ffffff;
    padding:40px;
    width:320px;
    border-radius:10px;
    box-shadow:0 0 20px rgba(0,0,0,0.2);
    text-align:center;
    transition:0.5s;
}

body.dark{
    background:black;
}

body.dark .login-box{
    background:#1e1e1e;
    color:white;
    box-shadow:0 0 20px rgba(255,255,255,0.2);
}

input{
    width:100%;
    padding:10px;
    margin:10px 0;
    border:1px solid #ccc;
    border-radius:5px;
    outline:none;
}

body.dark input{
    background:#333;
    color:white;
    border:1px solid #555;
}

button{
    width:100%;
    padding:10px;
    border:none;
    border-radius:5px;
    background:#007bff;
    color:white;
    font-weight:bold;
    cursor:pointer;
    transition:0.3s;
}

button:hover{
    background:#0056b3;
}

.toggle-btn{
    margin-top:15px;
    background:transparent;
    color:#007bff;
    border:none;
    cursor:pointer;
    justify-items:center;
}
</style>

</head>
<body>

<div class="login-box">
    <h2>Admin Login</h2>

    <?php if(isset($error)) echo "<p style='color:red;'>$error</p>"; ?>

    <form method="POST">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button name="login">Login</button>
    </form>

    <button class="toggle-btn" onclick="toggleMode()">Switch Mode</button>
</div>

<script>
function toggleMode(){
    document.body.classList.toggle("dark");
}
</script>

</body>
</html>