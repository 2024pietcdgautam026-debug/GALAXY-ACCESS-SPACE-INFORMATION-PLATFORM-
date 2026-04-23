<?php
session_start();
include "db.php";

$log_id = $_SESSION['log_id'];
$logout_time = date("Y-m-d H:i:s");


$sql = "UPDATE user_logs 
        SET logout_time='$logout_time' 
        WHERE id='$log_id'";

mysqli_query($conn, $sql);

session_destroy();

header("Location: login.html");
?>