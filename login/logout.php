<?php
    include '../includes/connect.php';
    include '../includes/errors.php';

    setcookie('id', '', time() - 1, '/');
    header('Location: ../index.php');

?>