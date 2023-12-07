<!-- register.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="register.css">
</head>
<body>
    <div class="container">
        <div class="form-container">
            <form id="register-form" action="register_process.php" method="POST">
                <h2>Register</h2>
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="nomorhp">Nomor Hp:</label>
                    <input type="text" id="nomorhp" name="nomorhp" required>
                </div>
                <div class="form-group">
                    <label for="umur">Umur:</label>
                    <input type="text" id="umur" name="umur" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="button-group">
                    <button type="submit">Register</button>
                    <button id="back-button" onclick="window.location.href='index.php'">Back</button>
                </div>
                <div id="error-message" style="color: red; display: none;">Registration failed. Please try again.</div>
            </form>
        </div>
    </div>
</body>
</html>
