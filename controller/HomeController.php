<?php

    class HomeController {
        public $model;

        public function indexAction() {
            if(isset($_GET['logout'])) {
                unset($_SESSION['userLoginStatus']);
            }
        
            if(isset($_POST['LoginSubmit'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];
        
                $checkUserLogin = $this->model->checkUserLogin($username, md5($password));
                if($checkUserLogin == 1) {
                    $_SESSION['userLoginStatus'] = 1;
                } else {
                    // Username or password is incorrect
                    // You can redirect back to login page or display an error message
                    echo "Invalid username or password";
                }
            }
        
            if(isset($_POST['RegisterSubmit'])) {
                $firstName = $_POST['firstName'];
                $lastName = $_POST['lastName'];
                $username = $_POST['username'];
                $password = $_POST['password'];
        
                $this->model->userRegister($firstName, $lastName, $username, md5($password));
                $_SESSION['userLoginStatus'] = 1;
            }
        
            $this->routerManager();
        }

        public function routerManager() {
            if(isset($_SESSION['userLoginStatus'])) {
                return require('view/dashboard.php');
            }

            if(isset($_GET['register'])) {
                return require('view/register.php');
            }

            if(isset($_GET['login']) || isset($_GET['logout'])) {
                return require('view/login.php');
            }
            return require('view/login.php');
        }
    }
    
?>