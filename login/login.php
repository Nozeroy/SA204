<?php


include '../includes/connect.php';
include '../includes/errors.php';

function sanitizeInput($data) {
    return htmlspecialchars(strip_tags(trim($data)));
}


$email = sanitizeInput($_POST['email']);
$password = sanitizeInput($_POST['password']);

$hashed_password = password_hash($password, PASSWORD_BCRYPT);

if(empty($email) && empty($password)){
    setcookie('error', 8, time() + 1, '/');
    header('Location: ../login/index.php');
}elseif(strlen($password) < 6){
    setcookie('error', 9, time() + 1, '/');
    header('Location: ../login/index.php');
}elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    setcookie('error', 11, time() + 1, '/');
    header('Location: ../login/index.php');
}

$sql = "SELECT * FROM bdd_sae.utilisateurs WHERE email = '$email'";
$result = mysqli_query($con, $sql);
if(mysqli_num_rows($result) == 0){
    setcookie('error', 2, time() + 1, '/');
    header('Location: ../login/index.php');
}elseif(mysqli_num_rows($result) > 0){
    $row = mysqli_fetch_assoc($result);
    if(password_verify($password, $row['mdp'])){
        setcookie('id', $row['UID'], time() + 3600, '/');
        header('Location: ../index.php');
    }else{
        setcookie('error', 3, time() + 1, '/');
        header('Location: ../login/index.php');
    }
}



?>