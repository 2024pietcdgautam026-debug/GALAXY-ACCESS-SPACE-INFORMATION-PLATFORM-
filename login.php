<?php
session_start();
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);

        if(password_verify($password, $row['password'])){
            
            $_SESSION['user_id'] = $row['id'];

          
            $login_time = date("Y-m-d H:i:s");

            $log_sql = "INSERT INTO user_logs (user_id, login_time) 
                        VALUES ('{$row['id']}', '$login_time')";
            mysqli_query($conn, $log_sql);

            $_SESSION['log_id'] = mysqli_insert_id($conn);

           
            header("Location: dashboard1.php");
            exit();

        } else {
            echo "❌ Wrong Password";
        }
    } else {
        echo "❌ User not found";
    }
}
?>