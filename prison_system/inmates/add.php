<?php
include "../config/database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['full_name'];
    $conviction = $_POST['conviction'];
    $offence = $_POST['offence'];
    $address = $_POST['address'];
    $jail_term = $_POST['jail_term'];

    $stmt = $conn->prepare("INSERT INTO inmates (full_name, conviction, offence, address, jail_term) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $conviction, $offence, $address, $jail_term);
    $stmt->execute();

    echo "Inmate Registered Successfully";
}
?>

<form method="POST">
Full Name <input type="text" name="full_name"><br>
Conviction <input type="text" name="conviction"><br>
Offence <input type="text" name="offence"><br>
Address <input type="text" name="address"><br>
Jail Term <input type="text" name="jail_term"><br>
<button type="submit">Save</button>
</form>