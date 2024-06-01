<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/login_style.css">
</head>

<body>
    <div id="login">
        <div class="container">
            <div class="login-form">
                <form action="?action=login" method="POST" class="form" id="login-form">
                    <h1>Login</h1>
                    <div class="form-group">
                        <input type="text" name="username" id="username" placeholder="Username" required>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" id="password" placeholder="Password" required>
                    </div>
                    <button class="btn" type="submit" name="LoginSubmit" value="Login"> Login</button>
                    <div id="reg_link">
                        <p>Don't have an account? <a href="?action=register" class="text-info">Register here</a> </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>