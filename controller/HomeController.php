<?php

    class HomeController extends UserController {
        public $model;

        public function indexAction() {
            $this->checkUserAccess();
            return require('../view/dashboard.php');
        }
    }

?>