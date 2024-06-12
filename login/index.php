<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <title>Login Page</title>
    <script src="../js/main.js"></script>
</head>
<body onload="checkCookie()">
    <div class="register-container">
        <header class="header">
            <?php include '../includes/nav.php'; ?>
        </header>
    <div class="form-container">
        <div class="form-background"></div>
        <div class="form-content">
            <form action="login.php" method="post">
            <div class="form-group header">
                <div class="header-background"></div>
                <div class="header-title">Login</div>
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
</body>
</html>
