<?php
// Error codes

// Error code 1: Email already exists
if(isset($_COOKIE['error'])){
    $error = $_COOKIE['error'];
    if($error == 1){
        echo "Email already exists";}
}
// Error code 2: Email does not exist
if(isset($_COOKIE['error'])){
    $error = $_COOKIE['error'];
    if($error == 2){
        echo "Email does not exist";}
}
// Error code 3: Password is incorrect
if(isset($_COOKIE['error'])){
    $error = $_COOKIE['error'];
    if($error == 3){
        echo "Password is incorrect";}
}
// Error code 4: Email and password are required
if(isset($_COOKIE['error'])){
    $error = $_COOKIE['error'];
    if($error == 4){
        echo "Email and password are required";}
}
// Error code 5: Email is required
if(isset($_COOKIE['error'])){
    $error = $_COOKIE['error'];
    if($error == 5){
        echo "Email is required";}
}
// Error code 6: Password is required
if(isset($_COOKIE['error'])){
    $error = $_COOKIE['error'];
    if($error == 6){
        echo "Password is required";}
}
// Error code 7: Name is required
if(isset($_COOKIE['error'])){
    $error = $_COOKIE['error'];
    if($error == 7){
        echo "Name is required";}
}
// Error code 8: Email is not valid
if(isset($_COOKIE['error'])){
    $error = $_COOKIE['error'];
    if($error == 8){
        echo "Email is not valid";}
}
// Error code 9: Password must be at least 6 characters
if(isset($_COOKIE['error'])){
    $error = $_COOKIE['error'];
    if($error == 9){
        echo "Password must be at least 6 characters";}
}
// Error code 10: Passwords do not match
if(isset($_COOKIE['error'])){
    $error = $_COOKIE['error'];
    if($error == 10){
        echo "Passwords do not match";}
}





?>