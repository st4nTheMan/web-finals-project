<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    <div id="register">
            <h3>Register Form</h3>
            <div class="container">
                <div id="login-row">
                    <div id="login-column">
                        <div class="login-form">
                            <form action="" method="POST" class="form" id="login-form">
                                <h3>Register</h3>
                                <div class="form-group">
                                    <label for="firstName" class="txt-info">First name: </label><br>
                                    <input type="text" name="firstName" id="firstName" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="lastName" class="txt-info">Last name: </label><br>
                                    <input type="text" name="lastName" id="lastName" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="username" class="txt-info">Username: </label><br>
                                    <input type="text" name="username" id="username" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="password" class="txt-info">Password: </label><br>
                                    <input type="password" name="password" id="password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="RegisterSubmit" value="Login"/>
                                </div>
                                <div id="reg_link">
                                    <a href="?login=true" class="text-info">Login here</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>