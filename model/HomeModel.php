<?php

    class HomeModel {
        public $db;

        public function checkUserLogin($username, $password) {
            $query = " SELECT count(*) FROM users_table WHERE username='{$username}' AND password='{$password}'";
            $stmt = $this->db->prepare($query)->execute();
            return $stmt;
        }
        
        public function userRegister($firstName, $lastName, $username, $password) {
            $query = "INSERT INTO users_table (first_name, last_name, username, password) VALUES ('".$firstName."', '".$lastName."','".$username."','".
            $password."')";
            $stmt = $this->db->query($query);
            return 1;
        }
    }

?>