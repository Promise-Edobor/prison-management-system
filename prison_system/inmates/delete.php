<?php

include("../config/db.php");

$id = $_GET['id'];

$query = "DELETE FROM inmates WHERE id='$id'";

mysqli_query($conn,$query);

header("Location:view.php");

?>