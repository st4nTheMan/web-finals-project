<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Register</title>
        <link rel="stylesheet" href="css/register_style.css" />
    </head>

    <body>
        <div id="register">
            <div class="container">
                <div class="register-form">
                    <form action="" method="POST" class="form" id="login-form">
                        <h1>Register</h1>
                        <div class="form-group">
                            <input type="text" name="firstName" id="firstName" placeholder="First name" required />
                        </div>
                        <div class="form-group">
                            <input type="text" name="lastName" id="lastName" placeholder="Last name" required />
                        </div>
                        <div class="form-group">
                            <input type="text" name="username" id="username" placeholder="Username" required />
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" id="password" placeholder="Password" required />
                        </div>
                        <button class="btn" type="submit" name="RegisterSubmit" value="Register">Register</button>
                        <?php
                        if(isset($_SESSION['registrationSuccess']) && $_SESSION['registrationSuccess'] === true) {
                            echo '<div class="success-message">Account successfully registered</div>';
                            unset($_SESSION['registrationSuccess']); // Clear the success session variable
                        }
                        ?>
                        <div id="reg_link">
                            <p>Already have an account? <a href="?login=true" class="text-info">Login here</a> </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>

</html>