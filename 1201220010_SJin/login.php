<!-- login.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
    <div class="container">
        <div class="form-container">
            <form id="login-form" action="login_process.php" method="POST">
                <h2>Login</h2>
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="button-group">
                    <button type="submit">Login</button>
                    <button id="back-button" onclick="window.location.href='index.php'">Back</button>
                </div>
                <div id="error-message" style="color: red; display: none;">Invalid username or password</div>
            </form>
        </div>
    </div>

    <script>
        document.getElementById('login-form').addEventListener('submit', function (event) {
            event.preventDefault(); // Prevent the form from submitting traditionally

            // Assuming you have an AJAX function for making requests to the server
            // Send a request to login_process.php
            fetch('login_process.php', {
                method: 'POST',
                body: new FormData(this),
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Redirect to a success page or perform other actions for successful login
                    window.location.href = 'index.php';
                } else {
                    // Show a pop-up message for unsuccessful login
                    document.getElementById('error-message').style.display = 'block';
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
        });
    </script>
</body>
</html>
