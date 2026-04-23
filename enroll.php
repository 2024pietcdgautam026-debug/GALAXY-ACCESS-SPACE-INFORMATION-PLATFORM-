<?php

$host = "localhost";
$user = "root";
$pass = "";
$db   = "galaxy_access";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email     = mysqli_real_escape_string($conn, $_POST['user_email']);
    $prog_id   = mysqli_real_escape_string($conn, $_POST['prog_id']);
    $prog_name = mysqli_real_escape_string($conn, $_POST['prog_name']);

    $sql = "INSERT INTO enrollments (user_email, program_id, program_name) 
            VALUES ('$email', '$prog_id', '$prog_name')";

    if (mysqli_query($conn, $sql)) {
      
        header("Location: success.php?program=" . urlencode($prog_name));
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>