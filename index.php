<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="login.php" method="POST">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required oninput="updateQuery()">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required oninput="updateQuery()">
            </div>
            <button type="submit">Login</button>
            
        </form>
        <div id="query-container">
            <!-- Display SQL query here -->
            
        </div>
    </div>

    <script>
        function updateQuery() {
            var username = document.getElementById('username').value;
            var password = document.getElementById('password').value;
            var queryContainer = document.getElementById('query-container');
            var query = "SELECT * FROM user WHERE username='" + username + "' AND password='" + password + "'";
            queryContainer.innerHTML = "<p>" + query + "</p>";
        }
    </script>
    </div>
</body>
</html>
