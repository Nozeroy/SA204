<?php
    include '../includes/connect.php';
    include './includes/errors.php';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $id = time();

    $name = mysqli_real_escape_string($connection, $name);
    $email = mysqli_real_escape_string($connection, $email);
    $password = mysqli_real_escape_string($connection, $password);

    if(empty($name) && empty($email) && empty($password)){
        setcookie('error', 8, time() + 1, '/');
        exit();
    }elseif(strlen($password) < 6){
        setcookie('error', 9, time() + 1, '/');
        exit();
    }elseif($password != $password2){
        setcookie('error', 10, time() + 1, '/');
        exit();
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        setcookie('error', 11, time() + 1, '/');
        exit();
    }elseif(!preg_match('/^[a-zA-Z0-9]*$/', $name)){
        setcookie('error', 12, time() + 1, '/');
        exit();
    }

    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($connection, $sql);
    $count = mysqli_num_rows($result);
    if($count > 0){
        setcookie('error', 1, time() + 1, '/');
        exit();
    }

    $sql = "INSERT INTO users (id, name, email, password) VALUES ('$id', '$name', '$email', '$password')";
    $result = mysqli_query($connection, $sql);



?>