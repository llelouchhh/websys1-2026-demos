<?php
    require 'connect.php';

    $errors = [];

    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $username = trim($_POST['username']);
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);

        if(empty($errors)){
            $username_u = mysqli_real_escape_string($mysqli, $username);
            $email_e = mysqli_real_escape_string($mysqli, $email);
            $password_p = mysqli_real_escape_string($mysqli, $password);
        }

    }

     $sql = "INSERT INTO users(userId, username, email, password) VALUES(NULL, '$username_u', '$email_e', MD5('$password_p'))";
        if(!mysqli_query($mysqli, $sql)){
            echo 'error';
        }else{
            header('index.php');
        }

?>