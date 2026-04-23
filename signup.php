<?php
include "db.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];

    
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

   
    $check = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $check);

    if(mysqli_num_rows($result) > 0){
        echo "❌ Email already registered!";
    } 
    else {

        $sql = "INSERT INTO users (name, email, password) 
                VALUES ('$name', '$email', '$hashed_password')";

        if(mysqli_query($conn, $sql)){
          
            header("Location: login.html");
            exit();
        } 
        else {
            echo "❌ Error: " . mysqli_error($conn);
        }
    }
}
?>