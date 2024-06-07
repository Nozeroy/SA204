<?php
    if(isset($_COOKIE['id'])){
        header('Location: ../index.php');
        setcookie('error', 14, time() + 1, '/');
    }
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
    <title>Register</title>
    <script src="../js/main.js"></script>
</head>


<body onload="checkCookie()">
    <div class="register-container">
        <header class="header">
            <?php include '../includes/nav.php'; ?>
        </header>
        <form action="register.php" method="post">
            <div class="form-container">
                <div class="form-background"></div>
                <div class="form-content">
                    <div class="form-group header">
                        <div class="header-background"></div>
                        <div class="header-title">Register</div>
                    </div>
                    <div class="form-group name">
                        <div class="input-background"></div>
                        <div class="input-label">
                            <input type="text" name="name" id="name">
                        </div>
                    </div>
                    <div class="form-group surname">
                        <div class="input-background"></div>
                        <div class="input-label">
                            <input type="text" name="surname" id="surname">
                        </div>
                    </div>
                    <div class="form-group email">
                        <div class="input-background"></div>
                        <div class="input-label">
                            <input type="email" name="email" id="email">
                        </div>
                    </div>
                    <div class="form-group password">
                        <div class="input-background"></div>
                        <div class="input-label">
                            <input type="password" name="password" id="password">
                        </div>
                    </div>
                    <div class="form-group submit">
                        <div class="submit-background"></div>
                        <div class="submit-label">
                            <input type="submit" value="submit">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>


</html>