<?php
$conn = mysqli_connect("localhost", "root", "", "galaxy_access");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>