<?php

    class UserController {
        public $model;

        public function checkUserAccess() {
            if(isset($_SESSION['userLoginStatus'])) {
                require('../view/login.php');
                exit;
            }
        }

        public function loginAction() {
            if(isset($_POST['LoginSubmit'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];
        
                $checkUserLogin = $this->model->checkUserLogin($username, md5($password));
                if($checkUserLogin == 1) {
                    $_SESSION['userLoginStatus'] = 1;
                    require('../view/dashboard.php');
                } else {
                    // Username or password is incorrect
                    // You can redirect back to login page or display an error message
                    echo "Invalid username or password";
                }
            }
            
            if(!isset($_SESSION['userLoginStatus'])) {
                return require('../view/login.php');
            }else {
                require('../view/dashboard.php');
            }
        }

        public function logoutAction() {
            unset($_SESSION['userLoginStatus']);
            return require('../view/login.php');
        }

        public function registerAction() {
            if(isset($_POST['RegisterSubmit'])) {
                $firstName = $_POST['firstName'];
                $lastName = $_POST['lastName'];
                $username = $_POST['username'];
                $password = $_POST['password'];
        
                $registrationStatus = $this->model->userRegister($firstName, $lastName, $username, md5($password));
                if ($registrationStatus) {
                    // Set registration success session variable
                    $_SESSION['registrationSuccess'] = true;
                    // Redirect to login page
                    require('../view/login.php');
                    exit;
                } else {
                    // Registration failed, display error message
                    echo "<script>alert('Registration failed');</script>";
                }
                
            }

            if(!isset($_SESSION['userLoginStatus'])) {
                return require('../view/register.php');
            }else {
                require('../view/login.php');
            }
        }
    }

?>