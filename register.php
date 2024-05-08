<!DOCTYPE html>
<html>

<head>
    <link href="./css/main.css" rel="stylesheet" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <title>Register</title>
</head>

<body>
    <?php include 'includes/header.php'; ?>
    <div class="v1_11R">
            <div class="v1_3R"></div>
            <div class="v1_4R"></div>
            <div class="v1_10R">
                <div class="v1_5R"></div>
                <div class="v1_7R"></div>
                <div class="v1_8R"></div>
                <div class="v1_9R"></div>
            </div>
        </div>
</body>

</html>

<?php

if(isset($_COOKIE['user'])){
    header('Location: index.php');
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'includes/db.php';	
    $prenom = mysqli_real_escape_string($conn, $_POST['prenom']);
    $nom = mysqli_real_escape_string($conn, $_POST['nom']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $mdp = sha1(mysqli_real_escape_string($conn, $_POST['mdp']));
    $id = time();
    
    $sql = "INSERT INTO users (id, prenom, nom, email, mdp) VALUES ('$id', '$prenom', '$nom', '$email', '$mdp')";
    if (mysqli_query($conn, $sql)) {
        mail($email, "Welcome", "Welcome to our website");
        header('Location: index.php');
        setcookie("user", $id, time() + 3600, "/");
        
    
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}



?>
